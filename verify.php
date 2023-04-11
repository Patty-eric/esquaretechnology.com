<?php
require_once 'class.user.php';
$user = new USER();

if(empty($_GET['id']) && empty($_GET['code']))
{
    $user->redirect('index.php');
}

if(isset($_GET['id']) && isset($_GET['code']))
{
    $id = base64_decode($_GET['id']);
    $code = $_GET['code'];
    
    $statusY = "Y";
    $statusN = "N";
    $statusC = "C";
    
    $stmt = $user->runQuery("SELECT id,userStatus FROM users WHERE id=:uID AND tokenCode=:code LIMIT 1");
    $stmt->execute(array(":uID"=>$id,":code"=>$code));
    $row=$stmt->fetch(PDO::FETCH_ASSOC);
    if($stmt->rowCount() > 0)
    {
        if($row['userStatus']==$statusN ||  $statusY )
        {
            $stmt = $user->runQuery("UPDATE users SET userStatus=:status WHERE id=:uID");
            $stmt->bindparam(":status",$statusY);
            $stmt->bindparam(":status",$statusN);
            $stmt->bindparam(":uID",$id);
            $stmt->execute();   
            
            $msg = "
                   <div class='alert alert-success'>
                   <button class='close' data-dismiss='alert'>&times;</button>
                      Your Account is Now Activated : <a href='index.php'>Click Here to Log In </a>
                   </div>
                   ";   
        }
        else
        {
            $msg = "
                   <div class='alert alert-error'>
                   <button class='close' data-dismiss='alert'>&times;</button>
                      <strong>sorry !</strong>  Your Account is allready Activated : <a href='index.php'>Login here</a>
                   </div>
                   ";
        }
    }
    else
    {
        $msg = "
               <div class='alert alert-error'>
               <button class='close' data-dismiss='alert'>&times;</button>
               <strong>sorry !</strong>  No Account Found : <a href='signupcopy.php'>Signup here</a>
               </div>
               ";
    }   
}

?>
<!DOCTYPE html>
<html>
  <head>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>E-Square Technology Ltd</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

  <!-- 
    //////////////////////////////////////////////////////

    FREE HTML5 TEMPLATE 
    DESIGNED & DEVELOPED by FREEHTML5.CO
        
    Website:        http://freehtml5.co/
    Email:          info@freehtml5.co
    Twitter:        http://twitter.com/fh5co
    Facebook:       https://www.facebook.com/fh5co

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
             
             .disable{
        pointer-events: none;
        opacity: 0.5;
}
         </style>
  </head>
  <body id="login">
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
                                    <li><a href="graphic.php">Graphic Design</a></li>
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
                    
                            <li><a href="contact.php">CONTACT US</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        
    <center><p><h2>E-SQUARE TECHNOLOGY LTD</h2></p></center>
    <div class="container">
        <?php if(isset($msg)) { echo $msg; } ?>
    </div> <!-- /container -->
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

    
    <!-- Main JS -->
    <script src="js/main.js"></script>
  </body>
</html>