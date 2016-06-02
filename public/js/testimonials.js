/** JavaScript/jQuery for the testimonials page 
*
* @author Benjamin Silveston <bsilveston37@gmail.com> 
*
*/

// Shorthand for $(document).ready(function({ });
$(function() {
	// Initially hide the testimonials form when the page first loads
	$('#testimonials-form').hide();

	// When the user clicks the button, show the form
	$('#submit-testimonial-button').on('click', function(event) {
		event.preventDefault(); // Prevent the entire page from reloading

		// Flag to indicate that the "Submit own testimonial" button was clicked
		var $isClicked = $(this).data('clicked', true);

		// If "Submit own testimonial" button was clicked, show the form and its accompanying "close" button
		if($($isClicked)) {
			$('#testimonials-form').fadeIn('slow');
			$('#form-close-button').addClass('fa fa-times').show().text(' Close');
		}
	});

	// First Name Regular Expression
	var $firstNameRegex = new RegExp(/^[a-zA-Z -]{3,16}$/);

	// First name text input
	$('#first-name').on('blur', function() {
		// First name text input value
		$firstNameInput = $(this).val();

		/* If input text-box is NOT empty AND the input value is valid 
			(i.e. contains the appropriate characters) - mark the result with a "green tick"	
			and "pass" validation message
		*/
		if($.trim($firstNameInput).length) {
			if($firstNameRegex.test($firstNameInput)) {
				$('#first-name-flag').removeClass('fa fa-times').addClass('fa fa-check');
				$('#first-name-validation').removeClass('validation-fail').addClass('validation-pass').text(' First name is valid!');
			}
			else { // If there are illegal characters in the first name - display "red X" indicator and "fail" validation message 
				$('#first-name-flag').removeClass('fa fa-check').addClass('fa fa-times');
				$('#first-name-validation').removeClass('validation-pass').addClass('validation-fail').text(' First name is not valid!');
			}			
		}
		// If the input text-box is empty then insert the "red X" indicator and appropriate "fail" validation message
		else {
			$('#first-name-flag').removeClass('fa fa-check').addClass('fa fa-times');
			$('#first-name-validation').removeClass('validation-pass').addClass('validation-fail').text(' Please enter first name!');
		}			
	});

	// Surname Regular Expression
	var $surnameRegex = new RegExp(/^[a-zA-Z -]{3,16}$/);

	// Surname text input
	$('#surname').on('blur', function() {
		// First name text input value
		$surnameInput = $(this).val();

		/* If input text-box is NOT empty AND the input value is valid 
			(i.e. contains the appropriate characters) - mark the result with a "green tick"	
			and "pass" validation message
		*/
		if($.trim($surnameInput).length) {
			if($surnameRegex.test($surnameInput)) {
				$('#surname-flag').removeClass('fa fa-times').addClass('fa fa-check');
				$('#surname-validation').removeClass('validation-fail').addClass('validation-pass').text(' Surname is valid!');
			}			
			else { // If there are illegal characters in the surname - display "red X" indicator and "fail" validation message
				$('#surname-flag').removeClass('fa fa-check').addClass('fa fa-times');
				$('#surname-validation').removeClass('validation-pass').addClass('validation-fail').text(' Surname is not valid!');
			}
		}
		// If the input text-box is empty then insert the "red X" indicator and appropriate "fail" validation message
		else {
			$('#surname-flag').removeClass('fa fa-check').addClass('fa fa-times');
			$('#surname-validation').removeClass('validation-pass').addClass('validation-fail').text(' Please enter surname!');
		}
	});

	// Email address Regular Expression
	var $emailRegex = new RegExp(/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/);

	// Email address text input
	$('#email').on('blur', function() {
		// Email address input value
		var $emailInput = $(this).val();

		/* If the email input text-box is NOT empty AND if the email is valid 
			(i.e. contains the necessary characters ('@', '.com,.org,etc')) then insert the "green tick" indicator
		*/
		if($.trim($emailInput).length) {
			if($emailRegex.test($emailInput)){
				$('#email-flag').removeClass('fa fa-times').addClass('fa fa-check');
				$('#email-validation').removeClass('validation-fail').addClass('validation-pass').text(' Email address is valid!');
			}
			else { // If there are illegal characters in the email address - display "red X" indicator and "fail" validation message
				$('#email-flag').removeClass('fa fa-check').addClass('fa fa-times');
				$('#email-validation').removeClass('validation-pass').addClass('validation-fail').text(' Email address is not valid!')
			}						
		}
		// If the input text-box is empty then insert the "red X" indicator and appropriate "fail" validation message
		else {
			$('#email-flag').removeClass('fa fa-check').addClass('fa fa-times');
			$('#email-validation').removeClass('validation-pass').addClass('validation-fail').text(' Please enter email address!')
		}
	});

	// Confirm-Email address text input
	$('#confirm-email').on('blur', function() {
		// Email address input value
		var $confirmEmailInput = $(this).val();

		/* If the confirmed email input text-box is NOT empty AND if the email is valid 
			(i.e. contains the necessary characters ('@', '.com,.org,etc')) then insert the "green tick" indicator
		*/			
		if($.trim($confirmEmailInput).length) {
			if($emailRegex.test($confirmEmailInput)) {
				$('#confirm-email-flag').removeClass('fa fa-times').addClass('fa fa-check');
				$('#confirm-email-validation').removeClass('validation-fail').addClass('validation-pass').text(' Email address is valid!')				
			}
			else { // If the confirmed email address DOES NOT contain necessary regex characters
				$('#confirm-email-flag').removeClass('fa fa-check').addClass('fa fa-times');
				$('#confirm-email-validation').removeClass('validation-pass').addClass('validation-fail').text(' Email address is not valid!');
			}											
		}
		// If the confirmed email input text-box is empty then insert the "red X" indicator
		else {
			$('#confirm-email-flag').removeClass('fa fa-check').addClass('fa fa-times');
			$('#confirm-email-validation').removeClass('validation-pass').addClass('validation-fail').text(' Please enter email address!');				
		}
	});

	// Contact message Regular Expression
	var $messageRegex = new RegExp(/[a-zA-Z0-9 ]+\w\W$/);

	// Contact message text-area
	$('#comments').on('blur', function() {
		// Message text input
		var $messageInput = $(this).val();

		/* If the message input text-box is NOT empty AND if the email is valid 
			(i.e. contains the necessary characters) then insert the "green tick" indicator and message
		*/
		if($.trim($messageInput).length) {
			if($messageRegex.test($messageInput)) {
				$('#comments-flag').removeClass('fa fa-times').addClass('fa fa-check');
				$('#comments-validation').removeClass('validation-fail').addClass('validation-pass').text(' Comment(s) is valid!');
			}
			else { // If any illegal characters are found in the contact message
				$('#comments-flag').removeClass('fa fa-check').addClass('fa fa-times');
				$('#comments-validation').removeClass('validation-pass').addClass('validation-fail').text(' Comment(s) is not valid!');
			}			
		}
		// If the input text-box is NOT empty then insert the "green tick" indicator
		else {
			$('#comments-flag').removeClass('fa fa-check').addClass('fa fa-times');
			$('#comments-validation').removeClass('validation-pass').addClass('validation-fail').text(' Please enter your comment(s)!');
		}
	});	

	// Clear all input fields when the user clicks the "reset" button
	$('#reset-button').on('click', function(event) {
		event.preventDefault(); // Prevent the entire page from reloading

		// Flag to indicate that the "submit" was clicked
		var $resetButtonClicked = $(this).data('clicked', true);

		// If the button was clicked, clear all input fields
		if($resetButtonClicked) {
			$('#first-name').val("");
			$('#surname').val("");
			$('#email').val("");
			$('#confirm-email').val("");
			$('#comments').val("");
		}

		// Flag all empty input fields appropriately
		if($('#first-name').val("")) {
			$('#first-name-flag').removeClass('fa fa-check').addClass('fa fa-times');
			$('#first-name-validation').removeClass('validation-pass').addClass('validation-fail').text(' Please enter first name!');
		}
		if($('#surname').val("")) {
			$('#surname-flag').removeClass('fa fa-check').addClass('fa fa-times');
			$('#surname-validation').removeClass('validation-pass').addClass('validation-fail').text(' Please enter surname!');
		}
		if($('#email').val("")) {
			$('#email-flag').removeClass('fa fa-check').addClass('fa fa-times');
			$('#email-validation').removeClass('validation-pass').addClass('validation-fail').text(' Please enter email address!');
		}
		if($('#confirm-email').val("")) {
			$('#confirm-email-flag').removeClass('fa fa-check').addClass('fa fa-times');
			$('#confirm-email-validation').removeClass('validation-pass').addClass('validation-fail').text(' Please enter email address!');
		}
		if($('#comments').val("")) {
			$('#comments-flag').removeClass('fa fa-check').addClass('fa fa-times');
			$('#comments-validation').removeClass('validation-pass').addClass('validation-fail').text(' Please enter message!');
		}			
	});

	// When the user clicks the "submit" button, close the form
	$('#contact-form').on('submit', function() {
		$('#submit-button').on('click', function(event) {
			event.preventDefault(); // Prevent the entire page from refreshing each time the form submits

			// Flag to indicate that the "submit" was clicked
			var $submitButtonClicked = $(this).data('clicked', true);

			// If the "submit" button was clicked
			if($submitButtonClicked) {
				$('#contact-form').fadeOut('slow');
			}
		});
	});

	// When the user clicks the "close" button apply the same above functionality
	$('#form-close-button').on('click', function(event) {
		// Prevent the entire page from reloading
		event.preventDefault(); 

		// Flag to indicate that the "close" button was clicked
		var $closeButtonClicked = $(this).data('clicked', true);

		// If the "close" button was clicked
		if($closeButtonClicked) {
			$('#testimonials-form').fadeOut('slow');
		}
	});
});