/* fix icon font bug http://andymcfee.com/2012/04/04/icon-fonts-pseudo-elements-and-ie8/ */
window.onload = function () {
	var cname = document.documentElement.className;
	cname = cname.replace('loading', '');
	document.documentElement.className =
	cname;
}

jQuery(function($) {
	$.fn.ie8GridFix = function () {
	  var $this = this,
	      classList = $this.attr('class'),
	      classes = classList.split(' '),
	      count = classes.length,
	      checkArray = [];

	  for ( var i = 0; i < count; i++ ) {
	    var check = classes[i].slice(0,5);

	    checkArray.push(check);
	  }

	  var checkLarge = $.inArray('large', checkArray),
	      checkMedium = $.inArray('medium', checkArray),
	      checkSmall = $.inArray('small', checkArray);

	  if ( checkLarge != -1 ) {
	    if ( checkMedium != -1 ) $this.removeClass(classes[checkMedium]);
	    if ( checkSmall != -1 ) $this.removeClass(classes[checkSmall]);
	  } else if ( checkMedium != -1 ) {
	    if ( checkSmall != -1 ) $this.removeClass(classes[checkSmall]);
	  }
	};

	$('body').addClass('is-lt-ie9');

	$('body').find('.columns').each(function () {
		$(this).ie8GridFix();
	} );
});