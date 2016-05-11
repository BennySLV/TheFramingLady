/* JavaScript/jQuery for the portfolio page */

$(function() {
	// Show caption when user clicks on image
	$('#img-1-more-info-panel').on('click', function() {
		$('#img-1-text-description').addClass('description').slideDown('slow').load('custom-text/img-1-description.html');
		$('.close-button').addClass('fa fa-times').text(' Close');
	});

	// Remove caption when the double-clicks on the image
	$('.close-button').on('click', function() {
		$('#img-1-text-description').slideUp('slow');
		$('.close-button').removeClass('fa fa-times').text('');		
	});

	// Show caption when user clicks on image
	$('#img-2-more-info-panel').on('click', function() {
		$('#img-2-text-description').addClass('description').slideDown('slow').load('custom-text/img-2-description.html');
		$('.close-button').addClass('fa fa-times').text(' Close');
	});

	// Remove caption when the double-clicks on the image
	$('.close-button').on('click', function() {
		$('#img-2-text-description').slideUp('slow');
		$('.close-button').removeClass('fa fa-times').text('');
	});

	// Show caption when user clicks on image
	$('#img-3-more-info-panel').on('click', function() {
		$('#img-3-text-description').addClass('description').slideDown('slow').load('custom-text/img-3-description.html');
		$('.close-button').addClass('fa fa-times').text(' Close');
	});

	// Remove caption when the double-clicks on the image
	$('.close-button').on('click', function() {
		$('#img-3-text-description').slideUp('slow');
		$('.close-button').removeClass('fa fa-times').text('');
	});

	// Show caption when user clicks on image
	$('#img-4-more-info-panel').on('click', function() {
		$('#img-4-text-description').addClass('description').slideDown('slow').load('custom-text/img-4-description.html');
		$('.close-button').addClass('fa fa-times').text(' Close');
	});

	// Remove caption when the double-clicks on the image
	$('.close-button').on('click', function() {
		$('#img-4-text-description').slideUp('slow');
		$('.close-button').removeClass('fa fa-times').text('');
	});

	// Show caption when user clicks on image
	$('#img-5-more-info-panel').on('click', function() {
		$('#img-5-text-description').addClass('description').slideDown('slow').load('custom-text/img-5-description.html');
		$('.close-button').addClass('fa fa-times').text(' Close');
	});

	// Remove caption when the double-clicks on the image
	$('.close-button').on('click', function() {
		$('#img-5-text-description').slideUp('slow');
		$('.close-button').removeClass('fa fa-times').text('');
	});

	// Show caption when user clicks on image
	$('#img-6-more-info-panel').on('click', function() {
		$('#img-6-text-description').addClass('description').slideDown('slow').load('custom-text/img-6-description.html');
		$('.close-button').addClass('fa fa-times').text(' Close');
	});

	// Remove caption when the double-clicks on the image
	$('.close-button').on('click', function() {
		$('#img-6-text-description').slideUp('slow');
		$('.close-button').removeClass('fa fa-times').text('');
	});
}); 