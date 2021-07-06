 AOS.init({
 	duration: 800,
 	easing: 'slide'
 });

(function($) {

	"use strict";

	var isMobile = {
		Android: function() {
			return navigator.userAgent.match(/Android/i);
		},
			BlackBerry: function() {
			return navigator.userAgent.match(/BlackBerry/i);
		},
			iOS: function() {
			return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
			Opera: function() {
			return navigator.userAgent.match(/Opera Mini/i);
		},
			Windows: function() {
			return navigator.userAgent.match(/IEMobile/i);
		},
			any: function() {
			return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
		}
	};


	$(window).stellar({
    responsive: true,
    parallaxBackgrounds: true,
    parallaxElements: true,
    horizontalScrolling: false,
    hideDistantElements: false,
    scrollProperty: 'scroll'
  });


	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	// loader
	var loader = function() {
		setTimeout(function() { 
			if($('#ftco-loader').length > 0) {
				$('#ftco-loader').removeClass('show');
			}
		}, 5000);
	};
	loader();
  
  
	// Live
	/* setInterval(function(){
		$.ajax({
			url: 'dri/check-live.php',
			success: function (data){
				if(data == 0) { $('.live-btn').removeClass('on'); }
				if(data == 1) { $('.live-btn').addClass('on'); }
			}
		});
	}, 10000); */

	// Scrollax
   $.Scrollax();

	var carousel = function() {
		$('.carousel-testimony').owlCarousel({
			center: true,
			loop: true,
			items:1,
			margin: 30,
			stagePadding: 0,
			nav: false,
			navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
			responsive:{
				0:{
					items: 1
				},
				600:{
					items: 2
				},
				1000:{
					items: 3
				}
			}
		});


	};
	carousel();

	$('nav .dropdown').hover(function(){
		var $this = $(this);
		// 	 timer;
		// clearTimeout(timer);
		$this.addClass('show');
		$this.find('> a').attr('aria-expanded', true);
		// $this.find('.dropdown-menu').addClass('animated-fast fadeInUp show');
		$this.find('.dropdown-menu').addClass('show');
	}, function(){
		var $this = $(this);
			// timer;
		// timer = setTimeout(function(){
			$this.removeClass('show');
			$this.find('> a').attr('aria-expanded', false);
			// $this.find('.dropdown-menu').removeClass('animated-fast fadeInUp show');
			$this.find('.dropdown-menu').removeClass('show');
		// }, 100);
	});

    // eliminar el .php en el menú
    $('nav [href$=".php"], [href$=".php"]').each(function(index){
        var $link = $(this).attr('href');
        var $newlink = $link.replace(".php", "");
        $(this).attr('href', $newlink);
    });

	$('#dropdown04').on('show.bs.dropdown', function () {
	  console.log('show');
	});
	
	// new sub
	$('.subscribe-form input[type=text]').attr('name', 'email');
	$('.subscribe-form').submit(function(e){
		
		e.preventDefault();
		
		var data = $(this).serialize();
		var $btn = $(this).find('button[type=submit]');
		var $btnData = $btn.html();
		
		
		$.ajax({
			data: data,
			url: 'dri/subs/new.php',
			method: 'POST',
			beforeSend: function() {
				$
			},
			success: function(data){
				switch (data) {
					case 'success': alert('Correo Electrónico registrado exitosamente'); break;
					case 'error-empty': alert('Chequee de rellenar el campo correctamente antes de seguir'); break;
					case 'error-filter': alert('Ingrese un correo electrónico verdadero antes de seguir'); break;
					case 'error-exist': alert('Este correo electrónico ha sido registrado anteriormente'); break;
					case 'error-query': alert('ERROR 500. Si el problema persiste, contacte al desarrollador de la plataforma'); break;
				}
			}
		});
		
	});
	
	// contact form
	$('.contact-form').submit(function(e){
		
		e.preventDefault();
		
		var $btn = $(this).find('button[type=submit]');
		var $btnData = $btn.html();
		var data = $(this).serialize();
		
		$.ajax({
			data: data,
			url: 'dri/contact/new.php',
			method: 'POST',
			beforeSend: function(){
				$btn.html('...').attr('disabled', true);
			},
			success: function(data){
				switch (data) {
					case 'success': alert('Mensaje enviado exitosamente'); break;
					case 'error-empty': alert('Chequee de rellenar el campo correctamente antes de seguir'); break;
					case 'error-filter': alert('Ingrese un correo electrónico verdadero antes de seguir'); break;
					case 'error-query': alert('ERROR 500. Si el problema persiste, contacte al desarrollador de la plataforma'); break;
				}
				$btn.html($btnData).attr('disabled', false);
			}
		});
	
	});

	// scroll
	var scrollWindow = function() {
		$(window).scroll(function(){
			var $w = $(this),
					st = $w.scrollTop(),
					navbar = $('.ftco_navbar'),
					sd = $('.js-scroll-wrap');

			if (st > 150) {
				if ( !navbar.hasClass('scrolled') ) {
					navbar.addClass('scrolled');	
					$('#logotipo').attr('src', 'assets_main/images/logo-black-v2.png');
				}
			} 
			if (st < 150) {
				if ( navbar.hasClass('scrolled') ) {
					navbar.removeClass('scrolled sleep');
					$('#logotipo').attr('src', 'assets_main/images/logo-v2.png');
				}
			} 
			if ( st > 350 ) {
				if ( !navbar.hasClass('awake') ) {
					navbar.addClass('awake');	
				}
				
				if(sd.length > 0) {
					sd.addClass('sleep');
				}
			}
			if ( st < 350 ) {
				if ( navbar.hasClass('awake') ) {
					navbar.removeClass('awake');
					navbar.addClass('sleep');
				}
				if(sd.length > 0) {
					sd.removeClass('sleep');
				}
			}
		});
	};
	scrollWindow();

	var isMobile = {
		Android: function() {
			return navigator.userAgent.match(/Android/i);
		},
			BlackBerry: function() {
			return navigator.userAgent.match(/BlackBerry/i);
		},
			iOS: function() {
			return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
			Opera: function() {
			return navigator.userAgent.match(/Opera Mini/i);
		},
			Windows: function() {
			return navigator.userAgent.match(/IEMobile/i);
		},
			any: function() {
			return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
		}
	};

	var counter = function() {
		
		$('#section-counter, .hero-wrap, .ftco-counter').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {

				var comma_separator_number_step = $.animateNumber.numberStepFactories.separator(',')
				$('.number').each(function(){
					var $this = $(this),
						num = $this.data('number');
						console.log(num);
					$this.animateNumber(
					  {
					    number: num,
					    numberStep: comma_separator_number_step
					  }, 7000
					);
				});
				
			}

		} , { offset: '95%' } );

	}
	counter();


	var contentWayPoint = function() {
		var i = 0;
		$('.ftco-animate').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {
				
				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .ftco-animate.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							var effect = el.data('animate-effect');
							if ( effect === 'fadeIn') {
								el.addClass('fadeIn ftco-animated');
							} else if ( effect === 'fadeInLeft') {
								el.addClass('fadeInLeft ftco-animated');
							} else if ( effect === 'fadeInRight') {
								el.addClass('fadeInRight ftco-animated');
							} else {
								el.addClass('fadeInUp ftco-animated');
							}
							el.removeClass('item-animate');
						},  k * 50, 'easeInOutExpo' );
					});
					
				}, 100);
				
			}

		} , { offset: '95%' } );
	};
	contentWayPoint();


	// navigation
	var OnePageNav = function() {
		$(".smoothscroll[href^='#'], #ftco-nav ul li a[href^='#']").on('click', function(e) {
		 	e.preventDefault();

		 	var hash = this.hash,
		 			navToggler = $('.navbar-toggler');
		 	$('html, body').animate({
		    scrollTop: $(hash).offset().top
		  }, 700, 'easeInOutExpo', function(){
		    window.location.hash = hash;
		  });


		  if ( navToggler.is(':visible') ) {
		  	navToggler.click();
		  }
		});
		$('body').on('activate.bs.scrollspy', function () {
		  console.log('nice');
		})
	};
	OnePageNav();

    
    /* $.ajax({
      url: 'dri/panel/gallery/sel-random.php',
      dataType: 'json',
      method: 'GET'
    }).done(function(data){
	
        $('.ftco-gallery .image-popup').each(function(index){
            $(this).attr('href', 'assets_main/images/gallery/' + data[index].image).css('background-image', 'url(images/gallery/' + data[index].image + ')').find('.icon-instagram').removeClass('icon-instagram').addClass('icon-search');
        });
        
    }); */
    
    $('.ftco-gallery .container-wrap').html('<script src="https://assets.juicer.io/embed.js" type="text/javascript"></script><link href="https://assets.juicer.io/embed.css" media="all" rel="stylesheet" type="text/css" /><ul class="juicer-feed" data-feed-id="elreyjesuspuntofijo-3da790eb-a80b-4ab6-81a7-9e8970801d0f"></ul>');

	// magnific popup
	$('.image-popup').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    closeBtnInside: false,
    fixedContentPos: true,
    mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
     gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      verticalFit: true
    },
    zoom: {
      enabled: true,
      duration: 300 // don't foget to change the duration also in CSS
    }
  });

  $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false
  });

})(jQuery);

