import {Component, ElementRef, OnInit} from '@angular/core';
import {dataModel} from './data-model';
declare var ymaps: any;

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.styl']
})
export class AppComponent implements OnInit {

  price;
  data = dataModel;
  myMap;
  deliveryPoint;
  routeControl;
  geolocationControl;
  deliveryZones;
  calcNeededPrice;


  constructor(
      private _element: ElementRef,
  ) {
    const that = this;
    const rootApp = document.querySelector('app-root');

    const observer = new MutationObserver((mutations) => {
      if (that.deliveryZones) {
      that.price = this._element.nativeElement.attributes.getNamedItem('data-price').value;
        mutations.forEach((mutation) => {
          that.deliveryZones.each(function (obj) {
            if (that.price < obj.properties.get('price')) {
              that.calcNeededPrice = obj.properties.get('price') - that.price;
              const contentInBaloon = '<span>Стоимость доставки рассчитывается' + '</br>' + 'индивидуально!' +
                  '</span>' + '</br>' + `<span>До бесплатной доставки не хватает ${that.calcNeededPrice.toFixed(2)}р.</span>`;
              obj.properties.set('balloonContentHeader', contentInBaloon);
              // obj.properties.set('balloonContentHeader', 'Стоимость доставки: ' + obj.properties.get('price') + ' р.');
            } else {
              obj.properties.set('balloonContentHeader', 'Доставка бесплатная');
            }
          });

          that.routeControl.routePanel.getRouteAsync().then(function (route) {
            const activeRoute = route.getActiveRoute();
            if (activeRoute) {
              that.highlightResult(route);
            }
          });
        });
      }
    });

    observer.observe(rootApp, {
      attributes: true,
      childList: false,
      characterData: false
    });
  }

  ngOnInit(): void {
    this.price = this._element.nativeElement.attributes.getNamedItem('data-price').value;
    ymaps.ready().then(() => {
      this.myMap = new ymaps.Map('map', {
        center: [27.663907, 53.850576],
        zoom: 7,
        controls: ['geolocationControl', 'routePanelControl']
      });
      this.deliveryPoint = new ymaps.GeoObject({
        geometry: {type: 'Point'},
        properties: {iconCaption: 'Адрес'}
      }, {
        preset: 'islands#blackDotIconWithCaption',
        draggable: true,
        iconCaptionMaxWidth: '215'
      });

      // old methods on const, rewrite if need searchControl
      // const searchControl = myMap.controls.get('searchControl');

      // get control routePanelControl
      this.routeControl = this.myMap.controls.get('routePanelControl');
      // set state settings on routeControl
      this.routeControl.routePanel.state.set({
        // Тип маршрутизации.
        types: {auto: true},
        // Выключим возможность задавать пункт отправления в поле ввода.
        fromEnabled: false,
        // Адрес или координаты пункта отправления.
        from: 'улица Машиностроителей',
        // Включим возможность задавать пункт назначения в поле ввода.
        toEnabled: true,
        // Адрес или координаты пункта назначения.
        // to: 'Петербург'
      });

      this.routeControl.options.set({
        title: 'Расчёт зоны доставки',
        showHeader: true,
        autofocus: false,
      });
      this.routeControl.routePanel.options.set({
        allowSwitch: false,
        types: {
          auto: true
        },
        // hide type of router ex: auto, taxi, etc.
        reverseGeocoding: true,
        title: 'Расчёт зоны доставки',
        showHeader: true,
      });

      // get control geolocationControl
      this.geolocationControl = this.myMap.controls.get('geolocationControl');
      // hide geolocationControl icon
      this.geolocationControl.options.set({
        visible: false
      });

      // like ajax in example
      this.onZonesLoad(this.data);
    });
  }

  onZonesLoad(json) {
    const that = this;

    // Добавляем зоны на карту.
    this.deliveryZones = ymaps.geoQuery(json.data).addToMap(this.myMap);

    // Задаём цвет и контент балунов полигонов.
    this.deliveryZones.each(function (obj) {
      let color = obj.options.get('fillColor');
      color = color.substring(0, color.length - 2);
      obj.options.set({fillColor: color, fillOpacity: 0.4});
      obj.properties.set('balloonContent', obj.properties.get('name'));
      // balloon when click on zone
      if (that.price < obj.properties.get('price')) {
        that.calcNeededPrice = obj.properties.get('price') - that.price;
        const contentInBaloon = '<span>Стоимость доставки рассчитывается' + '</br>' + 'индивидуально!' + '</span>' + '</br>' +
            `<span>До бесплатной доставки не хватает ${that.calcNeededPrice.toFixed(2)}р.</span>`;
        obj.properties.set('balloonContentHeader', contentInBaloon);
        // obj.properties.set('balloonContentHeader', 'Стоимость доставки: ' + obj.properties.get('price') + ' р.');
      } else {
        obj.properties.set('balloonContentHeader', 'Доставка бесплатная');
      }
    });

    this.routeControl.routePanel.getRouteAsync().then(function (route) {
      route.model.events.add('requestsuccess', function (e) {
        const activeRoute = route.getActiveRoute();
        if (activeRoute) {
          that.highlightResult(route);
        }
      });
    });
  }

  highlightResult(obj) {
    // Сохраняем координаты переданного объекта.
    let coords;
    let activeRoute;
    if (obj.geometry != null ) {
      coords = obj.geometry.getCoordinates();
    } else {
      activeRoute = obj.getActiveRoute();
      coords = obj.properties.getAll().waypoints[1].request;
    }

    // Находим полигон, в который входят переданные координаты.
    const polygon = this.deliveryZones.searchContaining(coords).get(0);

    if (polygon) {
      // Уменьшаем прозрачность всех полигонов, кроме того, в который входят переданные координаты.
      this.deliveryZones.setOptions('fillOpacity', 0.4);
      polygon.options.set('fillOpacity', 0.8);

      // Перемещаем метку с подписью в переданные координаты и перекрашиваем её в цвет полигона.
      this.deliveryPoint.options.set('iconColor', polygon.options.get('fillColor'));

      if (this.price < polygon.properties.get('price')) {
        this.calcNeededPrice = polygon.properties.get('price') - this.price;
        const contentInBaloon = '<span>Стоимость доставки рассчитывается' + '</br>' + 'индивидуально!' + '</span>' + '</br>' +
            `<span>До бесплатной доставки не хватает ${this.calcNeededPrice.toFixed(2)}р.</span>`;
        const balloonContentLayout = ymaps.templateLayoutFactory.createClass(contentInBaloon);
        obj.options.set('routeBalloonContentLayout', balloonContentLayout);
        activeRoute.balloon.open();
      } else {
        const balloonContentLayout = ymaps.templateLayoutFactory.createClass(
            '<b>Ваша стоимость заказа' + '</br>' + 'удовлетворяет бесплатной доставке</b>');
        obj.options.set('routeBalloonContentLayout', balloonContentLayout);
        activeRoute.balloon.open();
      }

    } else {
      // Если переданные координаты не попадают в полигон, то задаём стандартную прозрачность полигонов.
      this.deliveryZones.setOptions('fillOpacity', 0.4);

      const balloonContentLayout = ymaps.templateLayoutFactory.createClass(
          '<b>Особые условия доставки' + '</br>' + 'Пожалуйста, Cвяжитесь с оператором</b>'
      );
      obj.options.set('routeBalloonContentLayout', balloonContentLayout);
      activeRoute.balloon.open();
    }
  }

}
