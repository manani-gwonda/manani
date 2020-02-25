

<!DOCTYPE php>
<php lang="en">
<head>
<meta charset="utf-8">
<title>ihotelier</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css --> 
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
<link href="css/flexslider.css" rel="stylesheet" /> 
<link href="css/style.css" rel="stylesheet" />
 
<!-- php5 shim, for IE6-8 support of php5 elements -->
<!--[if lt IE 9]>
      <script src="http://php5shim.googlecode.com/svn/trunk/php5.js"></script>
    <![endif]-->

</head>
<body>




<div id="wrapper"> 
	<!-- start header -->
	<header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                  <a class="navbar-brand" href="index.php"><i class="icon-info-blocks material-icons">location_on</i>ihotelier</a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li><a class="waves-effect waves-dark" href="index.php">Home</a></li> 
						 <li class="dropdown">
	                        <a href="#" data-toggle="dropdown" class="dropdown-toggle">About Us <b class="caret"></b></a>
	                        <ul class="dropdown-menu">
	                        <li><a class="waves-effect waves-dark" href="about.php">Company</a></li>
	                        </ul>
                   		 </li> 
						<li><a class="waves-effect waves-dark" href="services.php">Services</a></li>
                        <li><a class="waves-effect waves-dark" href="portfolio.php">Gallery</a></li>
                        <li><a class="waves-effect waves-dark" href="journey.php">journey</a></li>
                        <li class="active"><a href="contact.php" class="waves-effect waves-dark">Contact</a></li>
                        <li><a  class="waves-effect waves-dark" href="register.php">Signup</a></li>
                        <li><a   class="waves-effect waves-dark" href="login.php">SignIn</a></li>
                    </ul>
                </div>
            </div>
        </div>
	</header><!-- end header -->
	<section id="inner-headline">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h2 class="pageTitle">Contact Us</h2>
			</div>
		</div>
	</div>
	</section>
	<section id="content">
	
	<div class="container">
		<div class="row"> 
							<div class="col-md-12">
								<div class="about-logo">
									<h3>Get<span class="color"> in Touch</span></h3>
									<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
                                    	<p>Sed ut perspiciaatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas</p>
								</div>  
							</div>
						</div>
	<div class="row">
		<div class="col-md-6">
			<p> </p>
				   <!-- Form itself -->
          <form  action="send.php" method="POST" name="sentMessage" id="contactForm"  novalidate> 
				<div class="input-field"> 
					<input type="text" name="name" class="form-control" 
					   	   id="name" required data-validation-required-message="Please enter your name"/>
					<label for="name" class=""> Name </label> 
					 <p class="help-block"></p>
				   
			       

			    </div> 	
		        <div class="input-field"> 
					<input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Please enter your email" /> 
					<label for="name" class="">   Email </label> 
			    </div> 	
					  
		        <div class="input-field"> 
					 <textarea rows="10" cols="100" name="message" required class="form-control materialize-textarea" idation-required-message="Please enter your message" minlength="5" data-validation-minlength-message="Min 5 characters"  maxlength="999" style="resize:none">
					 	
					 </textarea>
					 <label for="name" class="">Message </label> 
				</div> 		 
			     <div id="success"> </div> <!-- For success/fail messages -->
			    <input type="submit" name="send " value="send" class="btn btn-primary waves-effect waves-dark pull-right"><br/>
          </form>
		</div>
		<div class="col-md-6">

		<div class="mapouter"><div class="gmap_canvas"><iframe width="650" height="450" id="gmap_canvas" src="https://maps.google.com/maps?q=kamel%20park&t=&z=5&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net/blog/divi-discount-code-elegant-themes-coupon/"></a></div><style>.mapouter{position:relative;text-align:right;height:450px;width:650px;}.gmap_canvas {overflow:hidden;background:none!important;height:450px;width:650px;}</style>
		</div>

		</div>
	</div>
	</div>
 
	</section>				  	
			
	<footer>
	<div class="container">
		<div class="row">
			<div class="col-sm-3 col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Our Contact</h5>
					<address>
					<strong>Ihotelier company Inc</strong><br>
					kisii kilgoris Main Road, Near kiogoro market<br>
					 Pin-21542 kisii county.</address>
					<p>
						<i class="icon-phone"></i> (123) 456-789 - 1255-12584 <br>
						<i class="icon-envelope-alt"></i> email@domainname.com
					</p>
				</div>
			</div>
			<div class="col-sm-3 col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Quick Links</h5>
					<ul class="link-list">
						<li><a class="waves-effect waves-dark" href="#">Latest Events</a></li>
						<li><a class="waves-effect waves-dark" href="#">Terms and conditions</a></li>
						<li><a class="waves-effect waves-dark" href="#">Privacy policy</a></li>
						<li><a class="waves-effect waves-dark" href="#">Career</a></li>
						<li><a class="waves-effect waves-dark" href="#">Contact us</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3 col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Latest posts</h5>
					<ul class="link-list">
						<li><a class="waves-effect waves-dark" href="#">Our Achievements</a></li>
						<li><a class="waves-effect waves-dark" href="#">Our Strategies</a></li>
						<li><a class="waves-effect waves-dark" href="#">Our Aimes</a></li>
					</ul>
				</div>
			</div>
			<div class="col-sm-3 col-lg-3">
				<div class="widget">
					<h5 class="widgetheading">Recent News</h5>
					<ul class="link-list">
						<li><a class="waves-effect waves-dark" href="#">Our Mission</a></li>
						<li><a class="waves-effect waves-dark" href="#">>Our Vission</a></li>
						<li><a class="waves-effect waves-dark" href="#">Our Mottor</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div id="sub-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						<p>
							<span>&copy; Manani Japhet 2020. <a href="#" target="_blank"> </a>  
						</p>
					</div>
				</div>
				<div class="col-lg-6">
					<ul class="social-network">
						<li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
						<li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	</footer></div>
<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="materialize/js/materialize.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>  
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<!-- Vendor Scripts -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script> 
<script src="js/custom.js"></script>

 <script src="contact/jqBootstrapValidation.js"></script>
 <script src="contact/contact_me.js"></script>
</body>
</php>