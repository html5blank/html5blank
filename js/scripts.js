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
	
	// SVG custom feature detection and svg to png fallback
	// toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script#update
	function supportsSVG() {
		return !! document.createElementNS && !! document.createElementNS('http://www.w3.org/2000/svg','svg').createSVGRect;	
	}
	if (supportsSVG()) {
		document.documentElement.className = ' svg';
	} else {
		document.documentElement.className = ' no-svg';
		var imgs = document.getElementsByTagName('img'),
			dotSVG = /.*\.svg$/;
		for (var i = 0; i != imgs.length; ++i) {
			if(imgs[i].src.match(dotSVG)) {
				imgs[i].src = imgs[i].src.slice(0, -3) + "png";
			}
		}
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