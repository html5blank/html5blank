// DOM Ready
$(function() {

	// Conditionizr, legacy, retina script and style loader
	// conditionizr.com
	conditionizr({
		debug      : true,
		scriptSrc  : 'js/conditionizr/',
		styleSrc   : 'css/conditionizr/',
		ieLessThan : { active: true, version: '9', scripts: true, styles: true, classes: true, customScript: 'none'},
		chrome     : { scripts: true, styles: true, classes: true, customScript: 'none' },
		safari     : { scripts: true, styles: true, classes: true, customScript: 'none' },
		opera      : { scripts: true, styles: true, classes: true, customScript: 'none' },
		firefox    : { scripts: true, styles: true, classes: true, customScript: 'none' },
		ie10       : { scripts: true, styles: true, classes: true, customScript: 'none' },
		ie9        : { scripts: true, styles: true, classes: true, customScript: 'none' },
		ie8        : { scripts: true, styles: true, classes: true, customScript: 'none' },
		ie7        : { scripts: true, styles: true, classes: true, customScript: 'none' },
		ie6        : { scripts: true, styles: true, classes: true, customScript: 'none' },
		retina     : { scripts: true, styles: true, classes: true, customScript: 'none' },
		mac    : true,
		win    : true,
		x11    : true,
		linux  : true
	});
	
	// SVG custom feature detection and svg to png fallback
	// toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script#update
	function supportsSVG() {
		return !! document.createElementNS && !! document.createElementNS('http://www.w3.org/2000/svg','svg').createSVGRect;	
	}
	if (supportsSVG()) {
		document.documentElement.className += ' svg';
	} else {
		document.documentElement.className += ' no-svg';
		var imgs = document.getElementsByTagName('img'),
			dotSVG = /.*\.svg$/;
		for (var i = 0; i != imgs.length; ++i) {
			if(imgs[i].src.match(dotSVG)) {
				imgs[i].src = imgs[i].src.slice(0, -3) + "png";
			}
		}
	}

});