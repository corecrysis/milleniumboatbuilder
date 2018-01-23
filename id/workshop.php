<?php
include('../koneksi.php');
session_start();
$query1 = "select  * from tb_gallery g join tb_prod_gallery pg on g.m_id_gambar = pg.m_id_gambar where  g.m_position = 'workshop' group by g.m_id_gambar ORDER BY g.m_id_gambar DESC";
           $result1 = $dbh->query($query1)->fetchAll();

?>
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
                            <li><a href="index.php">Beranda</a>
                            </li>
                            <li><a href="about.php">Perusahaan</a>
                            </li>
                            <!--<li><a href="#info">Info</a></li>-->
                            <li><a href="product.php">Produk</a>
                            </li>
                            <li class="active"><a href="#">Workshop</a>
                            </li>
                            <li><a href="contact.php">Kontak</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </div>
    </div>
    
    <section class="work" id="work">
        <div class="container">
            <style>
                .button {
                    border-radius: 4px;
                    background-color: #f4851e;
                    border: none;
                    color: #FFFFFF;
                    text-align: center;
                    font-size: 20px;
                    width: 200px;
                    transition: all 0.5s;
                    cursor: pointer;
                    margin: 5px;
					padding: 6px;
                }
                .button span {
                    cursor: pointer;
                    display: inline-block;
                    position: relative;
                    transition: 0.5s;
                }
                .button span:after {
                    content: '\00bb';
                    position: absolute;
                    opacity: 0;
                    top: 0;
                    right: -20px;
                    transition: 0.5s;
                }
                .button:hover span {
                    padding-right: 25px;
                }
                .button:hover span:after {
                    opacity: 1;
                    right: 0;
                }
            </style>
<!--            <button class="button" onclick="window.location.href='index.html'"><span>Back to Home </span>
            </button>-->
            <h3 class="text-center">Koleksi Workshop</h3>
            <p class="text-center"></p>
            <section>
                <div class="tabs tabs-style-iconbox">
                    <nav>
                        <ul>
                            <li><a href="#section-iconbox-1" class="icon"><span>Semua Workshop</span></a>
                            </li>
                        </ul>
                    </nav>
                    <div class="content-wrap">
                        <section id="section-iconbox-1">
                            <?php foreach($result1 as $r1){ ?>
                            <div class="col-lg-3 col-md-3 col-sm-6 works-w3ls">
                                <a href="sess_as_work.php?id=<?php echo $r1['m_id_gambar']; ?>">
                                    <img src="<?php echo $r1['p_tmp_pict']; ?>" width="400px" height="400px" alt="work">
                                    <div class="b-wrapper">
                                        <i class="fa fa-search-plus" aria-hidden="true"></i>
                                        <h5><?php echo $r1['m_nama_gambar']; ?></h5>
                                        <!-- <p><?php echo $r1['m_desc_gambar']; ?></p>-->
                                    </div>
                                </a>
                            </div>
                            <?php } ?>
                            
                        </section>
                        
                    </div>
                    <!-- /content -->
                </div>
                <!-- /tabs -->
            </section>
        </div>
    </section>
	<!-- /Footer -->
	<footer class="text-center">
    <div class="footer-above">
        <div class="container">
            <div class="row">
                <div class="footer-col col-md-4">
                    <h3>Lokasi</h3>
                    <p style="color:white">Jalan Marunda Tiram No 3 RT 01 RW 01 <br>
					Kel. Marunda Kec Cilincing Jakarta Utara<br>
					Bersebrangan dengan STIP MARUNDA</p>
                </div>
                <div class="footer-col col-md-4">
                    <h3>Hubungi Kami</h3>
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
    <!-- js files -->
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