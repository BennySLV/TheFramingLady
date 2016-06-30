<!DOCTYPE html>
<html lang="en">
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
	<link rel="stylesheet/less" type="text/css" href="css/contact.less" />

	<!-- LESS CDN -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>

	<!-- jQuery library CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

	<!-- jQuery-UI library CDN -->
	<script src="https://code.jquery.com/ui/1.12.0-rc.2/jquery-ui.js"></script>

	<!-- Custom JavaScript/jQuery -->
	<script type="text/javascript" src="js/contact.js"></script>

	<!-- Site Icon -->
	<link rel="icon" type="image/png" href="images/web-images/site-icon.png" />

	<title>Contact | The Framing Lady</title>
</head>
<body>
	<div class="container">
		<div class="page-header">		
			<div class="row">
				<div class="col-sm-4">
				<!-- Logo -->
					<a href="index.php"><img src="images/web-images/the-framing-lady-logo.jpg" /></a>
				</div>
				<div class="col-sm-8">
					<span id="slogan">makes your ART sing!</span>
				</div>					
				</div>				
			<div class="row">
				<div class="col-sm-12">
					<nav id="menu">
						<a id="home-link" href="index.php">Home</a>
						<a id="about-link" href="about.php">About</a>
						<a id="portfolio-link" href="portfolio.php">Portfolio</a>
						<a id="testimonial-link" href="testimonials.php">Testimonials</a>
						<a id="contact-link" href="contact.php">Contact</a>
						<!-- <a id="sign-in-link" href="sign_in.php">Sign In</a> -->
					</nav>
				</div>
			</div>
		</div>
		<div class="jumbotron">
			<div class="row">
				<div class="col-sm-6">
					<h1>Contact</h1>
					<p id="intro-text">Let's communicate!</p>
					<p>Tel: 01462 713388</p>
					<p>Email: <a href="mailto:am@theframinglady.com?Subject=Hello%20The%20Framing%20Lady" target="top">am@theframinglady.com</a></p>
					<h3>Address:</h3>
					<p id="address">3 St. Peter's Green,<br />Holwell,<br />Hitchin,<br />Hertfordshire,<br />SG5 3SW<br />United Kingdom
					</p><br />					
				</div>
				<div class="col-sm-6">
					<button id="contact-form-button">Open contact form</button>
					<form id="contact-form" action="contact.php" method="post" autocomplete="off">
						<fieldset> 
						<legend id="form-instructions">Please fill in <b>all</b> fields:</legend>
						<div class="row">
							<div class="col-sm-6">	
								<p><input id="first-name" type="text" name="firstName" placeholder="First Name" value="<?php if(isset($_POST['firstName'])) { echo $_POST['firstName'];} ?>" /> <span id="first-name-flag"><i aria-hidden="true"></i></span> <span id="first-name-validation"></span><p>
								<p><input id="surname" type="text" name="surname" placeholder="Surname" value="<?php if(isset($_POST['surname'])) echo $_POST['surname']; ?>" /> <span id="surname-flag"><i aria-hidden="true"></i></span> <span id="surname-validation"></span></p>
								<p><input id="email" type="email" name="email" placeholder="Email Address" value="<?php if(isset($_POST['email'])) { echo $_POST['email'];} ?>" /> <span id="email-flag"><i aria-hidden="true"></i></span> <span id="email-validation"></span></p>
								<p><input id="confirm-email" type="email" name="confirmEmail" placeholder="Confirm Email Address" /> <span id="confirm-email-flag"><i aria-hidden="true"></i></span> <span id="confirm-email-validation"></span></p>	
							</div>
							<div class="col-sm-6">
								<p><textarea cols="28" rows="7" id="message" name="message" placeholder="Message..."></textarea> <span id="message-flag"><i aria-hidden="true"></i></span> <span id="message-validation"></span></p>		
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<button id="reset-button">Reset</button>
							</div>
						</div> 
						<div class="row">
							<div class="col-sm-12">
								<input type="submit" name="submit" value="Send" id="send-button" />		
								<button id="form-close-button"><i aria-hidden="true"></i></button>
							</div>		
						</div>							
						</fieldset>						
					</form>
					<br />		
					<?php 
						// Check for form submission:
						if($_SERVER['REQUEST_METHOD'] == 'POST') {

							/* Form field Regular Expression Variables */
							$firstNameRegex = '/^[a-zA-Z -]{3,16}$/';
							$surnameRegex = '/^[a-zA-Z -]{3,16}$/';
							$emailRegex = '/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/';
							$messageRegex = '/^[a-zA-Z0-9?$@#()\'!,+\-=_:.&€£*%\s]+$/';

							/* If the form is filled with ALL details 
								- AND all fields contain suitable characters
								- AND the two email addressed entered match
							*/
							if(!empty($_POST['firstName']) && !empty($_POST['surname']) && !empty($_POST['email']) && !empty($_POST['confirmEmail']) && !empty($_POST['message'])) {
								if(preg_match($firstNameRegex, $_POST['firstName']) && preg_match($surnameRegex, $_POST['surname']) && preg_match($emailRegex, $_POST['email']) && preg_match($emailRegex, $_POST['confirmEmail']) && preg_match($messageRegex, $_POST['message'])) {
									if($_POST['email'] === $_POST['confirmEmail']) {

										// Store all data
										$firstName = $_POST['firstName'];
										$surname = $_POST['surname'];
										$email = $_POST['email'];
										$confirmEmail = $_POST['confirmEmail'];
										$message = $_POST['message'];

										// Confirmation message
										echo '<div class="success"><p>Thank You! Your message was sent successfully! A confirmation email has been sent to <b>'. $confirmEmail . '</b>.</p></div>';

										// Email construction
										$to = $confirmEmail; // Send to the confirmed email address entered by the user in the contact form
										$subject = "The Framing Lady - Contact Form Submission Confirmation";
										$emailMessage = "Hey $firstName,\n\nThank You for submitting your message!\n\nI will get back to you as soon as possible.\n\nKind regards, \n\nAnne-Marie Bartlett (The Framing Lady)";
										$headers = "From: am@theframinglady.com\r\n";
										$headers .= "Return-Path: am@theframinglady.com";

										// Send email
										mail($to, $subject, $emailMessage, $headers);
									}
									else { // If the two email addresses entered do not match
										echo '<div class="error"><p class="error-text">Sorry, we could not process your request at this time. Please check that the two email-addresses entered match.</p></div>';
									}									
								}
								else { // If any field is invalid (i.e. contains any illegal characters)
									echo '<div class="error"><p class="error-text">Sorry, we could not process your request at this time. Please check that all fields contain valid data before submitting.</p></div>';
								}																 
							}
							else { // If any fields are not filled 
								echo '<div class="error"><p class="error-text">Sorry, we could not process your request at this time. Please check if you have filled all the form fields as required.</p></div>';
							}
						} // End of form submission
					?>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<iframe id="business-location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2457.1690382938878!2d-0.30633854848704095!3d51.985572583349274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876348e965f130b%3A0x95589353ab32e856!2s3+St+Peters+Green%2C+Holwell%2C+Hitchin%2C+Hertfordshire+SG5+3SW!5e0!3m2!1sen!2suk!4v1463146929792" frameborder="0" style="border:0" allowfullscreen>
						</iframe>
					</div>
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
	</div> <!-- End of .container -->	
</body>
</html>