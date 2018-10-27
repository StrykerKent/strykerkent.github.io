$(function() { //document.ready shorthand
	// jQuery for page scrolling feature - requires jQuery Easing plugin
	$('a.page-scroll').bind('click', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: ($($anchor.attr('href')).offset().top - 0)
			}, 1250, 'easeInOutExpo');
			event.preventDefault();
		});
	//make nav go away after click on mobile
	$(document).on('click','.navbar-collapse.in',function(e) {
	    if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
	        $(this).collapse('hide');
	    }
	});
	//send image src & alt to modal... dynamically load image & alt text in modal
	$("img").click(function () {
		$("#modalImage").attr({"src": $(this).attr("src"), "alt": $(this).attr("alt")});
	});
});
