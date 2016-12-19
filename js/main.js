//javascript functions
var menuOpen = false;

// Hide and show menu on button click
function toggle_menu_visibility() {
	if (menuOpen){
		$('#menu-mainmenu').css('display', 'none');
		$('#close-x').css('display', 'none');
		$('.menu-btn').css('display', 'block');
    menuOpen = false;
	} else {
		$('#menu-mainmenu').css({transition: 'opacity .2s ease-in-out', opacity: 1});
		$('#menu-mainmenu').fadeIn(100);
		$('#menu-mainmenu').css('display', 'block');
		$('#close-x').css('display', 'block');
		$('.menu-btn').css('display', 'none');
    menuOpen = true;
	}
}

$('.menu-btn').click(toggle_menu_visibility);
$('#close-x').click(toggle_menu_visibility);

// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('header').outerHeight();

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
    if (st > lastScrollTop && st > navbarHeight && !menuOpen){
        // Scroll Down
        $('header').removeClass('nav-down').addClass('nav-up');
    } else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('header').removeClass('nav-up').addClass('nav-down');
        }
    }

    lastScrollTop = st;
}
