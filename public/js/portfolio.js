/* JavaScript/jQuery for the portfolio page */

// Shorthand for $(document).ready()
$(function() {
	// Show caption when user clicks on image
	$('#img-1').on('click', function() {
		$('#img-1-text-description').addClass('description');
		$('#img-1-text-description').slideDown('slow').load('custom-text/img-1-description.html');
	});

	// Remove caption when the double-clicks on the image
	$('#img-1').on('dblclick', function() {
		$('#img-1-text-description').slideUp('slow');		
	});

	// Show caption when user clicks on image
	$('#img-2').on('click', function() {
		$('#img-2-text-description').addClass('description');
		$('#img-2-text-description').slideDown('slow').load('custom-text/img-2-description.html');
	});

	// Remove caption when the double-clicks on the image
	$('#img-2').on('dblclick', function() {
		$('#img-2-text-description').slideUp('slow');
	});

	// Show caption when user clicks on image
	$('#img-3').on('click', function() {
		$('#img-3-text-description').addClass('description');
		$('#img-3-text-description').slideDown('slow').load('custom-text/img-3-description.html');
	});

	// Remove caption when the double-clicks on the image
	$('#img-3').on('dblclick', function() {
		$('#img-3-text-description').slideUp('slow');
	});

	// Show caption when user clicks on image
	$('#img-4').on('click', function() {
		$('#img-4-text-description').addClass('description');
		$('#img-4-text-description').slideDown('slow').load('custom-text/img-4-description.html');
	});

	// Remove caption when the double-clicks on the image
	$('#img-4').on('dblclick', function() {
		$('#img-4-text-description').slideUp('slow');
	});

	// Show caption when user clicks on image
	$('#img-5').on('click', function() {
		$('#img-5-text-description').addClass('description');
		$('#img-5-text-description').slideDown('slow').load('custom-text/img-5-description.html');
	});

	// Remove caption when the double-clicks on the image
	$('#img-5').on('dblclick', function() {
		$('#img-5-text-description').slideUp('slow');
	});

	// Show caption when user clicks on image
	$('#img-6').on('click', function() {
		$('#img-6-text-description').addClass('description');
		$('#img-6-text-description').slideDown('slow').load('custom-text/img-6-description.html');
	});

	// Remove caption when the double-clicks on the image
	$('#img-6').on('dblclick', function() {
		$('#img-6-text-description').slideUp('slow');
	});
}); 