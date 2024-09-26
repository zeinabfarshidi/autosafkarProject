$('.item-li').each(function () {
    var submenu = $(this).find($('.submenu'));
    var submenuLink = $(this).find('.submenuLink');
    if (submenuLink.hasClass('is-active')){
        $(this).addClass('is-active');
    }
    if ($(this).hasClass('is-active')){
        $(this).removeClass('item-li-hover');
        submenu.removeClass('d-none');
    }
    else {
        $(this).addClass('item-li-hover');
        submenu.addClass('d-none');
        $(this).hover(function (){
            var submenu = $(this).find($('.submenu'));
            submenu.toggleClass('submenu_hover');
            submenu.toggleClass('d-none');
            $('.sidebar__nav').toggleClass('overflow-y-unset');
        })
    }
})


