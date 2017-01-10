/**
 *
 * Base theme javascript file
 * Put all your scripts related to your theme in here.
 * Keep in mind that this file will get concatenated into
 * a singular file.
 *
 */

// If we don't have an object for our theme create it.

if( typeof(onlyfischinthesea) == 'undefined' ) {
    onlyfischinthesea = {};
}

onlyfischinthesea.site = function ( $ ) {
    // Private Variables
    var $window    = $(window),
        $doc       = $(document),
        $body      = $('body'),
        self;

    return {
        /*
         * function init
         * Kick off all of the business
         */

        init: function() {
            self = onlyfischinthesea.site;

	        // initialize foundation
	        $doc.foundation();

          self.addEvents();

        },

        addEvents : function () {

          if ( $body.length ) {
            self.oliveUnlock();
          }

        },

        oliveUnlock : function () {
          var kkeys = [], olive = "84,65,80,65,78,65,68,69";

          $(document).keydown(function(e) {

            kkeys.push( e.keyCode );

            if ( kkeys.toString().indexOf( olive ) >= 0 ) {

              $(document).unbind('keydown',arguments.callee);
              
              // do something awesome
              $('.olive').toggleClass('hide');
              $('.olive-back').toggleClass('olive-back-show');
            
            }

          });
        }
    };

} ( jQuery );

jQuery(function( $ ) {
    onlyfischinthesea.site.init();
});