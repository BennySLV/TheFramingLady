/* JavaScript/jQuery for the portfolio page 

	- Functionality for the image-panels 
*/

// Shorthand for $(document).ready(function(){ })
$(function() {
	// Initially hide all "close" buttons when the page loads
	$('.close-button').each(function() {
		$(this).hide();
	});

	// First panel
	$('#img-1-more-info-panel').on('click', function() {
		$(this).data('clicked', true); // Flag to indicate that the first panel has been clicked on	

		// If the first panel was clicked on by the user
		if($(this).data('clicked')) {
			$('#img-1-text-description').addClass('description').slideDown('slow').load('custom-text/img-1-description.html');
			$('#close-button-1').show().addClass('fa fa-times').text(' Close');
		}
	});

	// Remove text-description when the user clicks on the "close" button
	$('#close-button-1').on('click', function() {
		$(this).data('clicked', true); // Flag to indicate that the close button has been clicked

		// If the "close" button has been clicked on by the user
		if($(this).data('clicked')) {			
			$('#img-1-text-description').slideUp('slow');
			$('#close-button-1').removeClass('fa fa-times').text('').hide();			
		}		
	});

	// Second panel
	$('#img-2-more-info-panel').on('click', function() {
		$(this).data('clicked', true); // Flag to indicate that the second panel has been clicked on

		// If the second panel was clicked on by the user
		if($(this).data('clicked')) {
			$('#img-2-text-description').addClass('description').slideDown('slow').load('custom-text/img-2-description.html');
			$('#close-button-2').show().addClass('fa fa-times').text(' Close');
		}		
	});

	// Remove text-description when the user clicks on the "close" button
	$('#close-button-2').on('click', function() {
		$(this).data('clicked', true); // Flag to indicate that the close-button has been clicked

		// If the "close" button has been clicked on by the user
		if($(this).data('clicked')) {
			$('#img-2-text-description').slideUp('slow');
			$('#close-button-2').removeClass('fa fa-times').text('').hide();
		}
	});

	// Third panel
	$('#img-3-more-info-panel').on('click', function() {
		$(this).data('clicked', true); // Flag to indicate that the third panel has been clicked on

		// If the third panel was clicked on by the user
		if($(this).data('clicked'), true) {
			$('#img-3-text-description').addClass('description').slideDown('slow').load('custom-text/img-3-description.html');
			$('#close-button-3').show().addClass('fa fa-times').text(' Close');
		}
	});

	// Remove text-description when the user clicks on the "close" button
	$('#close-button-3').on('click', function() {
		$(this).data('clicked', true); // Flag to indicate that the "close" button has been clicked on
		
		// If the "close" button has been clicked on by the user
		if($(this).data('clicked')) {
			$('#img-3-text-description').slideUp('slow');
			$('#close-button-3').removeClass('fa fa-times').text('').hide();
		}			
	});
		
	// Fourth panel
	$('#img-4-more-info-panel').on('click', function() {
		$(this).data('clicked', true); // Flag to indicate that the fourth panel has been clicked on

		// If the "close" button has been clicked on by the user
		if($(this).data('clicked')) {
			$('#img-4-text-description').addClass('description').slideDown('slow').load('custom-text/img-4-description.html');
			$('#close-button-4').show().addClass('fa fa-times').text(' Close');
		}		
	});

	// Remove text-description when the user clicks on the "close" button
	$('#close-button-4').on('click', function() {
		$(this).data('clicked', true); // Flag to indicate the that the "close" button has been clicked on

		// If the "close" button has been clicked on by the user
		if($(this).data('clicked')) { 
			$('#img-4-text-description').slideUp('slow');
			$('#close-button-4').removeClass('fa fa-times').text('').hide();
		}
	});

	// Fifth panel
	$('#img-5-more-info-panel').on('click', function() {
		$(this).data('clicked', true); // Flag to indicate that the fifth panel has been clicked on

		// Remove text-description when the user clicks on the "close" button
		if($(this).data('clicked')) {
			$('#img-5-text-description').addClass('description').slideDown('slow').load('custom-text/img-5-description.html');
			$('#close-button-5').show().addClass('fa fa-times').text(' Close');
		}
	});

	// Remove text-description when the user clicks on the "close" button
	$('#close-button-5').on('click', function() {
		$(this).data('clicked', true); // Flag to indicate the the "close" button has been clicked on

		// If the "close" button has been clicked on
		if($(this).data('clicked')) {
			$('#img-5-text-description').slideUp('slow');
			$('#close-button-5').removeClass('fa fa-times').text('').hide();
		}			
	});

	// Sixth panel
	$('#img-6-more-info-panel').on('click', function() {		
		$(this).data('clicked', true); // Flag to indicate the sixth panel has been clicked on

		// Remove text-description when the user clicks on the "close" button
		if($(this).data('clicked')) {
			$('#img-6-text-description').addClass('description').slideDown('slow').load('custom-text/img-6-description.html');
			$('#close-button-6').show().addClass('fa fa-times').text(' Close');
		}
	});

	// Remove text-description when the user clicks on the "close" button
	$('#close-button-6').on('click', function() {
		$(this).data('clicked', true); // Flag to indicate that the "close" button has been clicked on

		// If the "close" button has been clicked on by the user
		if($(this).data('clicked')) {
			$('#img-6-text-description').slideUp('slow');
			$('#close-button-6').removeClass('fa fa-times').text('').hide();
		}
	});
});