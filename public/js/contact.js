/* JavaScript/jQuery for the Contact page */

// Shorthand for $(document).ready(function({ });
$(function() {
	$('#submit-button').on('click', function(event) {
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