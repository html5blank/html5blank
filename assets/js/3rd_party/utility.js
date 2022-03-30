;(function ($){
    jQuery.cachedScript = function( url, options ) {
        
         // Allow user to set any option except for dataType, cache, and url
         options = $.extend( options || {}, {
           dataType: "script",
           cache: true,
           url: url
         });
        
         // Use $.ajax() since it is more flexible than $.getScript
         // Return the jqXHR object so we can chain callbacks
         return jQuery.ajax( options );
       };
      
       jQuery.getMultiScripts = function(arr, path) {
        var _arr = jQuery.map(arr, function(scr) {
            return jQuery.cachedScript( (path||"") + scr );
        });
      
        _arr.push(jQuery.Deferred(function( deferred ){
          jQuery( deferred.resolve );
        }));
      
        return jQuery.when.apply(jQuery, _arr);
      }
})(jQuery);



// Ex

/*

var cdnLinks = [
    "//cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/moment.min.js",
    "//cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.14/moment-timezone-with-data.min.js"
  ];

$.getMultiScripts(script_arr).done(function() {
     // all done
}).fail(function(error) {
     // one or more scripts failed to load
}).always(function() {
     // always called, both on success and error
});




*/
  
  