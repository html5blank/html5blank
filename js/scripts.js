// DOM Ready
$(function() {
	
	// SVG Modernizr detect and PNG replace
	// toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script
	if(!Modernizr.svg) {
	    $('img[src*="svg"]').attr('src', function () {
	        return $(this).attr('src').replace('.svg', '.png');
	    });
	}
	
	// iPhone Safari URL bar hides itself on pageload
	if (navigator.userAgent.indexOf('iPhone') != -1) {
	    addEventListener("load", function () {
	        setTimeout(hideURLbar, 0);
	    }, false);
	}
	
	function hideURLbar() {
	    window.scrollTo(0, 0);
	}
});