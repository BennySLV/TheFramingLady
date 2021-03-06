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
	<link rel="stylesheet" type="text/css" href="css/portfolio.css" />

	<!-- jQuery library CDN -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

	<!-- jQuery-UI library CDN -->
	<script src="https://code.jquery.com/ui/1.12.0-rc.2/jquery-ui.js"></script>

	<!-- Custom JavaScript/jQuery -->
	<script type="text/javascript" src="js/portfolio.js"></script>

	<!-- Site Icon -->
	<link rel="icon" type="image/png" href="images/web-images/site-icon.png" />

	<title>Portfolio | The Framing Lady</title>
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
						<a id="testimonial-link" href="testimonials.php">Testimonials</a>
						<a id="contact-link" href="contact.php">Contact</a>
						<a id="register-link" href="register.php">Register</a>
					</nav>
				</div>
			</div>
		</div>
		<div class="jumbotron">
			<div class="row">
				<div class="col-sm-12">
					<h1>Portfolio</h1>
					<p id="intro-text">Where the fun stuff is and basically, what The Framing Lady is all about!</p>
					<p>Below is some of my work from various projects. Please click on the panel below each picture for more information.</p>
				</div>
			</div>
			<div class="image-gallery">
				<div class="row">			
					<div class="col-sm-6">					
						<img class="portfolio-image" id="img-1" src="images/landscape/badminton-awards.jpg" />
						<button class="more-info-panel" id="img-1-more-info-panel">Click for more information</button>
						<div id="img-1-text-description"></div>			
						<button class="close-button" id="close-button-1"><i aria-hidden="true"></i></button>
					</div>				
					<div class="col-sm-6">
						<img class="portfolio-image" id="img-2" src="images/landscape/childrens-shoes.jpg" />
						<button class="more-info-panel" id="img-2-more-info-panel">Click for more information</button>
						<div id="img-2-text-description"></div>
						<button class="close-button" id="close-button-2"><i aria-hidden="true"></i></button>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<img class="portfolio-image" id="img-3" src="images/landscape/grandad-darts.jpg" />
						<button class="more-info-panel" id="img-3-more-info-panel">Click for more information</button>
						<div id="img-3-text-description"></div>
						<button class="close-button" id="close-button-3"><i aria-hidden="true"></i></button>
					</div>
					<div class="col-sm-6">
						<img class="portfolio-image" id="img-4" src="images/landscape/ship-captain.jpg" />
						<button class="more-info-panel" id="img-4-more-info-panel">Click for more information</button>
						<div id="img-4-text-description"></div>
						<button class="close-button" id="close-button-4"><i aria-hidden="true"></i></button>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<img class="portfolio-image" id="img-5" src="images/landscape/medals.jpg" />
						<button class="more-info-panel" id="img-5-more-info-panel">Click for more information</button>
						<div id="img-5-text-description"></div>
						<button class="close-button" id="close-button-5"><i aria-hidden="true"></i></button>
					</div>
					<div class="col-sm-6">
						<img class="portfolio-image" id="img-6" src="images/landscape/pebbles-frame.jpg" />
						<button class="more-info-panel" id="img-6-more-info-panel">Click for more information</button>
						<div id="img-6-text-description"></div>
						<button class="close-button" id="close-button-6"><i aria-hidden="true"></i></button>
					</div>
				</div>
			</div> <!-- End of .image-gallery -->
			<h2>Videos</h2>
			<p>Also check out my videos, showcasing my additional work, additional tips for picture-framing and much more:</p>
			<div class="video-gallery">
				<div class="row">
					<div class="col-sm-4">						
						<iframe id="video-1" width="350" height="350" src="https://www.youtube.com/embed/-gZUHlCnm9A" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="col-sm-4">
						<iframe id="video-2" width="350" height="350" src="https://www.youtube.com/embed/oW_pYF2cUAM" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="col-sm-4">
						<iframe id="video-3" width="350" height="350" src="https://www.youtube.com/embed/cSGgeduMuXQ" frameborder="0" allowfullscreen></iframe>
					</div>					
				</div> <!-- End of first .video-gallery row -->
				<div class="row">
					<div class="col-sm-4">
						<iframe id="video-4" width="350" height="350" src="https://www.youtube.com/embed/yBT5bSQHY0E" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="col-sm-4">
						<iframe id="video-5" width="350" height="350" src="https://www.youtube.com/embed/a3rN0sKy-YE" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="col-sm-4">
						<iframe id="video-6" width="350" height="350" src="https://www.youtube.com/embed/iA4KOz68IZQ" frameborder="0" allowfullscreen></iframe>
					</div>
				</div> <!-- End of second .video-gallery row -->
				<div class="row">
					<div class="col-sm-4">
						<iframe id="video-7" width="350" height="350" src="https://www.youtube.com/embed/BKsk7l47R9g" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="col-sm-4">
						<iframe id="video-8" width="350" height="350" src="https://www.youtube.com/embed/Vn8EL3HbsR0" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="col-sm-4">
						<iframe id="video-9" width="350" height="350" src="https://www.youtube.com/embed/8dtitER5VmY" frameborder="0" allowfullscreen></iframe>
					</div> <!-- End of third .video-gallery row -->
				</div> 
			</div> <!-- End of .video-gallery -->
			<div class="row">
				<div class="col-sm-12">
					<h3>Still not enough?!</h3>
					<p>If you want to see more work from me then please don't hesitate to <a href="contact.php">contact</a> me.
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