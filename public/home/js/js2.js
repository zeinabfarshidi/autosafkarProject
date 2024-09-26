$('.header__account-icon').on('click', function (){
    $('#account__dropdown').toggleClass('d-none');
})

$('.auth__user-name').on('click', function (){
    var account__dropdown = $(this).parent().find($('.header__dropdown'));
    account__dropdown.toggleClass('d-none');
    account__dropdown.toggleClass('mt-animate');

    $('#header__dropdown-basket').addClass('d-none');
    $('#header__dropdown-basket').removeClass('mt-animate');
})


$('.header__basket-icon').on('click', function (){
    $('#header__dropdown-basket').toggleClass('d-none');
    $('#header__dropdown-basket').toggleClass('mt-animate');

    $('#account__dropdown').addClass('d-none');
    $('#account__dropdown').removeClass('mt-animate');
})

$('#header__basket-icon-responsive').on('click', function (){
    $('#header__dropdown-basket-responsive').toggleClass('d-none');
    $('#header__dropdown-basket-responsive').toggleClass('mt-animate');

    $('#account__dropdown-responsive').addClass('d-none');
    $('#account__dropdown-responsive').removeClass('mt-animate');
})

$('.auth__user-name--responsive').on('click', function (){
    $('#account__dropdown-responsive').toggleClass('d-none');
    $('#account__dropdown-responsive').toggleClass('mt-animate');

    $('#header__dropdown-basket-responsive').addClass('d-none');
    $('#header__dropdown-basket-responsive').removeClass('mt-animate');
})

$('#passwordReset').on('click', function (){
    var password_recovery_id = $('#password_recovery_id').val();
    var email = $('#email').val();
    var code = $('#code').val();
    var password = $('#password').val();
    var password_confirmation = $('#password_confirmation').val();
    $.ajax({
        method: 'POST',
        url: '/password_recovery_code',
        data: {
            password_recovery_id:password_recovery_id,
            email:email,
            code:code,
            password:password,
            password_confirmation: password_confirmation
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data){
            if (data == true)
                $('#passwordResetForm').submit();
            else
                $('#error_code').text(data);
        },
        error: function (jqXHR, textStatus, errorThrown){
            if (jQuery.parseJSON(jqXHR['responseText'])['errors']['email'])
                $('#error_email').text(jQuery.parseJSON(jqXHR['responseText'])['errors']['email'][0]);
            else
                $('#error_email').text('');
            if (jQuery.parseJSON(jqXHR['responseText'])['errors']['code'])
                $('#error_code').text(jQuery.parseJSON(jqXHR['responseText'])['errors']['code'][0]);
            else
                $('#error_code').text('');
            if (jQuery.parseJSON(jqXHR['responseText'])['errors']['password'])
                $('#error_password').text(jQuery.parseJSON(jqXHR['responseText'])['errors']['password'][0]);
            else
                $('#error_password').text('');
            if (jQuery.parseJSON(jqXHR['responseText'])['errors']['password_confirmation'])
                $('#error_password_confirmation').text(jQuery.parseJSON(jqXHR['responseText'])['errors']['password_confirmation'][0]);
            else
                $('#error_password_confirmation').text('');
        }
    })
})

$('.form-control').on('focus', function (){
    $(this).css('box-shadow', 'none');
})

$('.textarea').on('keyup ', function (e){
    var rows = Number($(this).attr('rows'));
    if (e.keyCode == 13){
        rows++;
        $(this).attr('rows', rows)
    }
})

$(document).ready(function () {
    $('.slider').each(function () {
        var swiper = $(this).find('.swiper-container');
        var slider__content = $(this).find('.slider__content');
        var swiper_button_next = slider__content.next();
        var swiper_button_prev = swiper_button_next.next();
        new Swiper(swiper, {
            loop: false,
            nextButton: swiper_button_next,
            prevButton: swiper_button_prev,
            slidesPerView: 4,
            paginationClickable: true,
            spaceBetween: 20,
            breakpoints: {
                1920: {slidesPerView: 4, spaceBetween: 20},
                1028: {slidesPerView: 3, spaceBetween: 20},
                768: {slidesPerView: 2, spaceBetween: 10},
                480: {slidesPerView: 1, spaceBetween: 0},
            }
        })
    })

});

function photoFeatures(event, id){
    $('#photoFeatures' + id).toggleClass('d-none');
    $('#photoFeatures' + id).toggleClass('mt-animate');
}

$('.closeAd').on('click', function (){
    $(this).parent().parent().remove();
})

function viewAd(event, id){
    $.ajax({
        method: 'POST',
        url: '/viewAd',
        data: {
            id:id,
        },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data){
            //
        },
        error: function (jqXHR, textStatus, errorThrown){
           //
        }
    })
}

$('.postCommentOnArticle').on('click', function (){

})

function showAnswer(event, id){
    $('#answers' + id).toggleClass('d-none')
}
function showReplies(event, id){
    $('#replies' + id).toggleClass('d-none')
}
