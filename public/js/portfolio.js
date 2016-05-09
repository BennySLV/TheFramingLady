/* JavaScript/jQuery for the porfolio page */
$(function() {
	// Show caption when user hovers over image
	$('#img-1').on('mouseover', function() {
		$('#img-1-caption-title').addClass('caption-title');
		$('#img-1-caption-title').text('Badminton Awards 1992 - 2007');
	});

	// Remove caption when the user leaves the image
	$('#img-1').on('mouseleave', function() {
		$('#img-1-caption-title').removeClass('caption-title');
		$('#img-1-caption-title').text('');
	});

	// Show caption when user hovers over image
	$('#img-2').on('mouseover', function() {
		$('#img-2-caption-title').addClass('caption-title');
		$('#img-2-caption-title').text('Children\'s shoes');
	});

	// Remove caption when the user leaves the image
	$('#img-2').on('mouseleave', function() {
		$('#img-2-caption-title').removeClass('caption-title');
		$('#img-2-caption-title').text('');
	});

	// Show caption when user hovers over image
	$('#img-3').on('mouseover', function() {
		$('#img-3-caption-title').addClass('caption-title');
		$('#img-3-caption-title').text('Grandad\'s Darts');
	});

	// Remove caption when the user leaves the image
	$('#img-3').on('mouseleave', function() {
		$('#img-3-caption-title').removeClass('caption-title');
		$('#img-3-caption-title').text('');
	});

	// Show caption when user hovers over image
	$('#img-4').on('mouseover', function() {
		$('#img-4-caption-title').addClass('caption-title');
		$('#img-4-caption-title').text('Ship Admiral');
	});

	// Remove caption when the user leaves the image
	$('#img-4').on('mouseleave', function() {
		$('#img-4-caption-title').removeClass('caption-title');
		$('#img-4-caption-title').text('');
	});

	// Show caption when user hovers over image
	$('#img-5').on('mouseover', function() {
		$('#img-5-caption-title').addClass('caption-title');
		$('#img-5-caption-title').text('Medals');
	});

	// Remove caption when the user leaves the image
	$('#img-5').on('mouseleave', function() {
		$('#img-5-caption-title').removeClass('caption-title');
		$('#img-5-caption-title').text('');
	});

	// Show caption when user hovers over image
	$('#img-6').on('mouseover', function() {
		$('#img-6-caption-title').addClass('caption-title');
		$('#img-6-caption-title').text('Badges');
	});

	// Remove caption when the user leaves the image
	$('#img-6').on('mouseleave', function() {
		$('#img-6-caption-title').removeClass('caption-title');
		$('#img-6-caption-title').text('');
	});
});