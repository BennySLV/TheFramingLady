/* JavaScript/jQuery for the porfolio page */
$(function() {
	// Show caption when user hovers over image
	$('#img-1').on('mouseover', function() {
		$('#img-1-caption').addClass('pic-info');
		$('#img-1-caption').text('Badminton Awards 1992 - 2007');
	});

	// Remove caption when the user leaves the image
	$('#img-1').on('mouseleave', function() {
		$('#img-1-caption').removeClass('pic-info');
		$('#img-1-caption').text('');
	});

	// Show caption when user hovers over image
	$('#img-2').on('mouseover', function() {
		$('#img-2-caption').addClass('pic-info');
		$('#img-2-caption').text('Children\'s shoes');
	});

	// Remove caption when the user leaves the image
	$('#img-2').on('mouseleave', function() {
		$('#img-2-caption').removeClass('pic-info');
		$('#img-2-caption').text('');
	});

	// Show caption when user hovers over image
	$('#img-3').on('mouseover', function() {
		$('#img-3-caption').addClass('pic-info');
		$('#img-3-caption').text('Grandad\'s Darts');
	});

	// Remove caption when the user leaves the image
	$('#img-3').on('mouseleave', function() {
		$('#img-3-caption').removeClass('pic-info');
		$('#img-3-caption').text('');
	});

	// Show caption when user hovers over image
	$('#img-4').on('mouseover', function() {
		$('#img-4-caption').addClass('pic-info');
		$('#img-4-caption').text('Ship Admiral');
	});

	// Remove caption when the user leaves the image
	$('#img-4').on('mouseleave', function() {
		$('#img-4-caption').removeClass('pic-info');
		$('#img-4-caption').text('');
	});

	// Show caption when user hovers over image
	$('#img-5').on('mouseover', function() {
		$('#img-5-caption').addClass('pic-info');
		$('#img-5-caption').text('Medals');
	});

	// Remove caption when the user leaves the image
	$('#img-5').on('mouseleave', function() {
		$('#img-5-caption').removeClass('pic-info');
		$('#img-5-caption').text('');
	});

	// Show caption when user hovers over image
	$('#img-6').on('mouseover', function() {
		$('#img-6-caption').addClass('pic-info');
		$('#img-6-caption').text('Badges');
	});

	// Remove caption when the user leaves the image
	$('#img-6').on('mouseleave', function() {
		$('#img-6-caption').removeClass('pic-info');
		$('#img-6-caption').text('');
	});
});