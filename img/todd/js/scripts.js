$(function () {

    /*var menu = $('.menu');
	var mobile = $('<span>').attr('class','mobile');
	
	$(menu).before(mobile);
	$('.mobile').click(function() {
		$(mobile).toggleClass('active');
		$(menu).slideToggle();
	});*/

    // Create the dropdown base
    $('nav').prepend($('<select />').attr('class', 'mob'));
    $('.mob').before($('<span />').attr('class', 'mobile'));
    $("nav a").each(function () {
        var el = $(this);
        $("<option />", {
            "value": el.attr("href"),
                "text": el.text()
        }).appendTo("nav select");
    });

    $("nav select").change(function () {
        window.location = $(this).find("option:selected").val();
    });
    
    $('.inlined + .input-text').each(function(type) {
        $(this).focus(function () {
            $(this).prev("label.inlined").addClass("focus");
        });
        $(this).keypress(function () {
            $(this).prev("label.inlined").addClass("has-text").removeClass("focus");
        });
        $(this).blur(function () {
            if ($(this).val() == "") {
                $(this).prev("label.inlined").removeClass("has-text").removeClass("focus");
            }
        });
    });

    // Latest Tweets
    $(".tweet").tweet({
        username: "toddmotto",
        join_text: "",
        count: 10,
        auto_join_text_ed: "",
        auto_join_text_ing: "",
        auto_join_text_reply: "",
        auto_join_text_url: "",
        loading_text: "Loading tweets..."
    }).bind('loaded',

    function () {
        var current = 0,
            timebetween = 4000,
            tweetlist = jQuery('.tweet-list'),
            tweets = tweetlist.find('li'),
            count = tweets.length,
            interval = setInterval(

            function () {
                tweets.eq(current).slideUp(function () {
                    jQuery(this).appendTo(tweetlist);
                });
                (current + 1 < count) ? current++ : current = 0;
                tweets.eq(current).slideDown();
            },
            timebetween);
        tweets.hide().eq(current).show();
    });

    // Responsive Tool
    $('body').prepend(
    $('<div>')
        .attr('id', 'resize')
        .append('Resize to start'));
    $(window).resize(function () {
        var viewportWidth = $(window).width();
        var viewportHeight = $(window).height();
        $('#resize').html('<span style="color:#000;">' + viewportWidth + 'px</span>');
    });
    
    // Scroll to Top
    $('a[href=#goingup]').click(function(){
        $('html, body').animate({scrollTop:0}, 300);
        return false;
    });
    
    // Modernizr SVG
    if(!Modernizr.inlinesvg) {
        var imgs = document.getElementsByTagName('img');
        var endsWithDotSvg = /.*\.svg$/
        var i = 0;
        var l = imgs.length;
        for(; i != l; ++i) {
            if(imgs[i].src.match(endsWithDotSvg)) {
                imgs[i].src = imgs[i].src.slice(0, -3) + "png";
            }
        }
    }

    // Hide URL Bar iPhone
    if(navigator.userAgent.indexOf('iPhone') != -1) {
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);
    }
    
    function hideURLbar() {
        window.scrollTo(0, 0);
    }
});

(function () {
    var acc = 'acc_845d586_pub';
    var st = 'nocss';
    var or = 's';
    var e = document.getElementsByTagName('script')[0];
    var d = document.createElement('script');
    d.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'engine.influads.com/show/' + or + '/' + st + '/' + acc;
    d.type = 'text/javascript';
    d.async = true;
    d.defer = true;
    e.parentNode.insertBefore(d, e);
})();