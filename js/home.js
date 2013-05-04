(function($){
	$('document').ready(function(){
		 $('#slider').nivoSlider({
		 	effect: 'boxRainReverse',
	 	 	animSpeed: 200, // Slide transition speed
        	pauseTime: 5000, // How long each slide will show
        	nextText: '▶',
        	prevText: '◀'
        	
		 });
	});
})(jQuery);