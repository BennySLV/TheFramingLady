/** JavaScript/jQuery for the register page
* Front-End functionality for the register form
*
* @author Benjamin Silveston <bsilveston37@gmail.com> 
*/

// Shorthand for $(document).ready(function(){ });
$(function() {
	// First Name Regular Expression
	var $firstNameRegex = new RegExp(/^[a-zA-Z -]{3,16}$/);

	// First name text input
	$('#first-name').on('blur', function() {
		// First name text input value
		var $firstNameInput = $(this).val();

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
		var $surnameInput = $(this).val();

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

	// Password Regular Expression
	var $passwordRegex = new RegExp(/^[a-z0-9_-]{6,18}$/);

	// Password input
	$('#password').on('blur', function() {
		// Password input value
		var $passwordInput = $(this).val();

		/* If the password input text-box is NOT empty AND if the email is valid 
			(i.e. contains the necessary characters)) then insert the "green tick" indicator
		*/
		if($.trim($passwordInput).length) {
			if($passwordRegex.test($passwordInput)){
				$('#password-flag').removeClass('fa fa-times').addClass('fa fa-check');
				$('#password-validation').removeClass('validation-fail').addClass('validation-pass').text(' Email address is valid!');
			}
			else { // If there are illegal characters in the email address - display "red X" indicator and "fail" validation message
				$('#password-flag').removeClass('fa fa-check').addClass('fa fa-times');
				$('#password-validation').removeClass('validation-pass').addClass('validation-fail').text(' Email address is not valid!')
			}						
		}
		// If the input text-box is empty then insert the "red X" indicator and appropriate "fail" validation message
		else {
			$('#password-flag').removeClass('fa fa-check').addClass('fa fa-times');
			$('#password-validation').removeClass('validation-pass').addClass('validation-fail').text(' Please enter email address!')
		}	
	});
	
	// Confirm password input
	$('#confirm-password').on('blur', function() {
		// Confirm password input value
		var $confirmPasswordInput = $(this).val();

		// First password input value
		var $passwordInput = $('#password').val();

		/* If the password input text-box is NOT empty AND if the email is valid 
			(i.e. contains the necessary characters)) then insert the "green tick" indicator
		*/
		if($.trim($confirmPasswordInput).length) {
			if($passwordRegex.test($confirmPasswordInput)) {
				if($confirmPasswordInput === $passwordInput) {
					$('#confirm-password-flag').removeClass('fa fa-times').addClass('fa fa-check');
					$('#confirm-password-validation').removeClass('validation-fail').addClass('validation-pass').text(' Password is valid and matches!');
				}
				else { // If the two passwords do not match
					$('#confirm-password-flag').removeClass('fa fa-check').addClass('fa fa-times');
					$('#confirm-password-validation').removeClass('validation-pass').addClass('validation-fail').text(' Passwords do not match!');	
				}															
			}
			else { // If the confirmed password DOES NOT contain necessary regex characters
				$('#confirm-password-flag').removeClass('fa fa-check').addClass('fa fa-times');
				$('#confirm-password-validation').removeClass('validation-pass').addClass('validation-fail').text(' Password is not valid!');
			}											
		}
		// If the confirmed password input text-box is empty then insert the "red X" indicator
		else {
			$('#confirm-password-flag').removeClass('fa fa-check').addClass('fa fa-times');
			$('#confirm-password-validation').removeClass('validation-pass').addClass('validation-fail').text(' Please enter password!');				
		}
	});

	// Clear all input fields when the user clicks the "reset" button
	$('#reset-button').on('click', function(event) {
		event.preventDefault(); // Prevent the entire page from reloading

		// Flag to indicate that the "reset" was clicked
		var $resetButtonClicked = $(this).data('clicked', true);

		/* If the button was clicked AND if ALL input fields are filled 
			when the page first loads then clear all input fields */
		if($resetButtonClicked) {
			$('#first-name').val("");
			$('#surname').val("");
			$('#email').val("");
			$('#confirm-email').val("");
			$('#message').val("");
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
		if($('#message').val("")) {
			$('#message-flag').removeClass('fa fa-check').addClass('fa fa-times');
			$('#message-validation').removeClass('validation-pass').addClass('validation-fail').text(' Please enter message!');
		}			
	});

	// When the user clicks the "submit" button, close the form
	$('#register-form').on('submit', function() {
		$('#submit-button').on('click', function(event) {
			event.preventDefault(); // Prevent the entire page from refreshing each time the form submits

			// Flag to indicate that the "submit" was clicked
			var $submitButtonClicked = $(this).data('clicked', true);

			// If the "submit" button was clicked
			if($submitButtonClicked) {
				$('#register-form').fadeOut('slow');
			}
		});
	});
});