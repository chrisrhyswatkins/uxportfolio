$(document).ready(function () {

$(document).foundation();

// delegate all clicks on "a" tag (links)
$(document).on("click", "a:not('.email-social-link, .samepageanchor')", function () {

    // get the href attribute
    var newUrl = $(this).attr("href");

    // veryfy if the new url exists or is a hash
    if (!newUrl || newUrl[0] === "#") {
        // set that hash
        location.hash = newUrl;
        return;
    }

    // now, fadeout the html (whole page)
    $("html").fadeOut(300, function () {
        // when the animation is complete, set the new location
        location = newUrl;
    });

    // prevent the default browser behavior.
    return false;
});



// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight() - 60;

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('header').addClass('nav-up', 1000);
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('header').removeClass('nav-up', 1000);
        }
    }
    
    lastScrollTop = st;
}

if ($('#content-top-indicator').length) {    
    $(window).scroll(function(event){
        var viewableOffset = $("#content-top-indicator").offset().top - $(window).scrollTop();

        if (viewableOffset <= 80) {
            $('header').addClass('has-background', 1000);
        } else {
            $('header').removeClass('has-background', 1000);
        }
    });
}

if ($('#content-white-change-indicator').length) {
    $(window).scroll(function(event){
        var nextViewableOffset = $("#content-white-change-indicator").offset().top - $(window).scrollTop();

        if (nextViewableOffset <= 0) {
            $('header').addClass('definite-white-background', 1000);
            $('header').removeClass('white-res-nav', 1000);
            $('a.logo').removeClass('white-logo', 1000);
            $('a.logo').addClass('black-logo', 1000);
            $('ul.nav-list').removeClass('white-nav', 1000);
            $('ul.nav-list').addClass('black-nav', 1000);
        } else {
            $('header').removeClass('definite-white-background', 1000);
            $('header').addClass('white-res-nav', 1000);
            $('a.logo').removeClass('black-logo', 1000);
            $('a.logo').addClass('white-logo', 1000);
            $('ul.nav-list').removeClass('black-nav', 1000);
            $('ul.nav-list').addClass('white-nav', 1000);
        }
    });
}


// Responsive navigation function

$(".responsive-menu-link").click(function(e) {
    e.preventDefault();

    // Your code goes here
    $(".responsive-menu-overlay").toggleClass("open");
    $(".responsive-menu").toggleClass("open");
    $("html").toggleClass("no-scroll");
    $("body").toggleClass("no-scroll");

});


var fixed = document.getElementById('fixed-overlay');

fixed.addEventListener('touchmove', function(e) {

        e.preventDefault();

}, false);


/* GREETING MESSAGE FUNCTION */
if ($('#home-greeting').length) {	 
	today = new Date()
	var day = today.getDay();
	var curHr = today.getHours();
	var curMin = today.getMinutes();
	
	if (curHr < 10) {
		curHr = "0" + curHr;
	}
	
	if (curMin < 10) {
		curMin = "0" + curMin;
	}
	
	var curTime = 0 + "." + curHr + curMin;
	var timeMessage = "";
	
	if (curTime >= 0.0000 && curTime < 0.0600) {
		timeMessage = "WOAH, YOU'RE STILL UP?";
	} else if (curTime >= 0.0600 && curTime < 0.1200) {
		timeMessage = "GOOD MORNING,";
	} else if (curTime >= 0.1200 && curTime < 0.1700) {
		timeMessage = "GOOD AFTERNOON,";
	} else if (curTime >= 0.1700 && curTime < 0.2300) {
		timeMessage = "GOOD EVENING,";
	} else if (curTime >= 0.2300 && curTime < 0.2400) {
		timeMessage = "WOAH, AWAKE AT THIS TIME?";
	}
	
	document.getElementById("home-greeting").innerHTML = timeMessage;
};

// Individual Page scroll header

if ($('.work-page-header').length > 0) {
    var workHeaderHeight = $('.work-page-header-background-image').height();
    $('.work-page-header').css('max-height', +(workHeaderHeight) + 'px');
}

if ($('.work-page-header').length > 0) {
    var fadeStart = 0 // 100px scroll or less will equiv to 1 opacity
        ,
        fadeUntil = 200 // 200px scroll or more will equiv to 0 opacity
        ,
        fading = $('.work-page-header-text-content')
        ;

    $(window).bind('scroll', function() {
        var offset = $(document).scrollTop()
            ,
            opacity = 0
            ;
        if (offset <= fadeStart) {
            opacity = 1;
        } else if (offset <= fadeUntil) {
            opacity = 1 - offset / fadeUntil;
        }
        fading.css('opacity', opacity);
    });
}

if ($('.work-page-header').length > 0) {
    var fadeStart2 = 0 // 100px scroll or less will equiv to 1 opacity
        ,
        fadeUntil2 = 1000 // 200px scroll or more will equiv to 0 opacity
        ,
        fading2 = $('.work-page-header-background-color')
        ;

    $(window).bind('scroll', function() {
        var offset = $(document).scrollTop()
            ,
            opacity = 1
            ;
        if (offset <= fadeStart2) {
            opacity = 0.85;
        } else if (offset <= fadeUntil2) {
            opacity = 0.85 + offset / fadeUntil2;
        }
        fading2.css('opacity', opacity);
    });
}


// Responsive nav hover states

$("ul.responsive-nav-list li a").hover(function() { // Mouse over
  $(this).siblings().stop().fadeTo(150, 0.3);
  $(this).parent().siblings().stop().fadeTo(150, 0.15); 
}, function() { // Mouse out
  $(this).siblings().stop().fadeTo(150, 1);
  $(this).parent().siblings().stop().fadeTo(150, 1);
}); 


// Portfolio navigator hover states

$("ul.portfolio-nav-option li a").hover(function() { // Mouse over
  $(this).siblings().stop().fadeTo(150, 0.3);
  $(this).parent().siblings().stop().fadeTo(150, 0.15); 
}, function() { // Mouse out
  $(this).siblings().stop().fadeTo(150, 1);
  $(this).parent().siblings().stop().fadeTo(150, 1);
});


// Instagram photo hover states 

$("a.instagram-photo").hover(function() { // Mouse over
  $(this).siblings().stop().fadeTo(150, 0.6);
  $(this).parent().siblings().stop().fadeTo(150, 0.4); 
}, function() { // Mouse out
  $(this).siblings().stop().fadeTo(150, 1);
  $(this).parent().siblings().stop().fadeTo(150, 1);
});


// Slick sliders

/*

$('.project-slider').slick({
    infinite: true,
    slidesToShow: 2,
    slidesToScroll: 1
});

*/

$('.quote-slide-handler').slick({
    centerMode:true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: false,
    arrows: false,
    autoplay: true,
    speed: 1000,
    autoplaySpeed: 6000,
    infinite: true,
    cssEase: 'ease',
    variableWidth: true,
    variableHeight: true/*,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 3
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }
  ]*/
});

$('.quote-slide-handler').on('click', '.slick-slide', function (e) {
    e.stopPropagation();
    var index = $(this).data("slick-index");
    if ($('.quote-slide-handler').slick('slickCurrentSlide') !== index) {
        $('.quote-slide-handler').slick('slickGoTo', index);
    }
});



// Same page anchor

$('a.samepageanchor').click(function(){
    $('a.scrolltop').removeClass('inactive');
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});

// Scroll top button


if ($('a.scrolltop').length) {    
    $(window).scroll(function(event){
        var viewableOffset = $("#content-top-indicator").offset().top - $(window).scrollTop();

        if (viewableOffset < 1) {
            $('a.scrolltop').removeClass('inactive', 1000);
        } else {
            $('a.scrolltop').addClass('inactive', 1000);
        }
    });
}


// Width based

var $window = $(window);

function checkWidth() {
    var windowsize = $window.width();
    if (windowsize >= 640) {
        // Your code goes here
        $(".responsive-menu-overlay").removeClass("open");
        $(".responsive-menu").removeClass("open");
        $("html").removeClass("no-scroll");
        $("body").removeClass("no-scroll");
    }
}

// Execute on load
checkWidth();
// Bind event listener
$(window).resize(checkWidth);


});