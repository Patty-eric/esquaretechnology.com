<?php

session_start();
require_once 'class.user.php';
$reg_user = new USER();

if($reg_user->is_logged_in()!="")
{
    $reg_user->redirect('dashboard.php');
}

if(isset($_POST['btn-signup']))
{ 
    move_uploaded_file($_FILES["proven_experience"]["tmp_name"],"images/upload/" . $_FILES["proven_experience"]["name"]);
    $fname=($_POST['fname']);
    $lname=($_POST['lname']);
    $contact=($_POST['phone']);
    $uname = "";
    $rec=$_FILES["proven_experience"]["name"];
    $email = ($_POST['txtemail']);
    $upass =($_POST['txtpass']);
    $education_level=($_POST['education_level']);
    $field_of_study=($_POST['field_of_study']);
    $programming=($_POST['radio']);
    $programming_lang=implode(',', $_POST['checkbox']);   
    $other_familiar_with=($_POST['familia']);
    $experience=($_POST['experience']);
     $expected_salary=($_POST['expected_salary']);
    $code = md5(uniqid(rand()));
    
   
// Check if image file is a actual image or fake image
    $stmt = $reg_user->runQuery("SELECT * FROM users WHERE userEmail=:email_id");
    $stmt->execute(array(":email_id"=>$email));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if($stmt->rowCount() > 0)
    {
        $msg = "
              <div class='alert alert-error'>
                <button class='close' data-dismiss='alert'>&times;</button>
                    <strong>Sorry !</strong>  email allready exists , Please Try another one
              </div>
              ";
    }
    else
    {
        if($reg_user->register($fname,$lname,$contact,$uname,$email,$upass,$education_level,$field_of_study,$programming,$programming_lang,$other_familiar_with,$experience,$rec,$expected_salary,$code))
        {           
            $id = $reg_user->lasdID();      
            $key = base64_encode($id);
            $id = $key;
            
            $message = "                    
                        Hello $uname,
                        <br /><br />
                        Welcome To E-Square Technology Rwanda Ltd Company<br/>
                        <img src='http://esquretchltd.000webhostapp.com/images/logo.jpg'/>
                        <br /><br />
                        <a href='http://esquretchltd.000webhostapp.com/verify.php?id=$id&code=$code'>Click Here to Activate Your Account :)</a>
                        <br />
                        Thanks,";
                        
            $subject = "Confirm Registration";
                        
            $reg_user->send_mail($email,$message,$subject); 
            $msg = "
                    <div class='alert alert-success'>
                        <button class='close' data-dismiss='alert'>&times;</button>
                        <strong>Success!</strong>  We've sent an email to $email.
                    Please click on the confirmation link in the email to create your account. 
                    </div>
                    ";
        }
        else
        {
            echo "sorry , Query could no execute...";
        }       
    }

}
?>

<!DOCTYPE html>
<html>
 <!--[if gt IE 8]><!--> <html class=""> <!--<![endif]-->
  
      <script>
function changeStatus(on_click){
	var status=document.getElementById("radio");
	if(status.value =="Yes"){

		document.getElementById("hideme").style.visibility="hidden";
		document.getElementById("text").style.visibility="hidden";

	}
	else{

		document.getElementById("hideme").style.visibility="visible";
		document.getElementById("text").style.visibility="visible";
	}
}
function changeStatusyes(on_click){
	var status=document.getElementById("radiono");
	if(status.value =="No"){

		document.getElementById("dropprogramming").style.visibility="hidden";
		

	}
	else{

		document.getElementById("dropprogramming").style.visibility="visible";
	}
}

    </script>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=""> <!--<![endif]-->

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
                    
                            <li><a href="contact.php">CONTACT US</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>
        
        
    <!--script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script -->
 
  <body id="" style="background-image:  url(images/banner4.jpg);">
   
    <div class="container" style="width:60%;border:1px solid blue;padding: 20px;background: white;margin-top: 20px">
        <?php if(isset($msg)) echo $msg;  ?>
      <form class="form-signin" method="post" action="" enctype="multipart/form-data" >
        <h4 class="form-signin-heading">New Applicant registration &nbsp;&nbsp;|&nbsp;&nbsp;<tt><a href='index.php'>Back to Home</a></tt></h4><hr />
        Applicant Details
         <input type="text" class="form-control" placeholder="First Name" name="fname" required />
        <input type="text" class="form-control" placeholder="Last Name" name="lname" required />
        <input type="text" class="form-control" placeholder="Phone Number" name="phone" required />
        <!--<input type="text" class="input-block-level" placeholder="Username" name="txtuname" required />-->
        <input type="email" class="form-control" placeholder="Email address" name="txtemail" required />
        <input type="password" class="form-control" placeholder="Password" name="txtpass" required />
      <hr />
      Applicant Education Background
      <select class="form-control" placeholder="select" required="required" name="education_level">
     <option name="">--Please Select Your Level ---
       </option>
        <option name="">Master's 
       </option>
       <option name="" >Bachelor
       </option>
        <option name="">Advanced level A1 
       </option>
       <option name="">Secondary School
        <option name="">Some Training
       </option>
       </select>
        <input type="text" class="form-control" placeholder="Field of Study" name="field_of_study" required="required" />
        <!--<input type="text" class="input-block-level" placeholder="Username" name="txtuname" required />-->
        Are you Familial with programming languages?
        Yes:<input type="checkbox" name="radio" value="Yes" onchange="changeStatus()" style="padding: 10px 10px" id="radio">&nbsp;&nbsp; No:<input type="checkbox" name="radio" value="No" onchange="changeStatusyes()" style="padding: 10px 10px" id="radiono"><br>
        <div class="col-sm-12">
                        
                            <button class="btn btn-primary" id="dropprogramming" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" name="btn" style="padding: 10px 10px">

                            <div class="sa"> If Yes,Please Pick them </div>
                            </button>
                          </p>
                          <div class="collapse" id="collapseExample">
                            <div class="card card-body">
        <input type="checkbox" checked="checked"  name="checkbox[]" value="None" id="buttontodisable">&nbsp;&nbsp;I don't have programming skills<br>
        <input type="checkbox" name="checkbox[]" value="Java"   id="buttontodisable">&nbsp;&nbsp;Java<br>
        <input type="checkbox" name="checkbox[]" value="Python"   id="buttontodisable1">&nbsp;&nbsp;Python<br>
        <input type="checkbox" name="checkbox[]" value="C++"   id="buttontodisable2">&nbsp;&nbsp;C++<br>
        <input type="checkbox" name="checkbox[]" value="C#"   id="buttontodisable3">&nbsp;&nbsp;C#<br>
        <input type="checkbox" name="checkbox[]" value="PHP"   id="buttontodisable4">&nbsp;&nbsp;PHP<br>
        <input type="checkbox" name="checkbox[]" value="Laravel PHP Framework"   id="buttontodisable5" >&nbsp;&nbsp;Laravel PHP Framework<br>
        <input type="checkbox" name="checkbox[]" value="Django or React Python Framework"  id="buttontodisable6">&nbsp;&nbsp;Django or React Python Framework<br>
        <input type="checkbox" name="checkbox[]" value="Javascrip"   id="buttontodisable7" readonly="">&nbsp;&nbsp;Javascrip <br></div></div>
        <p style="padding: 10px 10px" id="text">If No,Choose What you are Familial with:<br></p>
         <select name="familia" style="padding:"10px 10px" class="form-control" placeholder="select" required="required" id="hideme">
            <option name="">Programming is Enough 
       </option>
        <option name="">LAN Cabling 
       </option>
       <option name="" >Network Device Configuration
       </option>
        <option name="">Network Security 
       </option>
       <option name="">Graphic Design
        <option name="">Computer maintenance
       </option>
       </select><hr />
    


</div>
         
       Applicant Experience and Salary
         <select class="form-control" placeholder="select" required="required" name="experience">
            <option name="">--Please Select Experience level ---
       </option>
        <option name="">0-1year
       </option>
       <option name="" >1-3years
        <option name="">3-5years
       </option>
       </select><hr />
       Attach experience pdf file
       <input type="file" class="form-control" placeholder="Attach experience pdf file " name="proven_experience" /><hr />
        <input type="text" class="form-control" placeholder="Expected Salary as 12Rwf or 12$" name="expected_salary" required="required" /><hr />

      <button class="btn btn-primary" type="submit" name="btn-signup">Register</button>

            <label class="checkbox">
                <span class="pull-left"> <a href="fpass.php"> Forgot Password?</a></span>
                <span class="pull-right"> <a href="index1.php"> Back to Log In</a></span>
            </label>
      
      </form>
  
    <!--<center>Copyright <?php echo date('Y'); ?> &copy;E-Square Technology Ltd </center>-->
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