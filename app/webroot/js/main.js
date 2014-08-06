
(function($) {
	
	$window = $(window);
	$body = $('body');
	$sections = $('.sections');
	$header = $('.header');
	$windowHeight = $('.window-height');
	
	$(document).ready(function(){
		$sections.parallax("50%", 0.2);

		$body.localScroll({offset: {top: -121}});
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

	$('.bxslider').bxSlider({
		auto: true,
		controls: true,
		pager: false,
	  mode: 'fade'
	});
		
	$(".page-header").on('affix.bs.affix',function(){
		$(this).addClass("navbar-fixed-top");
	});

	$(".page-header").on('affix-top.bs.affix',function(){
		$(this).removeClass("navbar-fixed-top");
	});

	var anchor = $("#nav").offset().top;
	
	$(document).scroll(function(e){
    var scrollTop = $(document).scrollTop();
    if(scrollTop > anchor){
		$("#nav").removeClass('navbar-static-top').addClass('navbar-fixed-top');
		$(".pad-want").addClass('stacked');
    } else {
		$("#nav").removeClass('navbar-fixed-top').addClass('navbar-static-top');
		$(".pad-want").removeClass('stacked');
    }
	});

})(jQuery);

function initMap(){
	var mapOptions = {
    center: new google.maps.LatLng(40.435833800555567, -78.44189453125),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    zoom: 11
  };	 
  var map = new google.maps.Map(document.getElementById("mapHolder"), mapOptions);
}