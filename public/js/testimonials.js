/* JavaScript/jQuery for the testimonials page */

// Shorthand for $(document).ready(function({ });
$(function() {
	// Initially hide the testimonials form when the page first loads
	$('#testimonials-form').hide();
	$('#form-close-button').removeClass('fa fa-times').hide();

	// When the user clicks the button, show the form
	$('#submit-testimonial-button').on('click', function() {
		// Flag to indicate that the "Submit own testimonial" button was clicked
		var $isClicked = $(this).data('clicked', true);

		// If "Submit own testimonial" button was clicked, show the form and its accompanying "close" button
		if($($isClicked)) {
			$('#testimonials-form').fadeIn('slow');
			$('#form-close-button').addClass('fa fa-times').show().text(' Close');
		}
	});

	// When the user clicks the "submit" button, close the form
	$('#submit-button').on('click', function(event) {
		event.preventDefault();
		// Flag to indicate that the "submit" button was clicked
		var $submitButtonClicked = $(this).data('clicked', true);

		// If the "submit" button was clicked
		if($($submitButtonClicked)) {
			$('#testimonials-form').fadeOut('slow');
			$('#form-close-button').removeClass('fa fa-times').hide().text(''); // hide the "close" button
		}
	});

	// When the user clicks the "close" button apply the same above functionality
	$('#form-close-button').on('click', function() {
		// Flag to indicate that the "close" button was clicked
		var $closeButtonClicked = $(this).data('clicked', true);

		// If the "close" button was clicked
		if($($closeButtonClicked)) {
			$('#testimonials-form').fadeOut('slow');
			$('#form-close-button').removeClass('fa fa-times').hide().text(''); // hide the "close" button
		}
	});
});