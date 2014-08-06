
(function($) {
	
	$window = $(window);
	$body = $('body');
	$sections = $('.sections');
	$windowHeight = $('.window-height');
	
	$(document).ready(function(){
		
		//.parallax(xPosition, speedFactor, outerHeight) options:
		//xPosition - Horizontal position of the element
		//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
		//outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
		$sections.parallax("50%", 0.1);

	});

	$body.imagesLoaded( function() {
		setTimeout(function() {
			$body.removeClass('loading').addClass('loaded');
		}, 800);
	});

	$window.on('resize', function(){
		$windowHeight.height($window.height());
		
	}).triggerHandler('resize');

		
})(jQuery);