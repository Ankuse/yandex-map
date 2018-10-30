$(document).ready(function () {

    $('.navigation-main').hide();
    $('.navigation-tab').hide();

    $('.category').click(function () {
        var nav_bck = $('.navigation-main');
        toggleClass(nav_bck);
    });

    function toggleClass(jqueryelem) {
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
        var select_tab = $(this).data('tab_select');
        showMenu($(`.navigation-tab[data-tab="${select_tab}"]`));
    });

    function showMenu(elem) {
        var elem = $(elem);
        var allhide = $('.navigation-tab[data-tab]');
        allhide.hide();
        elem.show();
    }
});