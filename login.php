<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 

  <title>Log-in</title>

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
	</style>   
</head>
<body>


								
								
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
                	<span class="topbar-login"><i class="fa fa-user"></i> <a href="login.php">Login / Register</a></span>
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
                                            <ul class="col-md-12">
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
					
				</div><!-- #navbar-collapse-1 -->			</nav><!-- end navbar yamm navbar-default -->
		</div><!-- end container -->
	</header><!-- end header-style-1 -->
	
	
	<section class="post-wrapper-top jt-shadow clearfix">
		<div class="container" align="center">
			<div class="col-lg-12">
				<h2 align="center">Register</h2>
                <ul class="breadcrumb pull-right">
                    <li><a href="index-2.html">About</a></li>
                    <li align="center">Register</li>
                </ul>
			</div>
		</div>
	</section><!-- end post-wrapper-top -->
    
                            
    <section class="blog-wrapper">
    	<div class="container">
        	<div id="content" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                   
                   <div class="col-lg-12">
 						<div class="widget">
                        	<div class="title">
                            	<h3 align="center">Create An Account</h3>
                            </div><!-- end title -->
							    <form method="post" action="login.php" align="center">
								<?php include('errors.php'); ?>
                                    <div class="form-group" align="center">
                                        <input type="text" name="username" value="<?php echo $username;?>" placeholder="Enter Username">
                                    </div>
                                    
                                    <div class="form-group" align="center">
                                         <input type="email" name="email" value="<?php echo $email;?>" placeholder="Enter Email">
                                    </div>
                                    <div class="form-group" align="center">
                                        <input type="password" name="password_1" placeholder="Create Password">
                                    </div>
                                    <div class="form-group" align="center">
                                        <input type="password" name="password_2" placeholder="Confirm Password">
                                    </div>
                                    <div class="form-group" align="center">
                                        <button type="submit" class="btn btn-primary" name="reg_user">Register</button>
                                    </div>
										<p align="center">
											Already a member? <a href="login2.php">Sign in</a>
										</p>
								</form>
                        </div><!-- end widget -->
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
  </script>

  

  <!-- Demo Switcher JS -->
  <script type="text/javascript" src="switcher/js/fswit.js"></script>
  <script src="switcher/js/bootstrap-select.js"></script>
 
</body>
</html>