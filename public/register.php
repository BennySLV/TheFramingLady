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
	<link rel="stylesheet/less" type="text/css" href="css/register.less" />

	<!-- LESS CDN -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>

	<!-- jQuery library CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

	<!-- jQuery-UI library CDN -->
	<script src="https://code.jquery.com/ui/1.12.0-rc.2/jquery-ui.js"></script>

	<!-- Custom JavaScript/jQuery -->
	<script type="text/javascript" src="js/register.js"></script>

	<!-- Site Icon -->
	<link rel="icon" type="image/png" href="images/web-images/site-icon.png" />

	<title>Register | The Framing Lady</title>
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
					<h1>Register</h1>
					<h4>Welcome to The Framing Lady Club!</h4><br />
					<p>To register, please fill in the following form.</p>
				</div>
				<div class="col-sm-6">
					<form id="register-form" action="register_result.php" method="post" autocomplete="off">
						<legend id="form-instructions">Please fill in <b>all</b> fields</legend>
						<fieldset>
						<div class="row">
							<div class="col-sm-6">								
								<p><input id="first-name" type="text" name="firstName" placeholder="First Name" value="<?php if(isset($_POST['firstName'])) { echo $_POST['firstName']; } ?>" /> <span id="first-name-flag"><i aria-hidden="true"></i></span> <span id="first-name-validation"></span></p>
								<p><input id="surname" type="text" name="surname" placeholder="Surname" value="<?php if(isset($_POST['surname'])) { echo $_POST['surname']; } ?>" /> <span id="surname-flag"><i aria-hidden="true"></i></span> <span id="surname-validation"></span></p>
								<p><input id="email" type="email" name="email" placeholder="Email Address" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>" /> <span id="email-flag"><i aria-hidden="true"></i></span> <span id="email-validation"></span></p>	
							</div>
							<div class="col-sm-6">														
								<p><input id="password" type="password" name="password" placeholder="Password" /> <span id="password-flag"><i aria-hidden="true"></i></span> <span id="password-validation"></span></p>
								<p><input id="confirm-password" type="password" name="confirmPassword" placeholder="Confirm Password" /> <span id="confirm-password-flag"><i aria-hidden="true"></i></span> <span id="confirm-password-validation"></span></p>
							</div>
						</div> 														
						<div class="row">
							<div class="col-sm-12">
								<button id="reset-button">Reset</button><br />
								<input type="submit" name="submit" value="Register" id="submit-button" />
							</div>		
						</div>
						</fieldset>
					</form><br />
				</div>
				<div class="row">
					<div class="col-sm-12">
						<!-- <p>Already have an account? Then please <a href="sign_in.php">sign-in</a> here.</p> -->
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