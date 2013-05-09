(function($){
	$('document').ready(function(){
		 $('#slider').nivoSlider({
		 	effect: 'boxRainReverse',
	 	 	animSpeed: 200, // Slide transition speed
        	pauseTime: 5000, // How long each slide will show
        	nextText: '▶',
        	prevText: '◀'
        	
		 });

		 //Footer tabs
		 $('.left ul li a', '#home-footer').on('click', function(evt){
		 	evt.preventDefault();
		 	var id = $(evt.target).attr('href');
		 	
		 	$('div, li', '#home-footer').removeClass('active');
		 	
		 	$(this, '#home-footer .left').parent().addClass('active').show();
		 	$(id, '#home-footer .right').addClass('active').show();
		 });

		 //Video Lightbox
		 console.log($.fancybox)
		 $('#intro_video').fancybox({
		 	type: 'iframe',
		 	width: 440
		 });
	});
})(jQuery);