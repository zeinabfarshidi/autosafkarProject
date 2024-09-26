$('.nav__item--has-sub').hover(function (e) {
    var sh = $(this).find('.nav__sub').prop('scrollHeight');
    $(this).find('.nav__sub').css({'height': sh + 'px', 'transition': 'all 200ms ease'});
}, function () {
    sh = $(this).find('.nav__sub').prop('scrollHeight');
    $(this).find('.nav__sub').css({'height': 0, 'transition': 'all 200ms ease'});
})


$(".c-header__button-search").on("click", function () {
    $(this).toggleClass("c-header__icons--is-active");
    $('.c-search').toggleClass("c-search--is-active");
})
$('.c-header__button-nav').on('click', function () {
    $(this).toggleClass("c-header__icons--is-active");
    $('.nav').toggleClass("nav--is-acitve");
    $('.overlay').toggleClass("overlay--is-acitve");
})

$(document).on('click touchstart', function (e) {
    var c_header__button_nav = $('.c-header__button-nav');
    var nav = $('.nav');
    if ($(e.target).is(c_header__button_nav) || c_header__button_nav.has(e.target).length == 1) {
        $('.c-header__button-nav').toggleClass("c-header__icons--is-active");
        $('.nav').toggleClass("nav--is-acitve");
        $('.overlay').toggleClass("overlay--is-acitve");
    } else {
        $('.c-header__button-nav').removeClass("c-header__icons--is-active");
        $('.nav').removeClass("nav--is-acitve");
        $('.overlay').removeClass("overlay--is-acitve");
    }
    if ($(e.target).is(nav) || nav.has(e.target).length == 1) {
        $('.c-header__button-nav').addClass("c-header__icons--is-active");
        $('.nav').addClass("nav--is-acitve");
        $('.overlay').addClass("overlay--is-acitve");
    }
})

// $('.nav').on('click', function (){
//     $('.c-header__button-nav').addClass("c-header__icons--is-active");
//     $('.nav').addClass("nav--is-acitve");
//     $('.overlay').addClass("overlay--is-acitve");
// })

$(window).scroll(function () {
    if ($(this).scrollTop() > 150) {
        $(".nav").addClass("nav--sticky");
        $(".btn_tender").addClass("nav--sticky");
        $(".nav__link").addClass("color__transparent");
        $('.scroll-top').fadeIn();
        $('.blinking').addClass('opacity-0');
        $('.c-header__button-nav').removeClass('c-header__icons--is-active');
        $('.nav').removeClass("nav--is-acitve");
        $('.overlay').removeClass("overlay--is-acitve");
    }else{
        $(".nav").removeClass("nav--sticky");
        $(".btn_tender").removeClass("nav--sticky");
        $(".nav__link").removeClass("color__transparent");
        $('.scroll-top').fadeOut();
        $('.blinking').removeClass('opacity-0');
    }
})

$(document).ready(function(){
    $(".scroll-top").on("click", function () {
        $("html,body").animate({
           'scrollTop': 0
        }, 800);
    })


    $('.btn--comments-reply[href^="#"]').on('click',function (e) {
        e.preventDefault();
        var target = this.hash;
        var $target = $(target);
        $('html, body').animate({
            'scrollTop': $target.offset().top -100
        }, 900, 'swing', function () {
            // window.location.hash = target;
        });
    });
});
