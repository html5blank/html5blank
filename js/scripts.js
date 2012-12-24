// DOM Ready
$(function() {

	// www.conditionizr.com
	// Legacy content and retina scripts and styles
	$('head').conditionizr({
		ieLessThan : {
			active: true,
			version: '9',
			scripts: false,
			styles: false,
			classes: true,
			customScript: 'WORDPRESS_THEME_DIRECTORY_HERE/js/mediaqueries.min.js'
		}
	});
	
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