(function($) {
	$.fn.canHazSlider = function(params) {
	var defaults = {
		animSpeed:400,
		pauseTime:400,
		direction:'horizontal',
		navControllers:true,
		arrayControllers:true
	}
	params = $.extend(defaults, params);
	
	if(nbPhotos() > 1){
		newWidth = $('#slider').width();
		newHeight = $('#slider').height();
		sliderInit();
		timer = loadTimer();
		oldPos = 0;
		newPos = 0;
	}
	
	$('#fleche-right').live('click',function(){
		timer = resetTimer();
		nextPhoto();
	});
	
	$('#fleche-left').live('click',function(){
		timer = resetTimer();
		prevPhoto();
	});
	
	
	// Au clic sur une puce
	$('.slider-puce').live('click',function(){
		$this = $(this);
		if(!$this.hasClass('slider-puce-active')){
			timer = resetTimer();
			pucePhoto($this);
		}
	});
	
	
	// Fonction changeant la photo à l'action du timer
	function gallery(){
		var current = $('#slider li.slider-show');
		if (current.next().is('li')){
			var next = current.next();
			switch(params.direction){
				case 'horizontal' 	: newPos = oldPos + newWidth; break;
				case 'vertical'		: newPos = oldPos + newHeight; break;
			}
		}
		else{
			var next = $('#slider li:first');
			newPos = 0;
		}
		next.addClass('slider-show');
		current.removeClass('slider-show');
		nextPuce();
		
		switch(params.direction){
			case 'horizontal' 	: slideH(); break;
			case 'vertical'		: slideV(); break;
		}
	};
	
	
	// Fonction photo suivante au clic
	function nextPhoto(){
		var current = $('#slider li.slider-show');
		if (current.next().is('li')){
			var next = current.next();
				switch(params.direction){
					case 'horizontal' 	: newPos = oldPos + newWidth; break;
					case 'vertical'		: newPos = oldPos + newHeight; break;
				}
			}
		else{
			var next = $('#slider li:first');
			newPos = 0;
		}
		next.addClass('slider-show');
		current.removeClass('slider-show');
		nextPuce();
		
		switch(params.direction){
			case 'horizontal' 	: slideH(); break;
			case 'vertical'		: slideV(); break;
		}
	}
	
	// Fonction photo précédente au clic
	function prevPhoto(){
		var current = $('#slider li.slider-show');
		if (current.prev().is('li')){
			var next = current.prev();
				switch(params.direction){
					case 'horizontal' 	: newPos = oldPos - newWidth; break;
					case 'vertical'		: newPos = oldPos - newHeight; break;
				}
			}
		else{
			var next = $('#slider li:last');
			switch(params.direction){
				case 'horizontal' 	: newPos = newWidth * (nbPhotos() - 1); break;
				case 'vertical'		: newPos = newHeight * (nbPhotos() - 1); break;
			}
		}
		next.addClass('slider-show');
		current.removeClass('slider-show');
		prevPuce();
		
		switch(params.direction){
			case 'horizontal' 	: slideH(); break;
			case 'vertical'		: slideV(); break;
		}
	}
	
	// Fonction changeant la photo au clic sur une puce
	function pucePhoto($this){
		var puceId = $this.attr('id');
		var current = $('#slider li.slider-show');
		var next = $('#slider li').eq(''+puceId);
		next.addClass('slider-show');
		current.removeClass('slider-show');
		
		switchPuce(puceId);
		switch(params.direction){
			case 'horizontal' 	: newPos = newWidth * puceId; slideH(); break;
			case 'vertical'		: newPos = newHeight * puceId; slideV(); break;
		}
	}
	
	
	// Fonction pour le slide horizontal
	function slideH(){
		$('#slider ul').stop().css({'left':-oldPos}).animate({left:-newPos},params.animSpeed);
			oldPos = newPos;
	}
	
	// Fonction pour le slide vertical
	function slideV(){
		$('#slider ul').stop().css({'top':-oldPos}).animate({top:-newPos},params.animSpeed);
			oldPos = newPos;
	}
	
	//Initialisatoin des dimensions du container
	function dimInit(){
		// Position des chevrons
		var chevrons = (newHeight /2) - 35;
		$('#fleche-left').css('top',chevrons);
		$('#fleche-right').css('top',chevrons);
	}
	
	//Initialisation du slider
	function sliderInit(){
		$('#slider li:first').addClass('slider-show');	
		if(params.arrayControllers == true){
			flechesInit();
			dimInit();
		}
		switch(params.direction){
			case 'horizontal' 	: $('#slider ul li').css('float','left'); break;
			case 'vertical'		: break;
		}
	};
	
	// Compte le nombre d'images dans le slider
	function nbPhotos(){
		return ($('#slider li').length);
	};
	
	
	// Initialisation des flèches de nav
	function flechesInit(){
		$('#slider').append('<div id="fleches-navigation"><div id="fleche-left"></div><div id="fleche-right"></div></div>');
	}
	
	// Changer la puce active lors du clic
	function navigationActive(nextId){
		$('.slider-puce-active').removeClass('slider-puce-active');
		$('.slider-puces #'+ nextId).addClass('slider-puce-active');
	};
	
	// Changer la puce par ID
	function switchPuce(puceId){
		$('.slider-puce-active').removeClass('slider-puce-active');
		$('#puces-navigation #'+puceId).addClass('slider-puce-active');
	}
	
	// Changer la puce active lors du timer et clic suivant
	function nextPuce(){
		var temp = $('.slider-puce-active');
		if(temp.next().hasClass('slider-puce'))
			temp.next().addClass('slider-puce-active');
		else $('.slider-puce:first').addClass('slider-puce-active');
		temp.removeClass('slider-puce-active');
	};
	
	// Changer la puce active lors du clic précédent
	function prevPuce(){
		var temp = $('.slider-puce-active');
		if(temp.prev().hasClass('slider-puce'))
			temp.prev().addClass('slider-puce-active');
		else $('.slider-puce:last').addClass('slider-puce-active');
		temp.removeClass('slider-puce-active');
	};
		
	// Initialiser le timer
	function loadTimer(){
		return timer = setInterval(function(){gallery();},params.pauseTime);
	};
	
	// Remettre le timer à 0
	function resetTimer(){
		clearInterval(timer);
		return timer = setInterval(function(){gallery();},params.pauseTime);
	};

	// Arrêter le timer
	function stopTimer(){
		clearInterval();
	};	
	
	// Permettre le chaînage par jQuery
    return this;
	};
})(jQuery);