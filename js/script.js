// $ does not work with wordpress

jQuery(document).ready(function($){
	
	// Smooth scroll to divs, this code only selects links with @href starting with '#'
	$(document).on('click', 'a[href^="#"]', function(e) {
	    // target element id
	    var id = $(this).attr('href');

	    // target element
	    var $id = $(id);
	    if ($id.length === 0) {
	        return;
	    }

	    // prevent standard hash navigation (avoid blinking in IE)
	    e.preventDefault();

	    // top position relative to the document
	    var navHeight = $(".nav-container").height();

	    // compensating for the height of the navigation as
	    // as margins/padding etc
	    var pos = $id.offset().top - (navHeight + 52);

	    // animated top scrolling
	    $('body, html').animate({scrollTop: pos});
	});
});