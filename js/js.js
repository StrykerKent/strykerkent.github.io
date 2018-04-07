$(function() { //document.ready shorthand
	// jQuery for page scrolling feature - requires jQuery Easing plugin
	$('a.page-scroll').bind('click', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: ($($anchor.attr('href')).offset().top - 0)
			}, 1250, 'easeInOutExpo');
			event.preventDefault();
		});
	$(window).scroll(function() {
		if ($(document).scrollTop() > 300) {
		    $('nav').addClass('shrink');
		} else {
		    $('nav').removeClass('shrink');
            $('.run_once').removeClass('run_once');
		}
	});
	//make nav go away after click on mobile
	$(document).on('click','.navbar-collapse.in',function(e) {
	    if( $(e.target).is('a') && $(e.target).attr('class') != 'dropdown-toggle' ) {
	        $(this).collapse('hide');
	    }
	});
	//validate contact form and submit through ajax
});

$(function() {

    $('#contact-form').validate();

    $('#contact-form').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
					  //var url = "contact.php";
            var url = "https://formspree.io/svenstinn@yahoo.com";

            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
								dataType: "json",
                success: function(data)
                {
                	$('#contact-form').html('<p style="text-align:center;">Contact form submitted successfully.</p>');
                    /*var messageAlert = 'alert-' + data.type;
                    var messageText = data.message;

                    var alertBox = '<div class="alert ' + messageAlert + ' alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + messageText + '</div>';
                    if (messageAlert && messageText) {
                        $('#contact-form').find('.messages').html(alertBox);
                        $('#contact-form')[0].reset();
                    }*/
                    //alert('form was submited');
                }
            });
            return false;
        }
    })
});

$(function() {
	// JavaScript
	window.sr = ScrollReveal();
	sr.reveal('.portfolio_img.web',{duration:1e3,delay:200},300);
	sr.reveal('.portfolio_img.marketing',{duration:1e3,delay:200},300);
	sr.reveal('.portfolio_img.design',{duration:1e3,delay:200},300);
	sr.reveal('.portfolio_img.reports',{duration:1e3,delay:200},300);
	sr.reveal('.icon',{duration:600,scale:.3,distance:"0px"},300);
	sr.reveal('.icon2',{duration:600,scale:.3,distance:"0px"},300);
	sr.reveal('.icon3',{duration:600,scale:.3,distance:"0px"},300);
	sr.reveal('.sr_about',{duration:600,scale:.3,distance:"0px"},500);
	sr.reveal('.sr_hire',{duration:600,scale:.3,distance:"0px"},300);
});
