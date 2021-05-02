(function( $ ) {
	$( document ).ready(function() {

	// RESPONSIVE CONTROLS
	var $window = $(window);
	function checkWidth() {

		if ($window.width() < 768) {
			$('.wpcf7-submit').removeClass('float-end').addClass('w-100'); 
		};
		if ($window.width() >= 768) {
			$('.wpcf7-submit').addClass('float-end').removeClass('w-100'); 
		}
	}
	
	checkWidth();
	$(window).resize(checkWidth);
	
	// END RESPONSIVE CONTROL
	});	
})( jQuery );