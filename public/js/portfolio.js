/* JavaScript/jQuery for the portfolio page */

// Shorthand for $(document).ready(function(){})
$(function() {
	// Show caption when user clicks on image
	$('#img-1-more-info-panel').on('click', function() {
		$(this).data('clicked', true); // Flag to indicate that the panel has been clicked on		

		// If the first panel was clicked on by the user
		if($(this).data('clicked')) {
			$('#img-1-text-description').addClass('description').slideDown('slow').load('custom-text/img-1-description.html');
			$('#close-button-1').addClass('fa fa-times').text(' Close');
		}
	});

	// Remove caption when the double-clicks on the image
	$('#close-button-1').on('click', function() {
		$(this).data('clicked', true); // Flag to indicate that the "img-1" close button has been clicked

		// If the first close-button has been clicked on by the user
		if($(this).data('clicked')) {			
			$('#img-1-text-description').slideUp('slow');
			$('#close-button-1').removeClass('fa fa-times').text('');			
		}		
	});

	// Show caption when user clicks on image
	$('#img-2-more-info-panel').on('click', function() {
		$(this).data('clicked', true); // Flag to indicate that the panel has been clicked on

		if($(this).data('clicked')) {
			$('#img-2-text-description').addClass('description').slideDown('slow').load('custom-text/img-2-description.html');
			$('#close-button-2').addClass('fa fa-times').text(' Close');
		}		
	});

	// Remove caption when the double-clicks on the image
	$('#close-button-2').on('click', function() {
		$(this).data('clicked', true); // Flag to indicate that the "img-2" close-button has been clicked

		if($(this).data('clicked')) {
			$('#img-2-text-description').slideUp('slow');
			$('#close-button-2').removeClass('fa fa-times').text('');
		}
	});

	// Show caption when user clicks on image
	$('#img-3-more-info-panel').on('click', function() {
		$(this).data('clicked', true); // Flag to indicate that the third panel has been clicked on

		if($(this).data('clicked'), true) {
			$('#img-3-text-description').addClass('description').slideDown('slow').load('custom-text/img-3-description.html');
			$('#close-button-3').addClass('fa fa-times').text(' Close');
		}
	});

	// Remove caption when the double-clicks on the image
	$('#close-button-3').on('click', function() {
		$(this).data('clicked', true);
				
		if($(this).data('clicked')) {
			$('#img-3-text-description').slideUp('slow');
			$('#close-button-3').removeClass('fa fa-times').text('');
		}			
	});
		
	// Show caption when user clicks on image
	$('#img-4-more-info-panel').on('click', function() {
		$(this).data('clicked', true); // Flag to indicate that the fourth panel has been clicked on

		if($(this).data('clicked')) {
			$('#img-4-text-description').addClass('description').slideDown('slow').load('custom-text/img-4-description.html');
			$('#close-button-4').addClass('fa fa-times').text(' Close');
		}		
	});

	// Remove caption when the double-clicks on the image
	$('#close-button-4').on('click', function() {
		$(this).data('clicked', true);

		if($(this).data('clicked')) { 
			$('#img-4-text-description').slideUp('slow');
			$('#close-button-4').removeClass('fa fa-times').text('');
		}
	});

	// Show caption when user clicks on image
	$('#img-5-more-info-panel').on('click', function() {
		$(this).data('clicked', true);

		if($(this).data('clicked')) {
			$('#img-5-text-description').addClass('description').slideDown('slow').load('custom-text/img-5-description.html');
			$('#close-button-5').addClass('fa fa-times').text(' Close');
		}
	});

	// Remove caption when the double-clicks on the image
	$('#close-button-5').on('click', function() {
		$(this).data('clicked', true);

		if($(this).data('clicked')) {
			$('#img-5-text-description').slideUp('slow');
			$('#close-button-5').removeClass('fa fa-times').text('');
		}			
	});

	// Show caption when user clicks on image
	$('#img-6-more-info-panel').on('click', function() {		
		$(this).data('clicked', true);

		if($(this).data('clicked')) {
			$('#img-6-text-description').addClass('description').slideDown('slow').load('custom-text/img-6-description.html');
			$('#close-button-6').addClass('fa fa-times').text(' Close');
		}
	});

	// Remove caption when the double-clicks on the image
	$('#close-button-6').on('click', function() {
		$(this).data('clicked', true);

		if($(this).data('clicked')) {
			$('#img-6-text-description').slideUp('slow');
			$('#close-button-6').removeClass('fa fa-times').text('');
		}
	});
});