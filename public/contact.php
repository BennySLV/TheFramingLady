<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Ensure proper rendering and touch zooming on mobile devices -->
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1" />
	
	<!-- Latest compiled and minified CSS for Bootstrap -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

	<!-- Font Awesome Library -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
	
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

	<!-- jQuery-UI library -->
	<script src="https://code.jquery.com/ui/1.12.0-rc.2/jquery-ui.js"></script>

	<!-- Google Maps API -->
	<script src="http://maps.googleapis.com/maps/api/js"></script>

	<!-- Latest compiled JavaScript for Bootstrap -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="css/contact.css" />

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
					<p>Email: <a href="mailto:bsilveston37@gmail.com?Subject=Hello%20The%20Framing%20Lady" target="top">am@theframinglady.com</a></p>
					<h3>Address:</h3>
					<p id="address">3 St. Peter's Green,<br />Holwell,<br />Hitchin,<br />Hertfordshire,<br />SG5 3SW<br />United Kingdom
					</p><br />					
				</div>
				<div class="col-sm-6">
					<button id="contact-form-button">Click to open contact form</button>
					<form action="contact.php" method="post" id="contact-form" autocomplete="off">
						<fieldset id="contact-form-inner"> 
						<legend>Please fill in all fields:</legend>	
							<p><input id="first-name" type="text" name="firstName" placeholder="First Name" /></span> <span id="first-name-flag"><i aria-hidden="true"></i></span> <span id="first-name-validation"></span><p>
							<p><input id="surname" type="text" name="surname" placeholder="Surname" /> <span id="surname-flag"><i aria-hidden="true"></i></span> <span id="surname-validation"></span></p>
							<p><input id="email" type="email" name="email" placeholder="Email Address" /> <span id="email-flag"><i aria-hidden="true"></i></span> <span id="email-validation"></span></p>
							<p><input id="confirm-email" type="email" name="confirmEmail" placeholder="Confirm Email Address"> <span id="confirm-email-flag"><i aria-hidden="true"></i></span> <span id="confirm-email-validation"></span></p>
							<p><textarea cols="27" rows="10" id="message" name="message" placeholder="Message..."></textarea> <span id="message-flag"><i aria-hidden="true"></i></span> <span id="message-validation"></span></p>
							<input type="submit" name="submit" value="Send" id="submit-button" />
							<button id="form-close-button"><i aria-hidden="true"></i></button>
						</fieldset>						
					</form>		
					<?php 
						// PHP code for form handling
						//echo "<br />Hello World";											
					?>
					<br />
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
					<a href="mailto:bsilveston37@gmail.com?Subject=Hello%20The%20Framing%20Lady"><i class="fa fa-envelope-square" id="email-icon" aria-hidden="true"></i></a>
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