$(document).ready(function(){

//Galerie Masory
//

	$(window).load(function(){
	    $('#containermasory').masonry({
	      itemSelector: '.box',
	      isAnimated:true,
	      isFitWidth:true
	    });
	});


//Affichage des sous menus du bootstrap Twitter
//
	$('.dropdown-toggle').dropdown();


//Scroll To Top
//

	$("#back-top").hide();
	
	// fade in #back-top
	$(function () {
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				$('#back-top').fadeIn();
			} else {
				$('#back-top').fadeOut();
			}
		});

		// scroll body to 0px on click
		$('#back-top a').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});
	});

//End jQuery
});
