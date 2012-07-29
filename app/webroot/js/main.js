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

//END JQUERY
});