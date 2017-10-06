window.$ = window.jQuery = require('jquery');
window.Tether = require('tether');
require('popper.js/dist/umd/popper');
require('bootstrap/dist/js/bootstrap');
require('swiper/dist/js/swiper');

//toggle the menu by click on toggle button
var menuNavbarContainer = $("#menu-navbar");
var toggleButton = $('nav > button.btn-header');

$(document).ready(function() {
    toggleButton.click(function(){
        
        if (!menuNavbarContainer.hasClass('visible')){
            menuNavbarContainer.addClass('visible');
        }
        else{
            menuNavbarContainer.removeClass('visible');
        }
    });
});

$(document).on("click", function(event){
    var $trigger = toggleButton;
    if($trigger !== event.target && !$trigger.has(event.target).length){
        menuNavbarContainer.removeClass('visible');
    }            
});



$(document).ready(function() {
    //set max-width of menu dropdown based by container sizeToContent
    var containerWidth = $('.container').width();
    var windowWidth = $(window).width();
    if ($(window).width() < 768) {
        $('#menu-navbar').css('width', windowWidth);
    }
    else {
        $('#menu-navbar').css('max-width', containerWidth);
    }
});

//initialize swiper
var swiper = new Swiper('.swiper-container', {
    pagination: '.swiper-pagination',
    paginationClickable: true,
    lazyLoading: true,
    grabCursor: true,
    autoplay: 5000,
    loop: true,
    speed:1000,
    autoplayDisableOnInteraction: false,
    effect: 'fade',
    prevButton: '.button-prev',
    nextButton: '.button-next',
});