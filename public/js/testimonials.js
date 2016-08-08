/** 
* JavaScript/jQuery for the Testimonials page
*
* @author Benjamin Silveston <bsilveston37@gmail.com> 
*/

// Shorthand for $(document).ready(function({ });
$(function() {	
	// Initially hide the contact form when the page loads
	$('#testimonials-form').hide();

	// Show the form when the user clicks the button
	$('#submit-testimonial-button').on('click', function(event) {
		event.preventDefault(); // Prevent the entire page from reloading

		// Show the inner contact form
		$('#testimonials-form').fadeIn('slow');

		// Display the close button at the bottom of the form
		$('#form-close-button').addClass('fa fa-times').text(' Close');
	});
	/* For all contact form text-inputs 
		Apply flags to indicate whether the specific input has been filled

			- For empty boxes, mark with an "X"
			- For filled boxes, mark with a "check" (i.e. tick) 
	*/

	// First Name Regular Expression
	var $firstNameRegex = new RegExp(/^[a-zA-Z -]{3,16}$/);

	// First name text input
	$('#first-name').on('blur', function() {
		// First name text input value
		var $firstNameInput = $(this).val();

		/* If the first name input text-box is NOT empty AND if the first name is valid 
			(i.e. contains the necessary characters) then insert the "green tick" indicator
		*/
		if($.trim($firstNameInput).length) {
			if($firstNameRegex.test($firstNameInput)) {
				$('#first-name-flag').removeClass('fa fa-times').addClass('fa fa-check');
				$('#first-name-validation').removeClass('validation-fail').addClass('validation-pass').text(' First name is valid!');	
			}
			else { // If the first name contains illegal characters
				$('#first-name-flag').removeClass('fa fa-check').addClass('fa fa-times');
				$('#first-name-validation').removeClass('validation-pass').addClass('validation-fail').text(' First name is not valid!');
			}			
		}
		// If the input text-box is empty then insert the "red X" indicator
		else {
			$('#first-name-flag').removeClass('fa fa-check').addClass('fa fa-times');
			$('#first-name-validation').removeClass('validation-pass').addClass('validation-fail').text(' Please enter first name!');						
		}			
	});

	// Surname Regular Expression
	var $surnameRegex = new RegExp(/^[a-zA-Z -]{3,16}$/);
	
	// Surname text input
	$('#surname').on('blur', function() {
		// Surname text input value
		var $surnameInput = $(this).val();

		/* If the surname input text-box is NOT empty AND if the surname is valid 
			(i.e. contains the necessary characters) then insert the "green tick" indicator
		*/
		if($.trim($surnameInput).length) {
			if($surnameRegex.test($surnameInput)) {
				$('#surname-flag').removeClass('fa fa-times').addClass('fa fa-check');
				$('#surname-validation').removeClass('validation-fail').addClass('validation-pass').text(' Surname is valid!');	
			}
			else { // If the surname contains illegal characters
				$('#surname-flag').removeClass('fa fa-check').addClass('fa fa-times');
				$('#surname-validation').removeClass('validation-pass').addClass('validation-fail').text(' Surname is not valid!');
			}			
		}
		// If the input text-box is empty then insert the "red X" indicator
		else {
			$('#surname-flag').removeClass('fa fa-check').addClass('fa fa-times');
			$('#surname-validation').removeClass('validation-pass').addClass('validation-fail').text(' Please enter surname!');						
		}
	});

	// Email address Regular Expression
	var $emailRegex = new RegExp(/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/);	

	// Email Address input field
	$('#email').on('blur', function() {	

		// Email address input value
		var $emailInput = $(this).val();

		/* If the email input text-box is NOT empty 
			- AND if the email is valid
			(i.e. contains the necessary characters ('@', '.com,.org,etc')) then insert the "green tick" indicator
		*/		
		if($.trim($emailInput).length) {
			if($emailRegex.test($emailInput)) {
				$('#email-flag').removeClass('fa fa-times').addClass('fa fa-check');
				$('#email-validation').removeClass('validation-fail').addClass('validation-pass').text(' Email address is valid!');												
			}
			else { // If the email address DOES NOT contain necessary regex characters
				$('#email-flag').removeClass('fa fa-check').addClass('fa fa-times');
				$('#email-validation').removeClass('validation-pass').addClass('validation-fail').text(' Email address is not valid!');
			}											
		}
		// If the email input text-box is empty then insert the "red X" indicator
		else {
			$('#email-flag').removeClass('fa fa-check').addClass('fa fa-times');
			$('#email-validation').removeClass('validation-pass').addClass('validation-fail').text(' Please enter email address!');				
		}		
	});

	// Confirmed email address text input
	$('#confirm-email').on('blur', function() {

		// Confirmed email-address input value
		var $confirmEmailInput = $(this).val();

		// First email-address input value
		var $emailInput = $('#email').val();

		/* If the confirmed email input text-box is NOT empty 
				- AND if the email is valid
				- AND the two email-addresses entered do not match
			(i.e. contains the necessary characters ('@', '.com,.org,etc')) then insert the "green tick" indicator
		*/			
		if($.trim($confirmEmailInput).length) {
			if($emailRegex.test($confirmEmailInput)) {
				if($confirmEmailInput === $emailInput) {
					$('#confirm-email-flag').removeClass('fa fa-times').addClass('fa fa-check');
					$('#confirm-email-validation').removeClass('validation-fail').addClass('validation-pass').text(' Email address is valid and matches!');
				}
				else { // If the two email-addresses do not match
					$('#confirm-email-flag').removeClass('fa fa-check').addClass('fa fa-times');
					$('#confirm-email-validation').removeClass('validation-pass').addClass('validation-fail').text(' Email addresses do not match!');	
				}															
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
	var $commentsRegex = new RegExp(/^[a-zA-Z0-9?$@#()'!,+\-=_:.&€£*%\s]+$/);

	// Contact message text-area
	$('#comments').on('blur', function() {
		// Message text input
		var $commentsInput = $(this).val();

		/* If the message input text-box is NOT empty AND if the email is valid 
			(i.e. contains the necessary characters) then insert the "green tick" indicator and message
		*/
		if($.trim($commentsInput).length) {
			if($commentsRegex.test($commentsInput)) {
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
			$('#comments-validation').removeClass('validation-pass').addClass('validation-fail').text(' Please enter comment(s)!');
		}
	});
	
	// Submit button functionality
	$('#testimonials-form').on('submit', function() {
		$('#send-button').on('click', function(event) {
			event.preventDefault(); // Prevent the entire page from refreshing each time the form submits

			// Flag to indicate that the "submit" was clicked
			var $submitButtonClicked = $(this).data('clicked', true);

			// If the "submit" button was clicked
			if($submitButtonClicked) {
				$('#testimonials-form').fadeOut('slow');
			}
		});		
	});

	// Clear all input fields when the user clicks the "reset" button
	$('#reset-button').on('click', function(event) {
		event.preventDefault(); // Prevent the entire page from reloading

		// Flag to indicate that the "reset" was clicked
		var $resetButtonClicked = $(this).data('clicked', true);

		// Confirm dialogue box to ask the user to reset the form:
		var confirmReset = confirm("Are you sure you want to reset the form?");
 
		/* If the reset button was clicked then confirm that the 
			user wants to empty the fields  */
		if($resetButtonClicked) {			
			if(confirmReset) {
				$('#first-name').val("");
				$('#surname').val("");
				$('#email').val("");
				$('#confirm-email').val("");
				$('#comments').val("");

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
			}			
		}			
	});

	// Hide the form when the user clicks the "close" button
	$('#form-close-button').on('click', function(event) {
		event.preventDefault(); // Prevent the entire from reloading

		// Hide the form
		$('#testimonials-form').fadeOut('slow');
	});
});