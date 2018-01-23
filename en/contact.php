<!DOCTYPE HTML>
<html>

<head>
    <title>MILLENIUM MARINE DIVISION</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="MILLENIUM MARINE DIVISION" />
    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- font files -->
    <link href='//fonts.googleapis.com/css?family=Raleway:400,100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Audiowide' rel='stylesheet' type='text/css'>
    <!-- /font files -->
    <!-- css files -->
    <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/jQuery.lightninBox.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/team.css" rel="stylesheet" type="text/css" media="all" />
	<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
	<style>
            footer {
  color: white;
}
footer h3 {
  margin-bottom: 30px;
}
footer .footer-above {
  padding-top: 50px;
  background-color: #1e2e4d;
}
footer .footer-col {
  margin-bottom: 50px;
}
footer .footer-below {
  padding: 25px 0;
  background-color: #233140;
}
			.btn-outline {
  color: white;
  font-size: 20px;
  border: solid 2px white;
  background: transparent;
  transition: all 0.3s ease-in-out;
  margin-top: 15px;
}
.btn-outline:hover,
.btn-outline:focus,
.btn-outline:active,
.btn-outline.active {
  color: #18BC9C;
  background: white;
  border: solid 2px white;
}
.btn-social {
  display: inline-block;
  height: 50px;
  width: 50px;
  border: 2px solid white;
  border-radius: 100%;
  text-align: center;
  font-size: 20px;
  line-height: 45px;
}
	</style>
    <!-- /css files -->
    <!-- js files -->
    <script src="../js/modernizr.custom.js"></script>
    <!-- /js files -->
</head>

<style>
      
/*-- navigation effects --*/
.cl-effect-7 li a::before,
.cl-effect-7 li a::after {
	position: absolute;
	top: 100%;
	left: 0;
	width: 100%;
	height: 3px;
	background: #fff;
	content: '';
	-webkit-transition: -webkit-transform 0.3s;
	-moz-transition: -moz-transform 0.3s;
	transition: transform 0.3s;
	-webkit-transform: scale(0.85);
	-moz-transform: scale(0.85);
	transform: scale(0.85);
}
.cl-effect-7 li a::after {
	opacity: 0;
	-webkit-transition: top 0.3s, opacity 0.3s, -webkit-transform 0.3s;
	-moz-transition: top 0.3s, opacity 0.3s, -moz-transform 0.3s;
	transition: top 0.3s, opacity 0.3s, transform 0.3s;
}
.cl-effect-7 li a:hover::before,
.cl-effect-7 li a:hover::after,
.cl-effect-7 li a:focus::before,
.cl-effect-7 li a:focus::after {
	-webkit-transform: scale(1.3);
	-moz-transform: scale(1.3);
	transform: scale(1.3);
}
.cl-effect-7 li a:hover::after,
.cl-effect-7 li a:focus::after {
	top: 0%;
	opacity: 1;
}
/*-- /navigation effects --*/
        
    </style>
<body class="animated slideInRight">
    <!-- Navigation -->
    <div class="navbar-wrapper">
        <div class="container">
            <nav class="navbar navbar-inverse navbar-static-top cl-effect-7">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="../index.php"><h1>MILLENIUM MARINE</h1></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="index.php">Home</a>
                            </li>
                            <li><a href="about.php">Company</a>
                            </li>
                            <!--<li><a href="#info">Info</a></li>-->
                            <li><a href="product.php">Product</a>
                            </li>
                            <li><a href="workshop.php">Workshop</a>
                            </li>
                            <li class="active"><a href="#">Contact</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </div>
    </div>
    <section class="footer" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 footer-agile">
                    <h3>Contact Us</h3>
                    <form action="en_feedback.php" method="post">
                        <div class="form-group">
                            <p style="color:white"" class="col-2 col-form-label"">Name</p>
                            <div class="col-10">
                                <input class="form-control" type="text" name="m_nama" id="example-text-input" title="Your Name" required><small class="text-muted">  ex. Adam Johnson </small>
                            </div>
                        </div>
                        <div class="form-group">
                            <p style="color:white">Gender</p>
                            <div class="col-3">
                                <select class="form-control" name="m_gender" id="exampleSelect1" title="Your Gender" required>
                                    <option>Choose this..</option>
                                    <option value = '1'>Male</option>
                                    <option value = '2'>Female</option>
                                </select>
                            </div>

                        </div>
                        <div class="form-group">
                            <p style="color:white">Organization</p>
                            <div class="col-3">
                                <select class="form-control" name="m_organ" id="exampleSelect1" title="Your Organization" required>
                                    <option>Choose one..</option>
                                    <option value = '1'>Individual</option>
                                    <option value = '2'>Company</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <p style="color:white" class="col-2 col-form-label">Email</p>
                            <div class="col-10">
                                <input class="form-control" type="search" name="m_email" id="example-search-input" title="Your E-mail Address" required><small class="text-muted">  ex: adam@mail.com </small>
                            </div>
                        </div>
                        <div class="form-group">
                            <p style="color:white" class="col-2 col-form-label">Address</p>
                            <div class="col-10">
                                <input class="form-control" type="search" name="m_address" id="example-search-input" title="Your Address" required><small class="text-muted">  ex: Jl. Raya Kav.1-2 </small>
                            </div>
                        </div>
                        <div class="form-group">
                            <p style="color:white" class="col-2 col-form-label">Message</p>
                            <div class="col-10">
                                <textarea class="form-control" id="exampleTextarea" name="m_message" rows="3" title="Your Message" required></textarea>
                            </div>
                        </div>
                        <button type="submit" name="submit_fdback" class="btn btn-warning">Submit</button>
                    </form>
<br>
<br>
                </div>
                <div class="col-lg-4 col-md-4 footer-agile">
                </div>
                <div class="col-lg-4 col-md-4 footer-agile">
                    <h3>Our Links</h3>
                    <div class="contact-w3ls">
                        <div class="row">
                            <div class="col-xs-4 contact-agile1">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-8 contact-agile2">
                                <div class="address">
                                    <h4>Visit Us</h4>
                                    <p>Jalan Marunda Tiram No 3 RT 01 RW 01 <br>
										Kel. Marunda Kec Cilincing Jakarta Utara<br>
										Bersebrangan dengan STIP MARUNDA
										</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 contact-agile1">
                                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-8 contact-agile2">
                                <div class="address">
                                    <h4>Mail Us</h4>
                                    <p><a href="mailto:johannes.millenium@yahoo.com">johannes.millenium@yahoo.com</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 contact-agile1">
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                            </div>
                            <div class="col-xs-8 contact-agile2">
                                <div class="address">
                                    <h4>Call Us</h4>
                                    <p>Phone : 021-44853755 </p>
                                    <p>Telephone : 081218181005 </p>
                                    <p>Telephone : 0818874658 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="map">
        <iframe class="googlemaps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.1416038665448!2d106.9570885143127!3d-6.1116301955746195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a20604cba82a3%3A0x543d789b2748b7c7!2sJl.+Marunda+Tim.%2C+Marunda%2C+Cilincing%2C+Kota+Jkt+Utara%2C+DKI+Jakarta+14150!5e0!3m2!1sid!2sid!4v1489170007110" style="border:0" allowfullscreen></iframe>
    </div>
        </div>
    </section>
	<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Location</h3>
                    <p style="color:white">Jalan Marunda Tiram No 3 RT 01 RW 01 <br>
					Kel. Marunda Kec Cilincing Jakarta Utara<br>
					Bersebrangan dengan STIP MARUNDA</p>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Connect with Us</h3>
                    <ul class="list-inline">
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Facebook</span><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Google Plus</span><i class="fa fa-fw fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Twitter</span><i class="fa fa-fw fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Linked In</span><i class="fa fa-fw fa-linkedin"></i></a>
                            </li>
                            <li>
                                <a href="#" class="btn-social btn-outline"><span class="sr-only">Dribble</span><i class="fa fa-fw fa-dribbble"></i></a>
                            </li>
                        </ul>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Millenium Marine</h3>
                    Copyright &copy; Millenium Marine 2017
                </div>
            </div>
        </div>
    </div>
</footer>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/SmoothScroll.min.js"></script>
    <script>
        $(document).ready(function() {
            // Add smooth scrolling to all links in navbar + footer link
            $(".navbar a").on('click', function(event) {

                // Make sure this.hash has a value before overriding default behavior
                if (this.hash !== "") {

                    // Store hash
                    var hash = this.hash;

                    // Using jQuery's animate() method to add smooth page scroll
                    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 900, function() {

                        // Add hash (#) to URL when done scrolling (default click behavior)
                        window.location.hash = hash;
                    });
                } // End if
            });
        })
    </script>
    <!-- back to top -->
    <script src="../js/main.js"></script>
    <!-- /back to top -->
    <!-- js for work section -->
    <script src="../js/jQuery.lightninBox.js"></script>
    <script type="text/javascript">
        $(".lightninBox").lightninBox();
    </script>
    <!-- /js for work section -->
    <!-- js for tabs -->
    <script src="../js/cbpFWTabs.js"></script>
    <script>
        (function() {

            [].slice.call(document.querySelectorAll('.tabs')).forEach(function(el) {
                new CBPFWTabs(el);
            });

        })();
    </script>
    <!-- /js for tabs -->
    <!-- js files for banner -->
    <script src="../js/boot_slider.js" type="text/javascript"></script>
    <!-- /js files for banner -->
    <!-- /js files -->
</body>

</html>