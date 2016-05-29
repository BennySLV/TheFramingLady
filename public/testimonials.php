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
					<table id="testimonials-table">
					<!-- Dummy data - to be dynamically created in the future -->
						<tr>
							<th>Firstname</th>
							<th>Surname</th>
							<th>Comments</th>
						</tr>
						<tr>
							<td>Mark</td>
							<td>Bartlett</td>
							<td>Excellent service and a real eye for detail. Obvious that she really loves her job and her clients. Price was very reasonable too.</td>
						</tr>
						<tr>
							<td>Nat</td>
							<td>Cowan</td>
							<td>A fantastic service! Very much love my framed photo. Anne-Marie is a fantastic individual. I owe her a pint!</td>
						</tr>
						<tr>
							<td>Ben</td>
							<td>Silveston</td>
							<td>A great service! Anne-Marie understood my requirements straight away and delivered the work to a very high standard. Exactly what I was looking for. I can't recommend her highly enough.</td>
						</tr>
					</table><br />
					<button id="submit-testimonial-button">Submit your own testimonial here</button>
				</div>
			</div><br />
			<div class="row">
				<div class="col-sm-12">
					<form action="testimonials.php" method="post" id="testimonials-form" autocomplete="off">
						<fieldset>
							<legend>Please fill in all fields:</legend>
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
									<input type="submit" name="submit" value="Submit" id="submit-button" />
									<button id="form-close-button"><i aria-hidden="true"></i></button>
								</div>
							</div><!-- End of second row -->																
						</fieldset>						
					</form>					
					<?php 
						// PHP code for form handling - to be inserted soon					
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