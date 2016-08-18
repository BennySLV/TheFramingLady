<!DOCTYPE html>
<html>
<head>
	<!-- Ensure proper rendering and touch zooming on mobile devices -->
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" />
	
	<!-- Latest compiled and minified CSS for Bootstrap -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

	<!-- Latest compiled JavaScript for Bootstrap -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<!-- Font Awesome Library -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />

	<!-- Custom CSS/LESS -->
	<link rel="stylesheet" type="text/css" href="css/register.css" />

	<!-- jQuery library CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

	<!-- jQuery-UI library CDN -->
	<script src="https://code.jquery.com/ui/1.12.0-rc.2/jquery-ui.js"></script>

	<!-- Site Icon -->
	<link rel="icon" type="image/png" href="images/web-images/site-icon.png" />
	<title>Registration - Result | The Framing Lady</title>
</head>
<body>
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-4">
					<!-- Logo -->
					<a href="index.php"><img src="images/web-images/the-framing-lady-logo.png" /></a>
				</div>
				<div class="col-sm-8">
					<span id="slogan">makes your ART sing!</span>
				</div>					
			</div>				
			<div class="row">
				<div class="col-sm-12">
					<nav id="menu">
						<a id="index-link" href="index.php">Home</a>
						<a id="about-link" href="about.php">About</a>
						<a id="portfolio-link" href="portfolio.php">Portfolio</a>
						<a id="testimonial-link" href="testimonials.php">Testimonials</a>
						<a id="contact-link" href="contact.php">Contact</a>
						<a id="register-link" href="register.php">Register</a>
					</nav>
				</div>
			</div>
		</div> <!-- End of .page-header -->
		<div class="jumbotron">
			<div class="row">
				<div class="col-sm-12">
					<h1>Registration Result</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<?php
					/* Form handling for the register form */

					// Check for form submission
					if($_SERVER['REQUEST_METHOD'] == 'POST') {
						// Connect to the database
						require 'includes/mysqli_connect.php';

						// Form field Regular Expressions
						$firstNameRegex = '/^[a-zA-Z -]{3,16}$/';
						$surnameRegex = '/^[a-zA-Z -]{3,16}$/';
						$dobRegex = '/^[0-3]?[0-9].[0-3]?[0-9].(?:[0-9]{2})?[0-9]{2}$/';
						$emailRegex = '/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/';
						$passwordRegex = '/^[a-z0-9_-]{6,18}$/';

						/* If the form is filled with ALL details 
							- AND all fields contain suitable characters
							- AND the two email addressed entered match
						*/
						if(!empty($_POST['firstName']) && !empty($_POST['surname']) && !empty($_POST['date_of_birth']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirmPassword'])) {
							if(preg_match($firstNameRegex, $_POST['firstName']) && preg_match($surnameRegex, $_POST['surname']) && preg_match($dobRegex, $_POST['date_of_birth']) && preg_match($emailRegex, $_POST['email']) && preg_match($passwordRegex, $_POST['password']) && preg_match($passwordRegex, $_POST['confirmPassword'])) {
								if($_POST['password'] === $_POST['confirmPassword']) {
									// Store all data entered
									$firstName = $_POST['firstName'];
									$surname = $_POST['surname'];
									$dateofBirth = $_POST['date_of_birth'];
									$email = $_POST['email'];
									$password = $_POST['password'];
									$confirmPassword = $_POST['confirmPassword'];

									// Query to check for registered user
									$selectUserQuery = "SELECT id FROM users WHERE email = '$email'";
									$selectUserQueryResult = $dbc->query($selectUserQuery);

									// If the user has NOT registered before
									if($selectUserQueryResult->num_rows == 0) {
										// Query to add new user to the database
										$addUserQuery = "INSERT INTO users(first_name, surname, date_of_birth, email, pass, registration_date) VALUES('$firstName', '$surname', '$dateofBirth', '$email', SHA1('$confirmPassword'), NOW())";

										// Run the query:
										$addUserQueryResult = $dbc->query($addUserQuery);

										// If the query ran OK
										if($selectUserQueryResult) {
											// Confirmation message
											echo '<div class="success"><p>Thank You! You have registered successfully! A confirmation email has been sent to <b>'. $email . '</b>.</p></div>';

											// Email construction
											$to = $email; // Send to the confirmed email address entered by the user in the contact form
											$subject = "The Framing Lady - You are now registered!";
											$emailMessage = "Hey $firstName,\n\nThank You for registering!\n\nYou are now a member of The Framing Lady club!\n\nKind regards, \n\nAnne-Marie Bartlett (The Framing Lady)";
											$headers = "From: am@theframinglady.com\r\n";
											$headers .= "Return-Path: am@theframinglady.com";

											// Send email
											mail($to, $subject, $emailMessage, $headers);

										}
										else { // If the query did NOT run OK
											echo '<div class="error"><p class="error-text">Sorry, we could not process your request at this time. Please try again later. If you encounter any further issues then please don\'t hesitate to <a href="contact.php">contact</a> me.</p></div>';
										}
									}
									// If the user has already registered, indicate error message and redirect to sign-in page
									else {
										echo '<p>Our records indicate that you are already registered with us.</p>
										<p>Please <a href="sign_in.php">sign-in</a> as normal.</p>';
									}				 
									
								}
								// If both passwords entered DO NOT match
								else {
									echo '<div class="error"><p class="error-text">Sorry, we could not process your request at this time. Please check that the two passwords entered match.</p></div>';
								}
							}
							// If any field data contains illegal characters
							else {
								echo '<div class="error"><p class="error-text">Sorry, we could not process your request at this time. Please check that all fields contain valid data before submitting.</p></div>';
							}
						}
						// If any fields are empty
						else {
							echo '<div class="error"><p class="error-text">Sorry, we could not process your request at this time. Please check that you have filled all the form fields as required.</p></div>';
						}

						// Close the database
						$dbc->close();
						unset($dbc);
					}
					?>
				</div>
			</div>
		</div> <!-- End of .jumbotron -->
		<div class="panel panel-footer">
			<div class="row" id="social-media">
				<div class="col-sm-12">
					<a href="https://www.facebook.com/TheFramingLady/" target="_blank"><i class="fa fa-facebook-square" id="facebook-icon" aria-hidden="true"></i></a>
					<a href="https://twitter.com/theframinglady" target="_blank"><i class="fa fa-twitter-square" id="twitter-icon" aria-hidden="true"></i></a>
					<a href="https://uk.linkedin.com/in/theframinglady" target="_blank"><i class="fa fa-linkedin-square" id="linkedin-icon" aria-hidden="true"></i></a>
					<a href="https://uk.pinterest.com/theframinglady/" target="_blank"><i class="fa fa-pinterest-square" id="pinterest-icon" aria-hidden="true"></i></a>
					<a href="mailto:am@theframinglady.com?Subject=Hello%20The%20Framing%20Lady"><i class="fa fa-envelope-square" id="email-icon" aria-hidden="true"></i></a>
				</div>
			</div><br />									
			<div class="row">
				<div class="col-sm-8">
					<p id="copyright">&copy; The Framing Lady <?php echo date('Y'); ?></p>
				</div>
				<div class="col-sm-4" id="credits">
					<p>Website designed and developed by <a href="http://www.bensilveston.com" target="_blank">Ben Silveston</a></p>
				</div>		
			</div>							
		</div> <!-- End of .panel panel-footer -->
	</div> <!-- End of .container-->	
</body>
</html>