/* JavaScript/jQuery for the testimonials page */

// Shorthand for $(document).ready(function({ });
$(function() {
	// Initially hide the testimonials form
	$('#testimonials-form').hide();

	// When the user clicks the button, show the form
	$('#submit-testimonial-button').on('click', function() {
		$('#testimonials-form').show();
	});
});