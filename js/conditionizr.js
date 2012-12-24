/*
	conditionizr v1.0.0
	conditionizr.com
	
	by Todd Motto & Mark Goodyear
	@toddmotto    & @markgdyr
	toddmotto.com & markgoodyear.com
	
	Latest version: https://github.com/conditionizr/conditionizr
	
	Conditionizr, the conditional free legacy, retina, script and style loader.
	
*/
;(function ($) {

	$.fn.conditionizr = function (options) {
	
		var settings = {
			debug      : false,
			scriptSrc  : 'js/conditionizr/',
			styleSrc   : 'css/conditionizr/',
			ieLessThan : { active: false, version: '9', scripts: false, styles: false, classes: true, customScript: 'none'},
			chrome     : { scripts: false, styles: false, classes: true, customScript: 'none' },
			safari     : { scripts: false, styles: false, classes: true, customScript: 'none' },
			opera      : { scripts: false, styles: false, classes: true, customScript: 'none' },
			firefox    : { scripts: false, styles: false, classes: true, customScript: 'none' },
			ie10       : { scripts: false, styles: false, classes: true, customScript: 'none' },
			ie9        : { scripts: false, styles: false, classes: true, customScript: 'none' },
			ie8        : { scripts: false, styles: false, classes: true, customScript: 'none' },
			ie7        : { scripts: false, styles: false, classes: true, customScript: 'none' },
			ie6        : { scripts: false, styles: false, classes: true, customScript: 'none' },
			retina     : { scripts: false, styles: false, classes: true, customScript: 'none' },
			mac    : true,
			win    : true,
			x11    : true,
			linux  : true
		};
		
		if (options) {
			$.extend(settings, options);
		}

		return this.each(function () {

			function conditionizrLoader() {
				$.each(browserSettings, function (resourceType, val) {
						
					if (resourceType === 'classes' && val === true) {
						document.getElementsByTagName('html')[0].className += ' ' + theBrowser;
					}
					
					if (resourceType === 'scripts' && val === true) {
						var scriptTag = document.createElement('script');
						scriptTag.src = settings.scriptSrc + theBrowser + '.js';
						document.getElementsByTagName('head')[0].appendChild(scriptTag);
					}
					
					if (resourceType === 'styles' && val === true) {
						var linkTag = document.createElement('link');
						linkTag.rel = 'stylesheet';
						linkTag.href = settings.styleSrc + theBrowser + '.css';
						document.getElementsByTagName('head')[0].appendChild(linkTag);
					}
					
					if (resourceType === 'customScript' && val != 'none') {
						var customScriptTag = document.createElement('script');
						customScriptTag.src = browserSettings.customScript;
						document.getElementsByTagName('head')[0].appendChild(customScriptTag);
					}
					
				});
			}
		
			document.getElementsByTagName('html')[0].id = 'conditionizr';
		
			var browsers = [
				{'testWith': 'chrome', 'testSettings': settings.chrome}, 
				{'testWith': 'safari', 'testSettings': settings.safari},
				{'testWith': 'firefox', 'testSettings': settings.firefox},
				{'testWith': 'opera', 'testSettings': settings.opera}
			];
			
			for (var i = 0; i < browsers.length; i++) {

				var currentBrowser = browsers[i];

				if (navigator.userAgent.toLowerCase().indexOf(currentBrowser.testWith) > -1) {
					var browserSettings = currentBrowser.testSettings,
						theBrowser = currentBrowser.testWith;
						conditionizrLoader();
					break;
				}

			}
			
			function getIEVersion() {

				var rv = -1;

				if (navigator.appName == 'Microsoft Internet Explorer') {
					var ua = navigator.userAgent,
						re  = new RegExp("MSIE ([0-9]{1,}[\.0-9]{0,})");
					
					if (re.exec(ua) != null) {
						rv = parseFloat(RegExp.$1);
					}
				}

				return rv;

			}
			
			var version = getIEVersion();
			
			if (version > -1) {
			
				if (version < settings.ieLessThan.version + '.0') {
			
					var theBrowser = 'lt-ie' + settings.ieLessThan.version,
						browserSettings = settings.ieLessThan;
					
					conditionizrLoader();
					
				}
			
				if (version === 10.0) {
					var browserSettings = settings.ie10;
				}
				else if (version === 9.0) {
					var browserSettings = settings.ie9;
				}
				else if (version === 8.0) {
					var browserSettings = settings.ie8;
				}
				else if (version === 7.0) {
					var browserSettings = settings.ie7;
				}
				else if (version === 6.0) {
					var browserSettings = settings.ie6;
				}
				
				var theBrowser = 'ie' + version;
				
				conditionizrLoader();
				
			}

			if (window.devicePixelRatio >= 2) {
			
				var browserSettings = settings.retina,
					theBrowser = 'retina';
					
				conditionizrLoader();
				
			}
			
			else {
				document.getElementsByTagName('html')[0].className += ' no-retina';
			}
			
			var oSys = [
				{'testWith': 'Win', 'testSettings': settings.win}, 
				{'testWith': 'Mac', 'testSettings': settings.mac}, 
				{'testWith': 'X11', 'testSettings': settings.x11}, 
				{'testWith': 'Linux', 'testSettings': settings.linux}
			];
			
			for (var i = 0; i < oSys.length; i++) {
				var currentPlatform = oSys[i];
				if (navigator.appVersion.indexOf(currentPlatform.testWith) > -1) {

					var osSettings = currentPlatform.testSettings,
						theOS = currentPlatform.testWith;

					if (osSettings === true) {
						document.getElementsByTagName('html')[0].className += ' ' + currentPlatform.testWith.toLowerCase();
					}

					break;
				}
			}
			
			if (settings.debug === true) {
				console.log('Start Conditionizr Debug\n');
				console.log('Script location: ' + settings.scriptSrc);
				console.log('Style location: ' + settings.styleSrc);
				console.log('Browser: ' + theBrowser);
				console.log('OS: ' + theOS);
				console.log('\nEnd Conditionizr Debug\n');
			}
			
		});
	};
	
})(jQuery);