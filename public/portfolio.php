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

	<!-- Latest compiled JavaScript for Bootstrap-->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="../css/portfolio.css" />

	<!-- Custom JavaScript/jQuery -->
	<script type="text/javascript" src="../js/portfolio.js"></script>

	<!-- Site Icon -->
	<link rel="icon" type="image/png" href="../images/web-images/site-icon.png">

	<title>Portfolio | The Framing Lady</title>
</head>
<body>
	<div class="container">
		<div class="page-header">
			<div class="row">
				<div class="col-sm-4">
					<!-- Logo -->
					<a href="index.php"><img src="../images/web-images/the-framing-lady-logo.jpg"></a>
				</div>
				<div class="col-sm-8">
					<span id="slogan">Making Your Art Sing</span>
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
				<div class="col-sm-12">
					<h1>Portfolio</h1>
					<p>Where the fun stuff is!</p>
					<p>Below is some of my work from various projects. Please click on each picture for more information.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<a href="#"><img class="image" id="img-1" src="../images/landscape/badminton-awards.jpg" /></a>
				</div>
				<div class="col-sm-6">
					<a href="#"><img class="image" id="img-2" src="../images/landscape/childrens-shoes.jpg"  /></a>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<a href="#"><img class="image" id="img-3" src="../images/landscape/grandad-darts.jpg" /></a>
				</div>
				<div class="col-sm-6">
					<a href="#"><img class="image" id="img-4" src="../images/landscape/ship-captain.jpg"/></a>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6">
					<a href="#"><img class="image" id="img-5" src="../images/landscape/medals.jpg" /></a>
				</div>
				<div class="col-sm-6">
					<a href="#"><img class="image" id="img-6" src="../images/landscape/pebbles-frame.jpg" /></a>
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
			</div> <!-- End of #social-media -->
			<br />									
			<div class="row">
				<div class="col-sm-8">
					<p id="copyright">&copy; The Framing Lady <?php echo date('Y'); ?></p>
				</div>
				<div class="col-sm-4" id="credits">
					<p>Website designed and developed by <a href="http://www.bensilveston.com" target="_blank">Ben Silveston</a></p>
					<p>Photography provided by <a href="http://www.natcowan.com" target="_blank">Nat Cowan</a></p>
				</div>		
			</div>							
		</div> <!-- End of .panel panel-footer -->
	</div> <!-- End of .container -->	
</body>
</html>