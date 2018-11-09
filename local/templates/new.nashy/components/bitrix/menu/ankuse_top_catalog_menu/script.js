(function(){
    $(document).ready(function () {

        $('.navigation-container').css('display', 'block');

        $('.navigation-main').hide();
        $('.navigation-tab').hide();

        $('.category').click(function () {
            var nav_bck = $('.navigation-main');
            toggleClass(nav_bck);
        });

        function toggleClass(jqueryelem) {
            var elem = $(jqueryelem);
            $('.bodybackallscreenblack').css('position', 'fixed');
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
                $('.bodybackallscreenblack').css('position', 'relative');
            }
        });
        $('.navigation-tab_select').hover(function () {
            var select_tab = $(this).data('tab_select');
            showMenu($(`.navigation-tab[data-tab="${select_tab}"]`));
        });

        $('.navigation-tab_select').mouseenter(function () {
            $('.navigation-tab_select').parent().find('.active').removeClass('active');
            $(this).addClass('active');
        });

        function showMenu(elem) {
            var element = $(elem);
            var allhide = $('.navigation-tab[data-tab]');
            allhide.hide();
            element.show();
        }
    });
}());