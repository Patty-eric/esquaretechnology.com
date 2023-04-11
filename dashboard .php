<?php
session_start();

require_once 'class.user.php';
//require_once 'dbconfig.php';

$user_home = new USER();

if(!$user_home->is_logged_in())
{
	$user_home->redirect('index.php');
}

$stmt = $user_home->runQuery("SELECT * FROM users WHERE id=:uid");
$stmt->execute(array(":uid"=>$_SESSION['userSession']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);


?>


<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>E-Square Technology Ltd</title>
		<link rel="shortcut icon" href="icon/intern02.png">
		<link rel="icon" type="image/ico" href="images/logo.jpg" />
		<meta name="description" content="Large &amp; Small" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<!--The all css and bootstrap from onlinejob to be used for test-->
		<link rel="stylesheet" href="fromjobportal/bootstrap/css/bootsrap.css"/>
		<link rel="stylesheet" href="fromjobportal/bootstrap/css/bootsrap.min.css"/>
		<link rel="stylesheet" href="fromjobportal/bootstrap/css/bootsrap.css.map"/>
		<link rel="stylesheet" href="fromjobportal/bootstrap/js/bootsrap.js">
		<link rel="stylesheet" href="fromjobportal/bootstrap/css/bootsrap.min.js"/>
		<!--The all css and bootstrap from onlinejob to be used for test-->
		<!-- bootstrap & fontawesome -->
		<link rel="stylesheet" href="fromintern/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="fromintern/assets/font-awesome/4.5.0/css/font-awesome.min.css" />
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" > 
		<!--iyi izakoreshwa -->
		  <!--link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"-->

		<!-- page specific plugin styles -->

		<!-- text fonts -->
		<link rel="stylesheet" href="fromintern/assets/css/fonts.googleapis.com.css" />

		<!-- ace styles -->
		<link rel="stylesheet" href="fromintern/assets/css/ace.min.css" class="ace-main-stylesheet" id="main-ace-style" />

		<!--[if lte IE 9]>
			<link rel="stylesheet" href="assets/css/ace-part2.min.css" class="ace-main-stylesheet" />
		<![endif]-->
		<link rel="stylesheet" href="fromintern/assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="fromintern/assets/css/ace-rtl.min.css" />

		<!--[if lte IE 9]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="fromintern/assets/js/ace-extra.min.js"></script>

		<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

		<!--[if lte IE 8]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
<!--link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css"-->
<!--iyi izakoreshwa -->
<!--link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css"-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css.css">
 <!--link rel="stylesheet" href=" https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css"--> 
 <!--link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"--> 

<style>
.table table-striped table-bordered{
    width:100%;
    border-collapse:collapse;
}
.table  td,.table th{
    padding:12px 15px;
    border:1px solid:#fff;
    text-align:center;
    font-size:12px;
}
.table th{
    background-color:skyblue;
    color:#ffffff;
}
.table p{
display:none;
}
.table tbody tr:nth-child(even){

}
@media(max-width:500px){
    .table thead{
        display:none;
    }
.table , .table tbody, .table tr, .table  td{
    display:block;
    width:100%;
}
.table tr{
    margin-bottom:15px;
}
.table td{
    text-align:right;
    padding-left:50%;
    position:relative;
    
}
    .table td::before{
        content: attr(data-label);
        position:absolute;
        left:0;
        width: 50%;
        padding-left: 15%;
        font-size: 15%;
        font-weight:bold;
        text-align:left;
    }
    .table p{
display:block;
        color:skyblue;
        position:absolute;
        font-weight:bold;
}
}
</style>

	</head>

	<body class="no-skin">
		<div id="navbar" class="navbar navbar-default          ace-save-state">
			<div class="navbar-container ace-save-state" id="navbar-container">
				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<div class="navbar-header pull-left">
					<a href="dashboard.php" class="navbar-brand">
						<small>
							<i class="fa fa-laptop"></i>
E-Square Technology Ltd
							
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="grey dropdown-modal">

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-check"></i>
									4 Tasks to complete
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Software Update</span>
													<span class="pull-right">65%</span>
												</div>

												<div class="progress progress-mini">
													<div style="width:65%" class="progress-bar"></div>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Hardware Upgrade</span>
													<span class="pull-right">35%</span>
												</div>

												<div class="progress progress-mini">
													<div style="width:35%" class="progress-bar progress-bar-danger"></div>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Unit Testing</span>
													<span class="pull-right">15%</span>
												</div>

												<div class="progress progress-mini">
													<div style="width:15%" class="progress-bar progress-bar-warning"></div>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">Bug Fixes</span>
													<span class="pull-right">90%</span>
												</div>

												<div class="progress progress-mini progress-striped active">
													<div style="width:90%" class="progress-bar progress-bar-success"></div>
												</div>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See tasks with details
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="purple dropdown-modal">

							<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-exclamation-triangle"></i>
									8 Notifications
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar navbar-pink">
										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
														New Comments
													</span>
													<span class="pull-right badge badge-info">+12</span>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<i class="btn btn-xs btn-primary fa fa-user"></i>
												Bob just signed up as an editor ...
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
														New Orders
													</span>
													<span class="pull-right badge badge-success">+8</span>
												</div>
											</a>
										</li>

										<li>
											<a href="#">
												<div class="clearfix">
													<span class="pull-left">
														<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
														Followers
													</span>
													<span class="pull-right badge badge-info">+11</span>
												</div>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="#">
										See all notifications
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="green dropdown-modal">

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-envelope-o"></i>
									5 Messages
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
										<li>
											<a href="#" class="clearfix">
												<img src="assets/images/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Alex:</span>
														Ciao sociis natoque penatibus et auctor ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>a moment ago</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												<img src="assets/images/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Susan:</span>
														Vestibulum id ligula porta felis euismod ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>20 minutes ago</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												<img src="assets/images/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Bob:</span>
														Nullam quis risus eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>3:15 pm</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												<img src="fromintern/assets/images/avatars/avatar2.PNG" class="msg-photo" alt="Kate's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Kate:</span>
														Ciao sociis natoque eget urna mollis ornare ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>1:33 pm</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#" class="clearfix">
												<img src="fromintern/assets/images/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">Fred:</span>
														Vestibulum id penatibus et auctor  ...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>10:09 am</span>
													</span>
												</span>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="inbox.html">
										See all messages
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<li class="light-blue dropdown-modal">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<span class="user-info">
									
								</span>
										Welcome: <?php echo $row['fname']." ".$row['lname']; ?>
								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">

								<li>
									<a href="logout.php">
										<i class="ace-icon fa fa-power-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div><!-- /.navbar-container -->
		</div>

		<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>

			<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="active">
						<a href="dashboard.php">
							<i class="ace-icon fa fa-home home-icon"></i>
							<span class="menu-text"> Dashboard </span>
						</a>

						<b class="arrow"></b>
					</li>
					

						<b class="arrow"></b>
					</li>
					<li class="">
						<a href="myapplications1.php">
							<i class="menu-icon fa fa-book"></i>
							<span class="menu-text">My Applications</span>
						</a>

						<b class="arrow"></b>
					</li>
					
						</ul>
					</li>
				</ul>
				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>

			<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="dashboard.php">Home</a>
							</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>

					<div class="page-content">
						<div class="ace-settings-container" id="ace-settings-container">

							<div class="ace-settings-box clearfix" id="ace-settings-box">
								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<div class="pull-left">
											<select id="skin-colorpicker" class="hide">
												<option data-skin="no-skin" value="#438EB9">#438EB9</option>
												<option data-skin="skin-1" value="#222A2D">#222A2D</option>
												<option data-skin="skin-2" value="#C6487E">#C6487E</option>
												<option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
											</select>
										</div>
										<span>&nbsp; Choose Skin</span>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-navbar" autocomplete="off" />
										<label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-sidebar" autocomplete="off" />
										<label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-breadcrumbs" autocomplete="off" />
										<label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" autocomplete="off" />
										<label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2 ace-save-state" id="ace-settings-add-container" autocomplete="off" />
										<label class="lbl" for="ace-settings-add-container">
											Inside
											<b>.container</b>
										</label>
									</div>
								</div><!-- /.pull-left -->

								<div class="pull-left width-50">
									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-hover" autocomplete="off" />
										<label class="lbl" for="ace-settings-hover"> Submenu on Hover</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-compact" autocomplete="off" />
										<label class="lbl" for="ace-settings-compact"> Compact Sidebar</label>
									</div>

									<div class="ace-settings-item">
										<input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-highlight" autocomplete="off" />
										<label class="lbl" for="ace-settings-highlight"> Alt. Active Item</label>
									</div>
								</div><!-- /.pull-left -->
							</div><!-- /.ace-settings-box -->
						</div><!-- /.ace-settings-container -->

						<div class="page-header">
							<h1>
								<i class="menu-icon fa fa-bank"></i>  List of Tasks Available
								
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12 col-sm-12 pricing-box">
										
										<!--area to set all task to be apply -->
		<!-- this the biginning seection of task listing to applied by work from outside -->

        
<!--iyi izakoreshwa -->

   <table id="example" class="table table-striped table-bordered">
       <div class="table">
        <thead>
            <tr>
                <th>Task Code</th>
                <th>Task Name</th>
                <th>Task Type</th>
                <th>Required Skills</th>
                <th>Start Time</th>
                <th>End of Project</th>
                <th>Reward</th>
                <th><button class="btn btn-success">Action</th>
                
            </tr>
        </thead>
        
        <?php
       // $email=$_GET['userEmail'];
$con=mysqli_connect("localhost","id17828412_esquaretech","Nibishaka@123");
mysqli_select_db($con,"id17828412_esquare");
$data="SELECT TaskID, Task_Name,Task_Type,Required_Skills,Start_Date,End_of_Project,Reward FROM task,users WHERE task.User_ID=users.id &&  users.id={$_SESSION['userSession']}";
 $data_all=mysqli_query($con,$data);
 ?> 
  
        <tbody>
            
            <?php
 if($data_all){
    while($better=mysqli_fetch_array($data_all)){
       
        ?>
         
       <?php $id= $better['TaskID'];?>
            <tr>
                
                <td><p>Task Code:</p><?php echo $better['TaskID'];?></td>
                <td><p>Task Name:</p><?php echo $better['Task_Name'];?></td>
                <td><p>Task Type:</p><?php echo $better['Task_Type'];?></td>
                <td><p>Your Skills:</p><?php echo $better['Required_Skills'];?></td>
                <td><p>Start Date:</p><?php echo $better['Start_Date'];?></td>
                <td><p>End Date:</p><?php echo $better['End_of_Project'];?></td>
                <td><p>Your reward:</p><?php echo $better['Reward'];?></td>
                <td><a href="applyview.php?TaskID=<?php echo $better['TaskID'];?>" class="btn btn-info">Apply</a></td>
            </tr>
     
       
         <?php
    }
 }
 else if($_SESSION['userSession']==0){
       echo "No Task assigned to you";  
 }
  else {echo "No Jobs";}

 
?>

 </tbody>
        </div>

    </table>

    
    <p>For Info Please Call:<i class="fa fa-phone" aria-hidden="true">+250783434006</i></p>

 
    <!--table id="example_table" class="table">
    <thead>
    <tr>
        <th style="width: 10%">Task Name</th>
        <th style="width: 30%" >The required Skills</th>
        <th style="width: 30%">Experience Required</th>
        <td style="width: 30%">Time to Implement </td>
        <td style="width: 30%" >The reward</td>
        <td><button class="btn btn-success">Action</td></td>
      
        
    </tr>
    </thead>
    
  <?php
  /*
$con=mysqli_connect("localhost","id17828412_esquaretech","Nibishaka@123");
mysqli_select_db($con,"id17828412_esquare");
$data="SELECT * FROM users";
 $data_all=mysqli_query($con,$data);
 ?>  
  <?php
 if($data_all){
    while($better=mysqli_fetch_array($data_all)){
        ?>
        <tbody>
        <thead>
     <tr>
     
    <td><?php echo $better['id'];?></td>
    <td><?php echo $better['fname'];?></td>
    <td><?php echo $better['lname'];?></td>
    <td><?php echo $better['contact'];?></td>
     <td><?php echo $better['userEmail'];?></td>
     
    <td><a href="application.php?id=<?php $better['id'];?>" class="btn btn-info">Apply</td>

       </tr>
       </thead>
       </tbody>
        <?php
     }
 }
 else{
     echo"No data displayed";
 }
 */

//?>

       <!--?php endforeach;? -->
       
    <!--/table-->
    

		
		<!-- this the end seection of task listing to applied by work from outside -->

								
												</div>
											</div>
										</div>
									</div>
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->

		<footer>
			<div class="footer">
				<div class="footer-inner">
					<div class="footer-content">
						<span class="bigger-120">
							<span class="blue bolder">
								Copyright <?php echo date('Y'); ?> &copy;E-Square Technology Ltd</h4></center>
							</span>
							
						</span>
					</div>
				</div>
			</div>
       </footer>
			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script src="fromintern/assets/js/jquery-2.1.4.min.js"></script>

		<!-- <![endif]-->

		<!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='fromintern/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="fromintern/assets/js/bootstrap.min.js"></script>

		<!-- page specific plugin scripts -->

		<!-- ace scripts -->
		<script src="fromintern/assets/js/ace-elements.min.js"></script>
		<script src="fromintern/assets/js/ace.min.js"></script>

		<!-- inline scripts related to this page -->
	<!-- jQuery js-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- Bootstrap js -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- jQuery Datatable js -->
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <!-- Bootstrap Datatable js -->    
    <!--script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap4.min.js"></script-->
  <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"> </script> 

    <script>
     $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>

	</body>
</html>
