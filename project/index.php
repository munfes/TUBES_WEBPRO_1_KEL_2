<?php 
session_start();
?>

<!DOCTYPE HTML>
<html class="no-js" lang="de">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="robots" content="index,follow">

	<title>New Hope - Tubes Webpro</title>

	<link href="../assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="../assets/css/animate.css" rel="stylesheet">
	<link href="../assets/css/bootsnav.css" rel="stylesheet">
	<link href="../assets/css/bootstrap.css" rel="stylesheet">
	<link href="../assets/css/style.css" rel="stylesheet">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-default navbar-sticky bootsnav">
		<div class="container">
			<div class="row">
				<div class="attr-nav">
					<a class="donation" href="http://localhost/donate">donate now</a>
					<a class="login" href="http://localhost/login">login</a>
				</div>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
						<i class="fa fa-bars"></i>
					</button>
					<a class="navbar-brand logo" href="http://localhost"><img src="../assets/images/logo.png"
							class="img-responsive" /></a>
				</div>
				<div class="collapse navbar-collapse" id="navbar-menu">
					<ul class="nav navbar-nav navbar-left" data-in="fadeInDown" data-out="fadeOutUp">
						<li><a href="http://localhost">Home</a></li>
						<li><a href="http://localhost/about">About Us</a></li>
						<li><a href="http://localhost/project">Projects</a></li>
						<li><a href="http://localhost/contact">Contact Us</a></li>
                        <?php 
                        if(isset($_SESSION['username'])){
                            echo '<li><a href="http://localhost/history">History</a></li>';
                        }            
                        ?>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<section id="inner-banner">
		<div class="overlay">
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<h1>PROJECTS</h1>
					</div>
					<div class="col-sm-6">
						<h6 class="breadcrumb"><a href="../index.php">Home</a> / Projects</h6>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="pro-sec">
		<div class="container">
			<div class="row text-center" style="margin-top:-30px;">

				<div class="col-sm-6 col-md-4 clearfix top-off">
					<div class="grid-image"><img src="../assets/images/test1.jpg"></div>
					<div class="post-content">
						<h3>Nepal Earthquake: Clean Water Initiative</h3>
						<hr>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua.</p>
						<a href="http://localhost/donate/" title="">Donate Now</a>
					</div>

				</div>
				<div class="col-sm-6 col-md-4 clearfix top-off">
					<div class="grid-image"><img src="../assets/images/test1.jpg"></div>
					<div class="post-content">
						<h3>Nepal Earthquake: Clean Water Initiative</h3>
						<hr>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua.</p>
						<a href="http://localhost/donate/" title="">Donate Now</a>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 clearfix top-off">
					<div class="grid-image"><img src="../assets/images/test1.jpg"></div>
					<div class="post-content">
						<h3>Nepal Earthquake: Clean Water Initiative</h3>
						<hr>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua.</p>
						<a href="http://localhost/donate/" title="">Donate Now</a>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 clearfix top-off">
					<div class="grid-image"><img src="../assets/images/test1.jpg"></div>
					<div class="post-content">
						<h3>Nepal Earthquake: Clean Water Initiative</h3>
						<hr>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua.</p>
						<a href="http://localhost/donate/" title="">Donate Now</a>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 clearfix top-off">
					<div class="grid-image"><img src="../assets/images/test1.jpg"></div>
					<div class="post-content">
						<h3>Nepal Earthquake: Clean Water Initiative</h3>
						<hr>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua.</p>
						<a href="http://localhost/donate/" title="">Donate Now</a>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 clearfix top-off">
					<div class="grid-image"><img src="../assets/images/test1.jpg"></div>
					<div class="post-content">
						<h3>Nepal Earthquake: Clean Water Initiative</h3>
						<hr>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua.</p>
						<a href="http://localhost/donate/" title="">Donate Now</a>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 clearfix top-off">
					<div class="grid-image"><img src="../assets/images/test1.jpg"></div>
					<div class="post-content">
						<h3>Nepal Earthquake: Clean Water Initiative</h3>
						<hr>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua.</p>
						<a href="http://localhost/donate/" title="">Donate Now</a>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 clearfix top-off">
					<div class="grid-image"><img src="../assets/images/test1.jpg"></div>
					<div class="post-content">
						<h3>Nepal Earthquake: Clean Water Initiative</h3>
						<hr>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua.</p>
						<a href="http://localhost/donate/" title="">Donate Now</a>
					</div>
				</div>

				<div class="col-sm-6 col-md-4 clearfix top-off">
					<div class="grid-image"><img src="../assets/images/test1.jpg"></div>
					<div class="post-content">
						<h3>Nepal Earthquake: Clean Water Initiative</h3>
						<hr>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
							labore et dolore magna aliqua.</p>
						<a href="http://localhost/donate/" title="">Donate Now</a>
					</div>
				</div>

			</div>
		</div>
	</section>

	<div class="callout">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h2>Change Their World. Change Yours. This changes everything.</h2><!-- /.callout-title -->
				</div><!-- /.columns large-6 -->

				<div class="col-md-6">
					<div class="callout-actions">
						<a href="../assets/contact.html" class="button">Become Volunteer</a>

						<span class="callout-separator">
							<span>Or</span>
						</span>

						<a href="http://localhost/donate/" class="button">Donate For Cause</a>
					</div><!-- /.callout-actions -->
				</div><!-- /.columns large-6 -->
			</div><!-- /.row -->
		</div>
	</div>

	<footer class="footer">
		<div class="footer-body">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<div class="footer-section">
							<h4 class="footer-section-title">About Charity</h4><!-- /.footer-section-title -->

							<div class="footer-section-body">
								<p>Charity is the pillow of life, and time is the day of some earth. Everyone really hates football
mourns We live a great life, basketball is not lacinia or, tell the time of life
Let's be honest.</p>
							</div><!-- /.footer-section-body -->
						</div><!-- /.footer-section -->
					</div><!-- /.columns large-3 medium-12 -->

					<div class="col-md-3">
						<div class="footer-section">
							<h4 class="footer-section-title">Quick Links</h4><!-- /.footer-section-title -->

							<div class="footer-section-body">
								<ul class="list-links">
									<li>
										<a href="http://localhost/">Home</a>
									</li>

									<li>
										<a href="http://localhost/about/">About Us</a>
									</li>
									<li>
										<a href="http://localhost/project/">Projects</a>
									</li>
									<li>
										<a href="http://localhost/contact/">Contact Us</a>
									</li>

								</ul><!-- /.list-links -->

							</div><!-- /.footer-section-body -->
						</div><!-- /.footer-section -->
					</div><!-- /.columns large-3 medium-12 -->

					<div class="col-md-3">
						<div class="footer-section">
							<h4 class="footer-section-title">Newsletter Signup</h4><!-- /.footer-section-title -->

							<div class="footer-section-body">
								<p>Select your newsletters, enter your email address, and click "Subscribe"</p>

								<div class="subscribe">
									<form action="?" method="post">
										<input type="submit" value="Go" class="subscribe-btn">

										<div class="subscribe-inner">
											<input type="email" id="mail" name="mail" value=""
												placeholder="Email Address" class="subscribe-field">
										</div><!-- /.subscribe-inner -->
									</form>
								</div><!-- /.subscribe -->
							</div><!-- /.footer-section-body -->
						</div><!-- /.footer-section -->
					</div><!-- /.columns large-3 medium-12 -->

					<div class="col-md-3">
						<div class="footer-section">
							<h4 class="footer-section-title">Contact Us</h4><!-- /.footer-section-title -->

							<div class="footer-section-body">
								<p><b>Address:</b> Telkom University, Bandung</p>

								<div class="footer-contacts">
									<p>
										<b>
											<i class="fa fa-phone"></i> Phone:
										</b>

										+628-126-666-001
									</p>

									<p>
										<b>
											<i class="fa fa-envelope-o"></i> Email:
										</b>

										info@newhope.com
									</p>
								</div><!-- /.footer-contacts -->
							</div><!-- /.footer-section-body -->
						</div><!-- /.footer-section -->
					</div><!-- /.columns large-3 medium-12 -->
				</div><!-- /.row -->
			</div>
		</div><!-- /.footer-body -->

		<div class="bwt-footer-copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-6 copyright">
						<div class="left-text">Copyright &copy; New Hope 2017. All Rights Reserved</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/bootstrap.js"></script>
	<script src="../assets/js/bootsnav.js"></script>
	<script src="../assets/js/banner.js"></script>
	<script src="../assets/js/script.js"></script>
</body>

</html>