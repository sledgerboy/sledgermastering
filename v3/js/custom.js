// Custom Script
// Developed by: Samson.Onna
var customScripts = {
    profile: function () {
        // portfolio
        if ($('.isotopeWrapper').length) {
            var $container = $('.isotopeWrapper');
            var $resize = $('.isotopeWrapper').attr('id');
            // initialize isotope
            $container.isotope({
                itemSelector: '.isotopeItem',
                resizable: false, // disable normal resizing
                masonry: {
                    columnWidth: $container.width() / $resize
                }
            });
            $("a[href='#top']").click(function () {
                $("html, body").animate({ scrollTop: 0 }, "slow");
                return false;
            });
            $('.navbar-inverse').on('click', 'li a', function () {
                $('.navbar-inverse .in').addClass('collapse').removeClass('in').css('height', '1px');
            });
            $('#filter a').click(function () {
                $('#filter a').removeClass('current');
                $(this).addClass('current');
                var selector = $(this).attr('data-filter');
                $container.isotope({
                    filter: selector,
                    animationOptions: {
                        duration: 1000,
                        easing: 'easeOutQuart',
                        queue: false
                    }
                });
                return false;
            });
            $(window).smartresize(function () {
                $container.isotope({
                    // update columnWidth to a percentage of container width
                    masonry: {
                        columnWidth: $container.width() / $resize
                    }
                });
            });
        }
    },
    fancybox: function () {
        // fancybox
        $(".fancybox").fancybox();
    },
    onePageNav: function () {

        $('#mainNav').onePageNav({
            currentClass: 'active',
            changeHash: false,
            scrollSpeed: 950,
            scrollThreshold: 0.2,
            filter: '',
            easing: 'swing',
            begin: function () {
                //I get fired when the animation is starting
            },
            end: function () {
                //I get fired when the animation is ending
            },
            scrollChange: function ($currentListItem) {
                //I get fired when you enter a section and I pass the list item of the section
            }
        });
    },
    slider: function () {
        $('#da-slider').cslider({
            autoplay: true,
            bgincrement: 0
        });
    },
    owlSlider: function () {
        var owl = $("#owl-demo");
        owl.owlCarousel();
        // Custom Navigation Events
        $(".next").click(function () {
            owl.trigger('owl.next');
        })
        $(".prev").click(function () {
            owl.trigger('owl.prev');
        })
    },
    bannerHeight: function () {
        var bHeight = $(".banner-container").height();
        $('#da-slider').height(bHeight);
        $(window).resize(function () {
            var bHeight = $(".banner-container").height();
            $('#da-slider').height(bHeight);
        });
    },
    init: function () {
        customScripts.onePageNav();
        customScripts.profile();
        customScripts.fancybox();
        customScripts.slider();
        customScripts.owlSlider();
        customScripts.bannerHeight();
    }
}
$('document').ready(function () {
    customScripts.init();
	new fullpage('#fullpage', {
    //sectionsColor: ['yellow', 'orange', '#C0C0C0', '#ADD8E6'],
});
});



/* GSAP animations */
window.addEventListener('load', function() {
	
	/* first panel */
	$('#panel-one').mouseenter(function() {
		gsap.to("#badge-one" , {
			left: '58%',
			duration:1,
			opacity:0,
			color:'#97C436'
		});
		gsap.to("#badge-two" , {
			left: '42%',
			duration:1,
			opacity:0,
			color:'#97C436'
		});
		gsap.to("#credits-one" , {
			background: '#97C436',
			duration:1,
			opacity:1
		});
		gsap.to("#credits-two" , {
			background: '#97C436',
			duration:1,
			opacity:1
		});
		gsap.to(".importo" , {
			color:'#fff'
		});
		gsap.to(".causale" , {
			color:'#fff'
		});
		gsap.to(".text-muted" , {
			color:'#fff'
		});

	});
	
	$('#panel-one').mouseleave(function() {
		gsap.to("#badge-one" , {
			left: '50%',
			duration:1,
			opacity:1,
			color:'#fff'
		});
		gsap.to("#badge-two" , {
			left: '50%',
			duration:1,
			opacity:1,
			color:'#fff'
		});
		gsap.to("#credits-one" , {
			background: '#fff',
			duration:1
		});
		gsap.to("#credits-two" , {
			background: '#fff',
			duration:1
		});
		gsap.to(".importo" , {
			color:'#666'
		});
		gsap.to(".causale" , {
			color:'#666'
		});
		gsap.to(".text-muted" , {
			color:'#666'
		});
	});

	$('#details-one').mouseenter(function() {
		gsap.to(".div-first" , {
			duration:1,
			scale:'1.25',
			background:'#97C436'
		});
	});

	$('#details-one').mouseleave(function() {
		gsap.to(".div-first" , {
			duration:1,
			scale:1,
			background:'#e4e4e4'
		});
	});

	/* second panel */
	$('#panel-two').mouseenter(function() {
		gsap.to("#badge-three" , {
			left: '58%',
			duration:1
		});
		gsap.to("#badge-four" , {
			left: '42%',
			duration:1
		});
		gsap.to("#credits-three" , {
			background: '#97C436',
			duration:1
		});
		gsap.to("#credits-four" , {
			background: '#97C436',
			duration:1
		});
	});
	
	$('#panel-two').mouseleave(function() {
		gsap.to("#badge-three" , {
			left: '50%',
			duration:1
		});
		gsap.to("#badge-four" , {
			left: '50%',
			duration:1
		});
		gsap.to("#credits-three" , {
			background: '#fff',
			duration:1
		});
		gsap.to("#credits-four" , {
			background: '#fff',
			duration:1
		});
	});

	/* third panel */
	$('#panel-three').mouseenter(function() {
		gsap.to("#badge-five" , {
			left: '58%',
			duration:1
		});
		gsap.to("#badge-six" , {
			left: '42%',
			duration:1
		});
		gsap.to("#credits-five" , {
			background: '#97C436',
			duration:1
		});
		gsap.to("#credits-six" , {
			background: '#97C436',
			duration:1
		});
	});
	
	$('#panel-three').mouseleave(function() {
		gsap.to("#badge-five" , {
			left: '50%',
			duration:1
		});
		gsap.to("#badge-six" , {
			left: '50%',
			duration:1
		});
		gsap.to("#credits-five" , {
			background: '#fff',
			duration:1
		});
		gsap.to("#credits-six" , {
			background: '#fff',
			duration:1
		});
	});

});