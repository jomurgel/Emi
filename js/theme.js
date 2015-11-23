(function( $ ) {
	$(function() {
		
		$("ul li:has(ul)").addClass('sub'); // Add Toggle
		
		$('ul.sub-menu').hide(); // hide submenu
		$("ul li:has(ul)").find('a').first().attr('href','#');
		$("ul li.sub").click(function(){
			$("ul",this).toggle('slow');
			$("li.sub").toggleClass('clicked');
		});
		
		jQuery(document).ready(function($){		
			$('.menu-toggle').on('click', function() {		
			$('.menu-primary-container').toggleClass('expand');		
			return false;		
			});		
				
			// Menu Toggle State - Active		
			$('.menu-toggle').on('click', function(){		
			  	$(this).toggleClass('active');		
			  	return false;		
			});		
		});

		// Smooth Scroll to Anchor
		$(function() {
		  $('a[href*=#]:not([href=#])').click(function() {
			if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
			  var target = $(this.hash);
			  target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
			  if (target.length) {
				$('html,body').animate({
				  scrollTop: target.offset().top
				}, 1000);
				return false;
			  }
			}
		  });
		});
		
	});
})( jQuery );
