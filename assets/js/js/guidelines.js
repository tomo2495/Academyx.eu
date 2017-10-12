$(document).ready(function(){

	//dropdown boxes	
	$(".dropdown-title").hover(
		function() {
			//$(this).find("a").css("color", "#000");
			//$(this).css("background", "#fff");
		},
		function() {
			//$(this).find("a").css("color", "#d9534f");
			//$(this).css("background", "#fbf6f0");
		}
	);
	$(".dropdown-title").click(function() {
		$(this).find(".chevron").toggleClass("top");
		$(this).find(".chevron").toggleClass("bottom");
		$(this).find(".drop-btn").toggleClass("closed");
		$(this).toggleClass("opened");
		$(this).parent().find(".box-content").slideToggle(400);
	});
	
	
	
	//Check to see if the window is top if not then display button
	$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.scrollToTop').fadeIn();
		} else {
			$('.scrollToTop').fadeOut();
		}
	});
	
	//Click event to scroll to top
	$('.scrollToTop').click(function(){
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
	

    //fix footer to bottom of the window in case of less content pages
	$(window).resize(function() {
		var windowheight = $(window).height();
		var headerheight = $('header').height();
		var footerheight = $('footer').height();
		var contentheight = $('main').height();
			
		if (contentheight > (windowheight - headerheight - footerheight)){
			$('footer').removeClass('footer-fixed');
		}
		else{
			$('footer').addClass('footer-fixed');
		}
	}).resize();
		
});