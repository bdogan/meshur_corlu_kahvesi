
(function($) {
	
	$window = $(window);
	$body = $('body');
	$sections = $('.sections');
	$header = $('.sections');
	$windowHeight = $('.window-height');
	
	$(document).ready(function(){
		$sections.parallax("50%", 0.1);
		
	});

	$body.imagesLoaded( function() {
		setTimeout(function() {
			$body.removeClass('loading').addClass('loaded');
		}, 800);
	});

	$window.on('resize', function(){

		var h = $window.height();
		var w = $window.width();
		var hh = ((w * 1080) / 1920);

		$windowHeight.height($window.height());

		$sections.each(function(){
			$this = $(this);
			if (hh <= $window.height()) {
				$this.css('background-size', 'auto ' + $window.height() + 'px');	
			} else {
				$this.css('background-size', $window.width() + 'px auto');	
			}
		});
		
	}).triggerHandler('resize');

		
})(jQuery);