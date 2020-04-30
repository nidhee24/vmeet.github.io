<?php
require_once('config.php');
?>
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

  <title>Meeting</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Bootstrap Styles -->
  <link href="css/bootstrap.css" rel="stylesheet">
  
  <!-- Styles -->
  <link href="style.css" rel="stylesheet">

  <!-- Flex Slider -->
  <link href="css/flexslider.css" rel="stylesheet">
   
  <!-- Carousel Slider -->
  <link href="css/owl-carousel.css" rel="stylesheet">
  
  <!-- CSS Animations -->
  <link href="css/animate.min.css" rel="stylesheet">
  
  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Lato:400,300,400italic,300italic,700,700italic,900' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Exo:400,300,600,500,400italic,700italic,800,900' rel='stylesheet' type='text/css'>

  <!-- Support for HTML5 -->
  <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!-- Enable media queries on older bgeneral_rowsers -->
  <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>  <![endif]-->

	<!-- Switcher Only -->
        <link rel="stylesheet" id="switcher-css" type="text/css" href="switcher/css/switcher.css" media="all" />
    <!-- END Switcher Styles -->
    
	<!-- Demo Examples -->
        <link rel="alternate stylesheet" type="text/css" href="switcher/css/green.css" title="green" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/css/tael.css" title="tael" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/css/light-green.css" title="light-green" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/css/yellow.css" title="yellow" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/css/blue.css" title="blue" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/css/light-blue.css" title="light-blue" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/css/purple.css" title="purple" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/css/violet.css" title="violet" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="switcher/css/red.css" title="red" media="all" />        <link rel="alternate stylesheet" type="text/css" href="switcher/css/orange.css" title="orange" media="all" />
        <link rel="alternate stylesheet" type="text/css" href="dark-style.css" title="dark" media="all" />
	<!-- END Demo Examples -->
 <style>
		img {
		max-width: 30%;
		height: auto;
		}

		#MyForm{
		display: none;
		width: 300px;
		border: 1px solid #ccc;
		padding: 14px;
		background: #ececec;
		}	


	</style>   
</head>
<body>
								<div>
										<?php
										try{
											if(isset($_POST['create'])){
												$type = $_POST['type'];
												$arrange = $_POST['arrange'];
												$people = $_POST['people'];
												$date = $_POST['date'];
												$time = $_POST['time'];
												$description = $_POST['description'];
												
												$sql = "INSERT INTO meeting (type,arrange,people,date,time,description) VALUES(?,?,?,?,?,?)";
												$stmtinsert = $db->prepare($sql);
												$result = $stmtinsert->execute([$type,$arrange,$people,$date,$time,$description]);
												if($result){
													echo 'Successfully saved';
												}
												else{
													echo 'There were errors';
												}
												
											}
										}
												catch(PDOException $e)
												 {
												   print ($e);
												   //print "<meta http-equiv=\"refresh\" content=\"0;URL=error.html\">";
												  }

											
		
								?>
								</div>
								
<div class="animationload">
<div class="loader">Loading...</div>
</div>
    
	<div id="topbar" class="clearfix">
    	<div class="container">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="social-icons">
                    <span><a data-toggle="tooltip" data-placement="bottom" title="Facebook" href="https://www.facebook.com/vmeet.meet.5"><i class="fa fa-facebook"></i></a></span>
                    <span><a data-toggle="tooltip" data-placement="bottom" title="Youtube" href="https://www.youtube.com/watch?v=Yy_-Hv8kx4o&feature=youtu.be"><i class="fa fa-youtube"></i></a></span>
                    <span><a data-toggle="tooltip" data-placement="bottom" title="Instagram" href="https://www.instagram.com/vmeet_24"><i class="fa fa-instagram"></i></a></span>
                </div><!-- end social icons -->
            </div><!-- end columns -->
            <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                <div class="topmenu">
				
                	
					<!-- notification message -->
					<?php if (isset($_SESSION['success'])) : ?>
					  <div class="error success" >
						<h3>
						  <?php 
							echo $_SESSION['success']; 
							unset($_SESSION['success']);
						  ?>
						</h3>
					  </div>
					<?php endif ?>

					<!-- logged in user information -->
					<?php  if (isset($_SESSION['username'])) : ?>
						<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
						<p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
					<?php endif ?>
	
		
                </div><!-- end top menu -->
            	<div class="callus">
                	<span class="topbar-email"><i class="fa fa-envelope"></i> <a href="mailto:vmeet2497@gmail.com">vmeet2497@gmail.com</a></span>
                    <span class="topbar-phone"><i class="fa fa-phone"></i> +1 (416) 970 5300</span>
                </div><!-- end callus -->
            </div><!-- end columns -->
        </div><!-- end container -->
    </div><!-- end topbar -->
    
    <header id="header-style-1">
		<div class="container">
			<nav class="navbar yamm navbar-default">
				<div class="navbar-header">
                    <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
					<img src="images/logo.png">
                   
        		</div><!-- end navbar-header -->
                
				<div id="navbar-collapse-1" class="navbar-collapse collapse navbar-right">
					<ul class="nav navbar-nav">
						
						<li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Home <div class="arrow-up"></div></a>
							<ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <ul class="col-sm-3">
                                                <li><a href="home.php">Home</a></li>
                                                
                                            </ul>
                                        </div><!-- end row -->
                                    </div><!-- end yamm-content -->
                                </li>
                            </ul><!-- end drop down menu -->
						</li>
						<li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Meeting <div class="arrow-up"></div></a>
							<ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <ul class="col-sm-3">
                                                <li><a href="Meeting.php">Arrange Meeting</a></li>
                                                <li><a href="add.php">Display Meeting and average time</a></li>
                                            </ul>
                                        </div><!-- end row -->
                                    </div><!-- end yamm-content -->
                                </li>
                            </ul><!-- end drop down menu -->
						</li>
						<li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Schedule <div class="arrow-up"></div></a>
							<ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <ul class="col-sm-3">
                                                <li><a href="schedule.php">Schedule</a></li>
                                                <li><a href="scheduledisplay.php">See your schedule</a></li>
                                            </ul>
                                        </div><!-- end row -->
                                    </div><!-- end yamm-content -->
                                </li>
                            </ul><!-- end drop down menu -->
						</li>
						<!--</li>
						<li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">MyInfo <div class="arrow-up"></div></a>
							<ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <ul class="col-sm-3">
                                                <li><a href="index.php">MyInfo</a></li>
                                                <li><a href="myinfodisplay.php">See Your Info</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                            </ul>
						</li>-->
						
						<li class="dropdown yamm-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">Help <div class="arrow-up"></div></a>
							<ul class="dropdown-menu">
                                <li>
                                    <div class="yamm-content">
                                        <div class="row">
                                            <ul class="col-sm-3">
                                                <li><a href="help.php">Contact us</a></li>
                                            </ul>
                                        </div><!-- end row -->
                                    </div><!-- end yamm-content -->
                                </li>
                            </ul><!-- end drop down menu -->
						</li>
					
				</div><!-- #navbar-collapse-1 -->			</nav><!-- end navbar yamm navbar-default -->
		</div>
	</header><!-- end header-style-1 -->
	
	
	<section class="post-wrapper-top jt-shadow clearfix">
		<div class="container">
			<div class="col-lg-12">
				<h2>Meeting</h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="home.php">About</a></li>
                    <li>Meeting</li>
                </ul>
			</div>
		</div>
	</section><!-- end post-wrapper-top -->
    
    <section class="blog-wrapper">
    	<div class="container" align="center-right">
        	<div id="content" class="col-lg-12" align="center-right">
                <div class="row">
                   <div class="col-md-6">
 						<div class="widget">
                        	<div class="title">
                            <h3>Arrange Meeting</h3>
                            </div><!-- end title -->
                                <form id="loginform" method="post" name="loginform" align="center-right">
                                    <div class="form-group">
                                        <div class="input-group">
										<label for="type">Meeting Type :</label><br>
                                            <select id="type" name="type">
												<option value="Business" name="type">Business Meeting</option>
												<option value="sport" name="type">Sports Meeting</option>
												<option value="Others" name="type">Other</option>
											</select>
											</div>
                                        </div><br><br>
									 <div class="form-group">
										<label for="arranging">Are you arranging it?</label><br>
										<input type="radio" id="yes" name="arrange">
										<label for="yes">Yes</label><br>
										<input type="radio" id="no" name="arrange">
										<label for="no">No</label><br>
										</div><br>
									 <div class="form-group">
                                        <div class="input-group">
										<label for="people">Add people :</label><br>
                                            <select id="people" name="people">
												<option value="Nidhi" name="people">Nidhi</option>
												<option value="Janvi" name="people">Janvi</option>
												<option value="Shraddha" name="people">Shraddha</option>
											</select>
											</div>
                                        </div>
							
			
                                    
                                    <div class="form-group">
                                        <div class="input-group">
										<label for="date">Set Date</label><br>
                                            <input type="date" class="form-control" placeholder="SetDate" name="date">
                                        </div>
                                    </div>
									<div class="form-group">
                                        <div class="input-group">
										<label for="time">Set Time</label><br>
                                            <input type="time" class="form-control" placeholder="SetTime" name="time">
                                        </div>
                                    </div>
									
									<div class="form-group">
                                        <div class="input-group">
										<label for="description">Description</label><br>
                                            <textarea name="description" rows="5" cols="30"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                    <button type="submit" class="btn btn-primary" name="create">Submit</button>
                                    </div>
                                </form>
                        </div><!-- end widget -->
					</div><!-- end col-md-6 -->
                   <div class="col-md-6">
 						<div class="widget">
                                <p>Click below button to update your meting.</p>
									<button id="Mybtn" class="btn btn-primary">Update meeting</button>
									
									<?php
$con=mysqli_connect("localhost","root","","group")or die(mysql_error);
	$id = isset($_GET['id']) ? $_GET['id'] : '';
	if(isset($_GET['id']))
	{
		$query="select * from meeting where id='$id'";
		$result=mysqli_query($con,$query) or die(mysqli_error());
		if(mysqli_num_rows($result)>0)
			{
				while($row=mysqli_fetch_assoc($result))
					{
?>
										<form id="MyForm" action="" method="post">
									
									 <div class="form-group">
                                        <div class="input-group">
										<label for="people">Add people :</label><br>
                                            <select id="people" name="people" value="<?php echo $row['people'];?>">
												<option value="Nidhi" name="people" value="<?php echo $row['people'];?>">Nidhi</option>
												<option value="Janvi" name="people" value="<?php echo $row['people'];?>">Janvi</option>
												<option value="Shraddha" name="people" value="<?php echo $row['people'];?>">Shraddha</option>
											</select>
											</div>
											
                                        </div><br>
									<div class="form-group">
                                        <div class="input-group">
										<label for="date">Update Date</label><br>
                                            <input type="date" class="form-control" placeholder="SetDate" name="date" value="<?php echo $row['date'];?>">
                                        </div>
                                    </div>
									<div class="form-group">
                                        <div class="input-group">
										<label for="time">Update Time</label><br>
                                            <input type="time" class="form-control" placeholder="SetTime" name="time" value="<?php echo $row['time'];?>">
                                        </div>
                                    </div><br>
									<div class="form-group">
                                    <button type="submit" class="btn btn-primary" name="update">Submit</button>
                                    </div>                       
									</div><!-- end widget -->
									</form>
									
	<?php
			}
		}
	if(isset($_POST['update']))
	{
		$strQuery="update meeting set people='".$_POST['people']."',date='".$_POST['date']."',time='".$_POST['time']."' where id='".$_GET['id']."'";
				if(mysqli_query($con,$strQuery))
				{
					echo "updated successfully";
					
				}
				else
				{
					echo mysql_error;
				}
	}
			mysqli_close($con);
	}
	?>
									
					</div><!-- end col-md-6 -->
            	</div><!-- end row --> 
            </div><!-- end content -->
    	</div><!-- end container -->
    </section><!--end white-wrapper -->

	
    	
    

<div id="copyrights">
    	<div class="container">
			<div class="col-lg-5 col-md-6 col-sm-12">
            	<div class="copyright-text">
                    <p></p>
                </div><!-- end copyright-text -->
			</div><!-- end widget -->
			<div class="col-lg-7 col-md-6 col-sm-12 clearfix">
				<div class="footer-menu">
                    <ul class="menu">
                         <li class="active"><a href="home.php">Home</a></li>
                        <li><a href="meeting.php">Meeting</a></li>
                        <li><a href="schedule.php">Schedule</a></li>
                        <li><a href="help.html">Help</a></li>
                    </ul>
                </div>
			</div><!-- end large-7 --> 
        </div><!-- end container -->
    </div><!-- end copyrights -->
      
	<div class="dmtop">Scroll to Top</div>
        
  <!-- Main Scripts-->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/menu.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.parallax-1.1.3.js"></script>
  <script src="js/jquery.simple-text-rotator.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.fitvids.js"></script>
  <script src="js/custom.js"></script>
  
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/custom-portfolio.js"></script>

  <script src="js/jquery.flexslider.js"></script>
  <script type="text/javascript">
 (function($) {
	  "use strict";
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "fade",
		controlNav: false,
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
	})(jQuery);
	
	$(document).ready(function(){
	$('#Mybtn').click(function(){
  		$('#MyForm').toggle(500);
  });
});

	$(document).ready(function(){
	$('#adding').click(function(){
  	$('#button').toggle(500);
  });
});
  </script>

  

  <!-- Demo Switcher JS -->
  <script type="text/javascript" src="switcher/js/fswit.js"></script>
  <script src="switcher/js/bootstrap-select.js"></script>
 
</body>

</html>