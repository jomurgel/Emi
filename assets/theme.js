jQuery(document).ready(function($){
	$('#menu-toggle').on('click', function() {
    $('nav.nav').toggleClass('expand');
    return false;
	});

	// Menu Toggle State - Active
	$('#menu-toggle').on('click', function(){
	  	$(this).toggleClass('active');
	  	return false;
	});
});
