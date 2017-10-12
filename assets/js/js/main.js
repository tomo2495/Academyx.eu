$(document).ready(function() {
//toggle the menu by click on toggle button
var menuNavbarContainer = $("#menu-navbar");
var toggleButton = $('nav > button.btn-header');

    toggleButton.click(function(){
        if (!menuNavbarContainer.hasClass('visible')){
			
            menuNavbarContainer.addClass('visible');
        }
        else{
            menuNavbarContainer.removeClass('visible');
        }
    });

	$(document).on("click", function(event){
		var $trigger = toggleButton;
		if($trigger !== event.target && !$trigger.has(event.target).length){
			menuNavbarContainer.removeClass('visible');
		}            
	});
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