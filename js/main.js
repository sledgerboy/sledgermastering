(function ($) {
	'use strict';

	/* Header scroll state */
	var header = document.getElementById('main-header');
	function onScroll() {
		if (window.scrollY > 40) {
			header.classList.add('scrolled');
		} else {
			header.classList.remove('scrolled');
		}
	}
	window.addEventListener('scroll', onScroll, { passive: true });
	onScroll();

	/* Mobile nav */
	var navToggle = document.getElementById('nav-toggle');
	var navWrap = document.getElementById('site-nav-wrap');

	if (navToggle && navWrap) {
		navToggle.addEventListener('click', function () {
			var open = navWrap.classList.toggle('open');
			navToggle.setAttribute('aria-expanded', open);
			navToggle.innerHTML = open ? '<i class="fa fa-times"></i>' : '<i class="fa fa-bars"></i>';
		});

		navWrap.querySelectorAll('a').forEach(function (link) {
			link.addEventListener('click', function () {
				navWrap.classList.remove('open');
				navToggle.setAttribute('aria-expanded', 'false');
				navToggle.innerHTML = '<i class="fa fa-bars"></i>';
			});
		});
	}

	/* Smooth scroll */
	$(document).on('click', 'a[href*="#"]', function (e) {
		var href = this.getAttribute('href');
		if (!href || href === '#') return;

		var hash = href.indexOf('#') !== -1 ? href.substring(href.indexOf('#')) : href;
		if (hash.length <= 1) return;

		var target = $(hash);
		if (!target.length) return;

		e.preventDefault();
		var offset = header ? header.offsetHeight : 0;
		$('html, body').animate({ scrollTop: target.offset().top - offset }, 600);
	});

	/* Active nav on scroll */
	var sections = $('section[id]');
	var navLinks = $('#nav a');

	function setActiveNav() {
		var scrollPos = $(window).scrollTop() + (header ? header.offsetHeight : 0) + 80;
		var current = '';

		sections.each(function () {
			var top = $(this).offset().top;
			var bottom = top + $(this).outerHeight();
			if (scrollPos >= top && scrollPos < bottom) {
				current = this.id;
			}
		});

		navLinks.parent().removeClass('current');
		if (current) {
			navLinks.filter('[href="#' + current + '"]').parent().addClass('current');
		}
	}

	$(window).on('scroll', setActiveNav);
	setActiveNav();

	/* Waveform bars */
	var waveform = document.getElementById('waveform');
	if (waveform) {
		for (var i = 0; i < 48; i++) {
			var bar = document.createElement('div');
			bar.className = 'waveform-bar';
			bar.style.height = (20 + Math.random() * 80) + '%';
			bar.style.animationDelay = (Math.random() * 1.2) + 's';
			bar.style.animationDuration = (0.8 + Math.random() * 0.8) + 's';
			waveform.appendChild(bar);
		}
	}

	/* Testimonials slider */
	var track = document.getElementById('testimonial-track');
	var dots = document.querySelectorAll('.testimonial-dot');
	var currentSlide = 0;
	var slideCount = dots.length;
	var autoplayTimer;

	function goToSlide(index) {
		if (!track || !slideCount) return;
		currentSlide = (index + slideCount) % slideCount;
		track.style.transform = 'translateX(-' + (currentSlide * 100) + '%)';
		dots.forEach(function (dot, i) {
			dot.classList.toggle('active', i === currentSlide);
		});
	}

	function startAutoplay() {
		autoplayTimer = setInterval(function () {
			goToSlide(currentSlide + 1);
		}, 8000);
	}

	if (track && slideCount) {
		dots.forEach(function (dot, i) {
			dot.addEventListener('click', function () {
				clearInterval(autoplayTimer);
				goToSlide(i);
				startAutoplay();
			});
		});
		startAutoplay();
	}

	/* Service modals */
	$('.service-card-link').magnificPopup({
		type: 'inline',
		fixedContentPos: false,
		removalDelay: 300,
		showCloseBtn: false,
		mainClass: 'mfp-fade'
	});

	$(document).on('click', '.popup-modal-dismiss', function (e) {
		e.preventDefault();
		$.magnificPopup.close();
	});

	/* Contact form */
	$('#contactForm').validate({
		rules: {
			contactName: { required: true, minlength: 2 },
			contactEmail: { required: true, email: true },
			contactMessage: { required: true, minlength: 10 }
		},
		submitHandler: function (form) {
			var sLoader = $('#submit-loader');

			$.ajax({
				type: 'POST',
				url: 'inc/sendEmail.php',
				data: $(form).serialize(),
				beforeSend: function () {
					sLoader.fadeIn();
				},
				success: function (msg) {
					sLoader.fadeOut();
					if (msg === 'OK') {
						$('#message-warning').hide();
						$('#contactForm').fadeOut();
						$('#message-success').fadeIn();
					} else {
						$('#message-warning').html(msg).fadeIn();
					}
				},
				error: function () {
					sLoader.fadeOut();
					$('#message-warning').html('Something went wrong. Please try again.').fadeIn();
				}
			});
		}
	});

})(jQuery);
