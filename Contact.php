<!doctype html>
<html class="no-js"  lang="en">

    <head>
        <!-- META DATA -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

        <!--font-family-->
        <link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

        <!-- TITLE OF SITE -->
        <title>HikingTrail</title>

        <!-- favicon img -->
        <link rel="shortcut icon" type="image/icon" href="assets/logo/favicon.png"/>

        <!--font-awesome.min.css-->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css" />

        <!--animate.css-->
        <link rel="stylesheet" href="assets/css/animate.css" />

        <!--hover.css-->
        <link rel="stylesheet" href="assets/css/hover-min.css">

        <!--datepicker.css-->
        <link rel="stylesheet"  href="assets/css/datepicker.css" >

        <!--owl.carousel.css-->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css"/>

        <!-- range css-->
        <link rel="stylesheet" href="assets/css/jquery-ui.min.css" />

        <!--bootstrap.min.css-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css" />

        <!-- bootsnav -->
        <link rel="stylesheet" href="assets/css/bootsnav.css"/>

        <!--style.css-->
        <link rel="stylesheet" href="assets/css/style.css" />

        <!--responsive.css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />
        <link rel="stylesheet" href="assets/css/contact.css">


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
        <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
            your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- main-menu Start -->
        <header class="top-area">
            <div class="header-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-2">
                            <div class="logo">
                                <a href="index.php">
                                    Hiking<span>Trail</span>
                                </a>
                            </div><!-- /.logo-->
                        </div><!-- /.col-->
                        <div class="col-sm-10">
                            <div class="main-menu">
                            
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <i class="fa fa-bars"></i>
                                    </button><!-- / button-->
                                </div><!-- /.navbar-header-->
                                <div class="collapse navbar-collapse">        
                                    <ul class="nav navbar-nav navbar-right">
                                        <li class="smooth-menu"><a href="index.php">home</a></li>
                                        
                                        <li class="smooth-menu"><a href="Trek.php">Trek </a></li>
                                        <li class="smooth-menu"><a href="gallary.php">Gallary</a></li>
                                        
                                        <li class="smooth-menu"><a href="Contact.php">Contact Us</a></li>

                                        <li>
                                            <a href="signup.php"><button class="book-btn">book now
                                            </button></a>
                                        </li><!--/.project-btn--> 
                                    </ul>
                                </div><!-- /.navbar-collapse -->
                            </div><!-- /.main-menu-->
                        </div><!-- /.col-->
                    </div><!-- /.row -->
                    <div class="home-border"></div><!-- /.home-border-->
                </div><!-- /.container-->
            </div><!-- /.header-area -->

        </header><!-- /.top-area-->
        <!-- main-menu End -->

        
        <!--about-us start -->
        <section id="home" class="about-us">
            <div class="container">
                <div class="about-us-content">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="single-about-us">
                                <div class="about-us-txt">
                                    <h2>
                                        Explore the Beauty of the Himachal Pradesh 

                                    </h2>
                                    <div class="about-btn">
                                            <a href="https://tentntrek.com/">   <button  class="about-view">
                                            explore now
                                        </button></a>
                                    </div><!--/.about-btn-->
                                </div><!--/.about-us-txt-->
                            </div><!--/.single-about-us-->
                        </div><!--/.col-->
                        <div class="col-sm-0">
                            <div class="single-about-us">
                                
                            </div><!--/.single-about-us-->
                        </div><!--/.col-->
                    </div><!--/.row-->
                </div><!--/.about-us-content-->
            </div><!--/.container-->

        </section><!--/.about-us-->
  

   
    <div class="container" id="banner1">
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Contact Us for booking</h3>
                        <i class="fa fa-envelope" aria-hidden="true" style="font-size:50px"></i>
                        <p>Sorry, This is a educational Project</p>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li>
                                <h4>Location</h4>
                            </li>
                            <li>HikingTrail</li>
                            <li>Dharmshala,Kangra</li>
                            <li>Himachal Pradesh, India</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 " id="gray">
                <h3>Please Fill Out this Form</h3>
                <form method="POST" action="contacting.php">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Name" required="true" pattern=".{1,}">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
                    </div>
                    <div class="form-group">
                        <label for="contact">Contact No.</label>
                        <input type="text" class="form-control" name="contact" placeholder="Contact" required="true" pattern=".{10}">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <input type="text" class="form-control" name="message" placeholder="message">
                    </div>
                    <div>
                        <input class="btn btn-primary" type="submit" value="Submit" name="button">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container" id="banner2">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <h2><b><u>LIVE SUPPORT</u></b></h2>
                <h4>24 hours || 7 days a week || 365 days in a year Live Technical Support You Never Get</h4>
                <p>Bro You Are Looking For Water In The Desert. Its An Educational Project
                </p>
                <br>
                <a href="https://tentntrek.com/"><button type="button" class="btn btn-primary btn-lg">Learn More</button></a>
            </div>
            
        </div>
    </div>
    <div id="foot"></div>
    <footer>
            <div class="foot-icons ">
                    <ul class="footer-social-links list-inline list-unstyled">
                        <li><a href="https://www.facebook.com/" target="_blank" class="foot-icon-bg-1"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="https://twitter.com/?lang=en" target="_blank" class="foot-icon-bg-2"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com/" target="_blank" class="foot-icon-bg-3"><i class="fa fa-instagram"></i></a></li>
                    </ul>

                </div><!--/.foot-icons-->
                <div id="scroll-Top">
                    <i class="fa fa-angle-double-up return-to-top" id="scroll-top" data-toggle="tooltip" data-placement="top" title="" data-original-title="Back to Top" aria-hidden="true"></i>
                </div><!--/.scroll-Top-->
            </div><!-- /.container-->
        
        </footer>
   

        <script src="assets/js/jquery.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->

        <!--modernizr.min.js-->
        <script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


        <!--bootstrap.min.js-->
        <script  src="assets/js/bootstrap.min.js"></script>

        <!-- bootsnav js -->
        <script src="assets/js/bootsnav.js"></script>

        <!-- jquery.filterizr.min.js -->
        <script src="assets/js/jquery.filterizr.min.js"></script>

        <script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

        <!--jquery-ui.min.js-->
        <script src="assets/js/jquery-ui.min.js"></script>

        <!-- counter js -->
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>

        <!--owl.carousel.js-->
        <script  src="assets/js/owl.carousel.min.js"></script>

        <!-- jquery.sticky.js -->
        <script src="assets/js/jquery.sticky.js"></script>

        <!--datepicker.js-->
        <script  src="assets/js/datepicker.js"></script>

        <!--Custom JS-->
        <script src="assets/js/bookingcustom.js"></script>



</body>

</html>