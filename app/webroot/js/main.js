
(function($) {
	
	$window = $(window);
	$body = $('body');
	$sections = $('.sections');
	$header = $('.header');
	$windowHeight = $('.window-height');
	$anchor = $("#story").offset().top;
	
	$(document).ready(function(){
		$body.localScroll({
			onBefore: function(){
				if 
			}
		});
	});

	$body.imagesLoaded( function() {
		setTimeout(function() {
			$body.removeClass('loading').addClass('loaded');
		}, 800);
		$(window).trigger('resize')
		$(document).trigger('scroll');
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
		
	});

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

	$(document).scroll(function(e){
		$anchor = $("#story").offset().top;
	    var scrollTop = $(document).scrollTop();
	    if(scrollTop > $anchor - 10){
			$("#nav").removeClass('navbar-static-top').addClass('navbar-fixed-top');
			$(".pad-want").addClass('stacked');
	    } else {
			$("#nav").removeClass('navbar-fixed-top').addClass('navbar-static-top');
			$(".pad-want").removeClass('stacked');
	    }
	});

})(jQuery);

function initMap(){
	var myLatlng = new google.maps.LatLng(41.132584, 27.858386);
	var mapOptions = {
		zoom: 14,
		center: myLatlng,
		mapTypeControl: true,
		mapTypeControlOptions: {
			style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
		},
		zoomControl: true,
		zoomControlOptions: {
			style: google.maps.ZoomControlStyle.SMALL
		},
		scrollwheel: false,
	    
	    
	}
	var map = new google.maps.Map(document.getElementById('mapHolder'), mapOptions);

	var marker = new google.maps.Marker({
		position: myLatlng,
		map: map,
		title: 'Meşhur Çorlu Kahvesi'
	});

}

