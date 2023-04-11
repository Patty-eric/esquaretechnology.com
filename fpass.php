$user = new USER();

if($user->is_logged_in()!="")
{
  $user->redirect('home.php');
}

if(isset($_POST['btn-submit']))
{
  $email = $_POST['txtemail'];
  
  $stmt = $user->runQuery("SELECT id FROM users WHERE userEmail=:email LIMIT 1");
  $stmt->execute(array(":email"=>$email));
  $row = $stmt->fetch(PDO::FETCH_ASSOC);  
  if($stmt->rowCount() == 1)
  {
    $id = base64_encode($row['id']);
    $code = md5(uniqid(rand()));
    
    $stmt = $user->runQuery("UPDATE users SET tokenCode=:token WHERE userEmail=:email");
    $stmt->execute(array(":token"=>$code,"email"=>$email));
    
    $message= "
           Hello , $email
           <br /><br />
           We got requested to reset your password, if you do this then just click the following link to reset your password, if not just ignore                   this email,
           <br /><br />
           Click Following Link To Reset Your Password 
           <br /><br />
           <a href='http://esquretchltd.000webhostapp.com/resetpass.php?id=$id&code=$code'>click here to reset your password</a>
           <br /><br />
           thank you :)
           ";
    $subject = "Password Reset";
    
    $user->send_mail($email,$message,$subject);
    
    $msg = "<div class='alert alert-success'>
          <button class='close' data-dismiss='alert'>&times;</button>
          We've sent an email to $email.
                    Please click on the password reset link in the email to generate new password. 
          </div>";
  }
  else
  {
    $msg = "<div class='alert alert-danger'>
          <button class='close' data-dismiss='alert'>&times;</button>
          <strong>Sorry!</strong>  this email not found. 
          </div>";
  }
}
?>

<!DOCTYPE html>
<html>
     
    <meta charset="utf-8">
    <!--meta http-equiv="X-UA-Compatible" content="IE=edge"-->
    <title>E-Square Technology Ltd</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
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
    <body style="background-image:  url(images/banner4.jpg);">
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
                                    <li><a href="about.html">Graphic Design</a></li>
                                    <li><a href="about.html">Computer Network</a></li>
                                     <li><a href="about.html">Computer Programming</a></li>
                                     <li><a href="about.html">Computer Maintenance</a></li>
                                    <li><a href="about.html">Online Services</a></li>
                                    
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
                                    <li><a href="index1.php">Join The Team</a></li>
                                    
                                </ul>
                            </li>
                    
                            <li><a href="contact.html">CONTACT US</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        
        
  </head>
   <body id="login" style="background: lightgreen">
   
    <div class="container" style="width:60%;border:1px solid blue;padding: 20px;background: white;margin-top: 20px">

      <form class="form-signin" method="post">
        <h4 class="form-signin-heading">Lost Your Password</h4><hr />
        
          <?php
      if(isset($msg))
      {
        echo $msg;
      }
      else
      {
        ?>
                <div class='alert alert-info'>
        Please enter your Email. You will receive a link to create a new password via email.!
        </div>  
                <?php
      }
      ?>
        
        <input type="email" class="form-control" placeholder="Email address" name="txtemail" required />
      <hr />

      <button class="btn btn-primary btn-lg btn-block" type="submit" name="btn-submit">Send Me !</button>
	  <label class="checkbox">
                
                <span class="pull-right"> <a href="index1.php"> Back to Log In</a></span>
            </label>
      </form>
<!--<center>Copyright <?php echo date('Y'); ?> &copy; Internship Application Web Portal System Developed By Jean de Dieu & Judith </center>-->
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

    <script src="js/google_map.js"></script>
    
    <!-- Main JS -->
    <script src="js/main.js"></script>
    
  </body>
</html>