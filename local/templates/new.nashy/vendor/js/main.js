$(document).ready(function () {

    $('.navigation-main').hide();
    $('.navigation-tab').hide();

    $('.category').click(function () {
        var nav_bck = $('.navigation-main');
        toggleClass(nav_bck);
    });

    function toggleClass(jqueryelem) {
        console.log(jqueryelem);
        var elem = $(jqueryelem);
        if(elem.hasClass('active')) {
            elem.removeClass('active');
            elem.hide();
        }else{
            elem.addClass('active');
            elem.show();
        }
    }
    // todo: при клике за внешней границы блока еще надо !
    $(document).mouseup(function (e) {
        var container = $('.navigation-main');
        if (container.has(e.target).length === 0){
            container.hide().removeClass('active');
        }
    });
    $('.navigation-tab_select').hover(function () {
        $(this).toggleClass('active');
        //console.log($('.navigation-tab_select').find('active'));
        var select_tab = $(this).data('tab_select');
        console.log(select_tab);
        console.log($(`.navigation-tab[data-tab="${select_tab}"]`));
        showMenu($(`.navigation-tab[data-tab="${select_tab}"]`));
    });

    function showMenu(elem) {
        var elem = $(elem);
        var allhide = $('.navigation-tab[data-tab]');
        console.log('allhide', allhide);
        allhide.hide();
        elem.show();
    }
});