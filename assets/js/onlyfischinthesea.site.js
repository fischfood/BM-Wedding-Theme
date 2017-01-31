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
        $curActiveAnchor = '',
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

          $body
            .on('click', '.top-bar-menu a', self.smoothScrolling );

          $window.scroll( self.scrollActive );

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
        },

        smoothScrolling : function () {
            event.preventDefault();

            $('html, body').animate({
                scrollTop: $( $.attr(this, 'href') ).offset().top - 105
            }, 500);
        },

        scrollActive : function () {

          var $activeAnchorNum = 0; // At Bottom of Window
              $scrollTop = $window.scrollTop(),
              $winHeight = $window.height();

          $('.top-bar-menu li.is-anchor a').each( function() {

            var $attrOffset = $( $.attr(this, 'href') ).offset().top,
                $attrAtBottom = $attrOffset - ( $scrollTop + $winHeight );

            if ( $attrAtBottom <= $activeAnchorNum  ) {
              $activeAnchor = $.attr(this, 'href');
            }

          });

          if ( $curActiveAnchor != $activeAnchor ) {

            $('.top-bar-menu li.is-anchor a').removeClass('active-anchor');

            $( 'a[href="' + $activeAnchor + '"]' ).addClass('active-anchor');

          }

          $curActiveAnchor = $activeAnchor;

        }
    };

} ( jQuery );

jQuery(function( $ ) {
    onlyfischinthesea.site.init();
});