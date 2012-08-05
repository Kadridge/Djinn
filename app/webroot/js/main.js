jQuery(function($){

	//FACEBOOK TWITTER TRIANGLE SWAG
	//
	$("#facebook-twitter").click(function(event){
	    if(event.offsetX>event.offsetY){
	        parent.window.location="http://bing.com";
	    }else{
	        parent.window.location = "http://google.com";   
	    }
	});

	//Affichage des sous menus du bootstrap Twitter
	//
	$('.dropdown-toggle').dropdown();

	//Slider Home page 
	//
	$('#slider').canHazSlider({
		animSpeed:600,
		pauseTime:10000,
		direction:'vertical',
		navControllers:true,
		arrayControllers:false
	});

	//Animation du picto de la fleche dans la mise en avant de la home page
	//

	$('#hero').mouseenter(function(){
		$("#more-info").animate({marginLeft:'-=12'}, 200),
		$("#more-info").animate({marginLeft:'+=12'}, 200);
	});

	//Tipsy - Infobulle
	//
	$('a[rel=tipsy]').tooltip()

	//share-form-url

 	$("#share-form-url").click(function() {
 		$(this).select();
 	});

 	//Nav bar fixed
    //

    // grab the initial top offset of the navigation 
    var sticky_navigation_offset_top = $('.subnav-fixed').offset().top;
     
    // our function that decides weather the navigation bar should have "fixed" css position or not.
    var sticky_navigation = function(){
        var scroll_top = $(window).scrollTop(); // our current vertical position from the top
         
        // if we've scrolled more than the navigation, change its position to fixed to stick to top,
        // otherwise change it back to relative
        if (scroll_top > sticky_navigation_offset_top) { 
            $('.subnav-fixed').css({ 'position': 'fixed', 'top':0, 'left':0, 'background':'#396A97' });
        } else {
            $('.subnav-fixed').css({ 'position': 'relative', 'background':'transparent' }); 
        }   
    };
     
    // run our function on load
    sticky_navigation();
     
    // and run it again every time you scroll
    $(window).scroll(function() {
         sticky_navigation();
    });

//END JQUERY
});