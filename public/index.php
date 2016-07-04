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
	<link rel="stylesheet/less" type="text/css" href="css/index.less" />

	<!-- LESS CDN -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.js"></script>

	<!-- jQuery library CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

	<!-- jQuery-UI library CDN -->
	<script src="https://code.jquery.com/ui/1.12.0-rc.2/jquery-ui.js"></script>

	<!-- Site Icon -->
	<link rel="icon" type="image/png" href="images/web-images/site-icon.png" />

	<title>Home | The Framing Lady</title>
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
				<div class="col-sm-6">
					<img src="images/web-images/the-framing-lady-logo.png" />
					<p id="intro-text">Welcome to <i>The Framing Lady</i> website!</p>
					<img id="intro-image" src="images/web-images/hqdefault.jpg" />
					<p id="intro-text">Need high-quality picture-framing for your special moment? You've come to the right place!</p>
				</div>
				<div class="col-sm-6" id="main-text">
					<p>Bespoke picture framing for Holwell and the surrounding areas.</p>
					<p>I specialise in the following areas:</p>
					<ul>
						<li>Canvas Stretching</li>
						<li>Digital Photo Framing</li>
						<li>Diplomas, Certificates and Documents</li>
						<li>Sports clothing and memorabilia</li>
						<li>Artwork and Paintings</li>
						<li>Needlework</li>
					</ul>
					<p>For more information about The Framing Lady, please check out the <a href="about.php">about</a> page.</p>
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