//equalize
;(function($){
	$.fn.equalize = function(){
		var elem1 = this[0], elem2 = this[1], max = 0, 
			paddingTop = 0, paddingBottom = 0, totalPadding = 0
			h1 = 0, h2 = 0;
		
		this.each(function(i, elem) {
			var height = $(this).outerHeight();
			(i == 1) ? h1 = height : h2 = height;
      		max = Math.max(max, height);
    	});

		this.each(function() {
      		if($(this).outerHeight() !== max){
      			var currHeight 			= $(this).outerHeight();
      				//max = 446
      				//currHeight = 420
      				difference 			= max - currHeight,
      				calculatedHeight 	= currHeight + difference;
      				console.log(max, currHeight, difference, calculatedHeight);
      			
      			$(this).css('height', calculatedHeight);
      		}
    	});
	}
}(jQuery));


(function($){
	$('document').ready(function(){
		//Implementation
		var sel1 = ($('#body').length > 0) ? '#body' : '#blog';
		$( sel1 + ', #sidebar', '#wrapper').equalize();		

		$('.trigger').on('click', function(evt){
			evt.preventDefault();
			$('#social .content').slideToggle(200);
		});
	
		$('#menu-primary-navigation li').hover(function(evt){
			evt.preventDefault();
			$(this).find('ul.sub-menu').slideDown(200);
		}, function(){
			$(this).find('ul.sub-menu').slideUp(200);
		})
	});

	//twitter 
	!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];
		if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");

	//fb
	(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

	//gp
	  (function() {
	    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
	    po.src = 'https://apis.google.com/js/plusone.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
	  })();

}(jQuery));