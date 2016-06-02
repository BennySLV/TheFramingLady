<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Ensure proper rendering and touch zooming on mobile devices -->
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" />
	
	<!-- Latest compiled and minified CSS for Bootstrap-->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

	<!-- Font Awesome Library -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

	<!-- jQuery-UI library -->
	<script src="https://code.jquery.com/ui/1.12.0-rc.2/jquery-ui.js"></script>

	<!-- Latest compiled JavaScript for Bootstrap-->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="css/testimonials.css" />

	<!-- Custom JavaScript/jQuery -->
	<script type="text/javascript" src="js/testimonials.js"></script>

	<!-- Site Icon -->
	<link rel="icon" type="image/png" href="images/web-images/site-icon.png" />

	<title>Testimonials | The Framing Lady</title>
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
						<a id="home-link" href="index.php">Home</a>
						<a id="about-link" href="about.php">About</a>
						<a id="portfolio-link" href="portfolio.php">Portfolio</a>
						<a id="testimonials-link" href="testimonials.php">Testimonials</a>
						<a id="contact-link" href="contact.php">Contact</a>					
					</nav>
				</div>
			</div>
		</div>
		<div class="jumbotron">
			<div class="row">
				<div class="col-sm-12">
					<h1>Testimonials</h1>
					<p id="intro-text">Here's what some people have been saying about me. Thank you so much for the feedback!</p>
					<?php
						/* Table of Existing Testimonials */

						// Connect to the database
						require('includes/mysqli_connect.php');

						// Make the query - selects all existing testimonials from the database
						$query = "SELECT first_name, surname, comments FROM testimonials";

						// Run the query 
						$result = @mysqli_query($dbc, $query);

						// If the query ran OK
						if($result) {
							// Table header
							echo '<table id="testimonials-table">
								<tr>
									<th>Firstname</th>
									<th>Surname</th>
									<th>Comments</th>
								</tr>';

							// Fetch and print the records 
							while($row = mysqli_fetch_array($result, MYSQL_ASSOC)) {
								echo '<tr>
										<td>' . $row['first_name'] . '</td>
										<td>' . $row['surname'] . '</td>
										<td>' . $row['comments'] . '</td>
									</tr>';
							}						
						}

						// Close the table
						echo '</table><br />';

						// Free up the resources
						mysqli_free_result($result);

						// Close the database
						@mysqli_close($dbc);
					?>
					<button id="submit-testimonial-button">Submit your own testimonial here</button>
				</div>
			</div><br />
			<div class="row">
				<div class="col-sm-12">
					<form action="testimonials.php" method="post" id="testimonials-form" autocomplete="off">
						<fieldset>
							<legend id="form-instructions">Please fill in all fields:</legend>
							<div class="row">
								<div class="col-sm-4">						
									<p><input id="first-name" type="text" name="firstName" placeholder="First Name" maxlength="15" value="<?php if(isset($_POST['firstName'])) { echo $_POST['firstName']; } ?>" /></span> <span id="first-name-flag"><i aria-hidden="true"></i></span> <span id="first-name-validation"></span></p>
									<p><input id="surname" type="text" name="surname" placeholder="Surname" maxlength="20" value="<?php if(isset($_POST['surname'])) { echo $_POST['surname']; } ?>" /> <span id="surname-flag"><i aria-hidden="true"></i></span> <span id="surname-validation"></span></p>
									<p><input id="email" type="email" name="email" placeholder="Email Address" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>" /> <span id="email-flag"><i aria-hidden="true"></i></span> <span id="email-validation"></span></p>
									<p><input id="confirm-email" type="email" name="confirmEmail" placeholder="Confirm Email Address" maxlength="40" value="<?php if(isset($_POST['confirmEmail'])) { echo $_POST['confirmEmail']; } ?>"> <span id="confirm-email-flag"><i aria-hidden="true"></i></span> <span id="confirm-email-validation"></span></p>									
								</div>
								<div class="col-sm-8">
									<p><textarea cols="80" rows="8" id="comments" name="comments" placeholder="Comments..."></textarea> <span id="comments-flag"><i aria-hidden="true"></i></span> <span id="comments-validation"></span></p>
								</div>
							</div><!-- End of first row -->
							<div class="row">
								<div class="col-sm-12">
									<button id="reset-button">Reset</button>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<input type="submit" name="submit" value="Submit" id="submit-button" />
									<button id="form-close-button"><i aria-hidden="true"></i></button>
								</div>
							</div><!-- End of second row -->				
						</fieldset>						
					</form>					
					<?php 
						// PHP code for form handling

						// Check for form submission:
						if($_SERVER['REQUEST_METHOD'] == 'POST') {

							// Connect to the database
							require('includes/mysqli_connect.php');

							/* Form field Regular Expression Variables */
							$firstNameRegex = '/^[a-zA-Z -]{3,16}$/';
							$surnameRegex = '/^[a-zA-Z -]{3,16}$/';
							$emailRegex = '/^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/';
							$commentsRegex = '/^[a-zA-Z0-9?$@#()\'!,+\-=_:.&€£*%\s]+$/';

							/* If the form is filled with ALL details 
								- AND all fields contain suitable characters
								- AND the two email addressed entered match
							*/
							if(!empty($_POST['firstName']) && !empty($_POST['surname']) && !empty($_POST['email']) && !empty($_POST['confirmEmail']) && !empty($_POST['comments'])) {
								if(preg_match($firstNameRegex, $_POST['firstName']) && preg_match($surnameRegex, $_POST['surname']) && preg_match($emailRegex, $_POST['email']) && preg_match($emailRegex, $_POST['confirmEmail']) && preg_match($commentsRegex, $_POST['comments'])) {
									if($_POST['email'] === $_POST['confirmEmail']) {

										// Store all data
										$firstName = $_POST['firstName'];
										$surname = $_POST['surname'];
										$email = $_POST['email'];
										$confirmEmail = $_POST['confirmEmail'];
										$comments = $_POST['comments'];

										// Query to insert new testimonial into the database
										$query = "INSERT INTO testimonials(first_name, surname, email, comments, submission_date) VALUES('$firstName', '$surname', '$confirmEmail', '$comments', NOW())";

										// Run the query
										$result = @mysqli_query($dbc, $query);								

										// If the query ran OK
										if($result) {
											// Confirmation message
											echo '<div class="success"><p>Thank You! Your testimonial was submitted successfully! A confirmation email has been sent to <b>'. $confirmEmail . '</b>.</p></div>';

											// Email construction
											$to = $confirmEmail; // Send to the confirmed email address entered by the user in the contact form
											$subject = "The Framing Lady - Testimonial Submission Confirmation";
											$emailMessage = "Hey $firstName,\n\nThank You for submitting your testimonial!\n\nI really appreciate the feedback!\n\nKind regards, \n\nAnne-Marie Bartlett (The Framing Lady)";
											$headers = "From: am@theframinglady.com\r\n";
											$headers .= "Return-Path: am@theframinglady.com";

											// Send email
											mail($to, $subject, $emailMessage, $headers);
										}
										else { // If the query did NOT run OK
											echo '<div class="error"><p class="error-text">Sorry, we could not process your request at this time. Please try again later. If you encounter any further issues then please don\'t hesitate to <a href="contact.php">contact</a> me.</p></div>';
											// Debugging message
											echo'<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $query . '</p>';
										}								
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
							// Free up the resources
							@mysqli_free_result($result);

							// Close the database
							@mysql_close($dbc);
						} // End of form submission				
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
	</div> <!-- End of .container -->	
</body>
</html>