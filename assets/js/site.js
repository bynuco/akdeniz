$(document).ready(function () {

    $('[data-toggle="tooltip"]').tooltip({
        container: 'body'
    });

    const activeSlider = $('.swiper-slide-active').html();
    $('#sliderBg').html(activeSlider);

    $('ul.navbar-nav > li > .sub-menu').css({
        'min-height' : window.innerHeight - 336
    }).addClass('animated fadeIn');


});

const swiper = new Swiper('.swiper-container', {
    autoplay: {
        delay: 4000
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev'
    }
});

swiper.on('slideChangeTransitionStart', function () {
    var imageUrl = $('.swiper-slide-active').html();
    $('#sliderBg').html(imageUrl);
});

$('#toggleMenu').on('click',function () {
    let toggleMenu = $(this).is(':checked');

    if(toggleMenu)
        $('#menu-container').css('display','block');
    else
        $('#menu-container').css('display','none');
});

