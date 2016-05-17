/* JavaScript/jQuery for the Contact page */

// Shorthand for $(document).ready(function({ });
$(function() {
	/* For all contact form text-inputs 
		Apply flags to indicate whether the specific input has been filled

			- For empty boxes, mark with an "X"
			- For filled boxes, mark with a "check" (i.e. tick)
	*/

	// First name text input
	$('#first-name').on('blur', function() {
		// If input text-box is empty then insert the "red X" indicator
		if(!$.trim(this.value).length) {
			$('#first-name-flag').removeClass('fa fa-check').addClass('fa fa-times');
		}
		// If the input text-box is NOT empty then insert the "green tick" indicator
		else {
			$('#first-name-flag').removeClass('fa fa-times').addClass('fa fa-check');
		}			
	});

	// Surname text input
	$('#surname').on('blur', function() {
		// If input text-box is empty then insert the "red X" indicator
		if(!$.trim(this.value).length) {			
			$('#surname-flag').removeClass('fa fa-check').addClass('fa fa-times');
		}
		// If the input text-box is NOT empty then insert the "green tick" indicator
		else {
			$('#surname-flag').removeClass('fa fa-times').addClass('fa fa-check');
		}
	});

	// Email address text input
	$('#email').on('blur', function() {
		// If input text-box is empty then insert the "red X" indicator
		if(!$.trim(this.value).length) {			
			$('#email-flag').removeClass('fa fa-check').addClass('fa fa-times');
		}
		// If the input text-box is NOT empty then insert the "green tick" indicator
		else {
			$('#email-flag').removeClass('fa fa-times').addClass('fa fa-check');
		}
	});

	// Confirm-Email address text input
	$('#confirm-email').on('blur', function() {
		// If input text-box is empty then insert the "red X" indicator
		if(!$.trim(this.value).length) {
			$('#confirm-email-flag').removeClass('fa fa-check').addClass('fa fa-times');
		}
		// If the input text-box is NOT empty then insert the "green tick" indicator
		else {
			$('#confirm-email-flag').removeClass('fa fa-times').addClass('fa fa-check');
		}
	});

	// Testimonial message text-area
	$('#message').on('blur', function() {
		// If input text-box is empty then insert the "red X" indicator
		if(!$.trim(this.value).length) {
			$('#message-flag').removeClass('fa fa-check').addClass('fa fa-times');
		}
		// If the input text-box is NOT empty then insert the "green tick" indicator
		else {
			$('#message-flag').removeClass('fa fa-times').addClass('fa fa-check');
		}
	});

	// Submit button functionality
	$('#submit-button').on('submit', function(event) {
		// Prevent page from re-opening
		event.preventDefault();

		// Flag to indicate that the "submit" was clicked
		var $submitButtonClicked = $(this).data('clicked', true);

		// If the "submit" button was clicked
		if($submitButtonClicked) {
			$('#contact-form').fadeOut('slow');
		}
	});
});