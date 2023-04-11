
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>esquare &mdash; technology ltd</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" type="image/ico" href="images/logo.jpg" />

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
<style>
    .map-responsive{

    overflow:hidden;

    padding-bottom:56.25%;

    position:relative;

    height:0;
    

}

.map-responsive iframe{

    left:0;

    top:0;

    height:100%;

    width:100%;

    position:absolute;

}
</style>
    <script type="text/javascript">
        function disableBack() { window.history.forward(); }
        setTimeout("disableBack()", 0);
        window.onunload = function () { null };
    </script>
	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 text-left fh5co-link">
						<a href="#">FAQ</a>
						<a href="#">Forum</a>
						<a href="#">Contact</a>
					</div>
					<div class="col-md-6 col-sm-6 text-right fh5co-social">
						<a href="#" class="grow"><i class="icon-facebook2"></i></a>
						<a href="#" class="grow"><i class="icon-twitter2"></i></a>
						<a href="#" class="grow"><i class="icon-instagram2"></i></a>
					</div>
				</div>
			</div>
		</div>
		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.html">ESQUARE TECH</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li class="active">
								<a href="index.php">HOME</a>
							</li>
							
							<li>
								<a href="#" class="fh5co-sub-ddown">SERVICES</a>
								 <ul class="fh5co-sub-menu">
								 	<li><a href="graphicdesign.php">Graphic Design</a></li>
								 	<li><a href="network.php">Computer Network</a></li>
									 <li><a href="programming.php">Computer Programming</a></li>
									 <li><a href="maintenance.php">Computer Maintenance</a></li>
								 	<li><a href="online.php">Online Services</a></li>
								 	
								</ul>
							</li>
							<li><a href="#" class="fh5co-sub-ddown">ABOUT US</a>
								<ul class="fh5co-sub-menu">
									<li><a href="#">What About</a></li>
									<li><a href="ourteam.html">Leadership</a></li>
									<li><a href="#">Our Workshops</a></li></ul>

							</li>
							<li>
								<a href="#" class="fh5co-sub-ddown">GET INVOLVED</a>
								<ul class="fh5co-sub-menu">
									<li><a href=".admin/">Became Dealer</a></li>
									<li><a href="registration.php">Join The Team</a></li>
									
								</ul>
							</li>
					
					<!--reserved for othe link-->
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
		

		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/call.jpg);">
				<div class="desc animate-box">
					<div class="tech">
					<strong>We are here </strong> to support you <strong>24 hours</strong>
					<span>Contact us to get more</span>
				</div>
					<span><a class="btn btn-primary btn-lg" href="index1.php">Join Us</a></span>
				</div>
			</div>

		</div>
		


		
		<div id="fh5co-contact" class="animate-box">
			<div class="container">
				<form method="POST">
				     <?php
              $con = mysqli_connect("localhost", "id17828412_esquaretech", "Nibishaka@123");
              mysqli_select_db($con, "id17828412_esquare");
              if (isset($_REQUEST["save"])) {
                $name = $_REQUEST["name"];
                $email = $_REQUEST["email"];
                $message = $_REQUEST["message"];
                $query = mysqli_query($con, "INSERT INTO contact(names,email,message) values('$name','$email','$message')");
                if ($query) {
                  echo "<button class='btn-primary fixed-buttom'>Thank you for your comment,soon we reply in your email</button>";
                }
                else{
                       echo "<button class='btn-warning fixed-buttom'> Data not saved </button>";
                }
                }
              
              ?>
					<div class="row">
						<div class="col-md-6">
							<h3 class="section-title">Our Address</h3>
							<p>Kigali Rwanda /Nyarugenge District Kimisagara Youth center near zagnut restaurent</p>
							<ul class="contact-info">
								<li><i class="icon-location-pin"></i>Kigali  NK 210</li>
								<li><i class="icon-phone2"></i>+250783434006</li>
								<li><i class="icon-mail"></i><a href="#">esquaretechnology802@gmail.com</a></li>
								<li><i class="icon-globe2"></i><a href="https://esquretchltd.000webhostapp.com/">Visit </a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Name" name="name" required="required">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" class="form-control" placeholder="Email" name="email" required="required" >
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="message" required="requird" class="form-control" id="" cols="30" rows="7" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" name="save" value="Send Message" class="btn btn-primary">
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- END fh5co-contact -->
		<div class="map-responsive"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3987.5141749933914!2d30.0484754142781!3d-1.947318137252498!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x19dca43b95490c0d%3A0xd3333ae1c55fd619!2sKimisagara%20Youth%20Centre!5e0!3m2!1sen!2srw!4v1638791611684!5m2!1sen!2srw" width="1000" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
		<!-- END map -->

		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p class="fh5co-social-icons">
								<a href="#"><i class="icon-twitter2"></i></a>
								<a href="#"><i class="icon-facebook2"></i></a>
								<a href="#"><i class="icon-instagram"></i></a>
								<a href="#"><i class="icon-dribbble2"></i></a>
								<a href="#"><i class="icon-youtube"></i></a>
							</p>
							<p>Copyright 2021 <a href="#">esquaretechnology</a>. All Rights Reserved. </p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>

	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>

	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>
