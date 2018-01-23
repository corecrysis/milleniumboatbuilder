<?php
include('../koneksi.php');
session_start();
$ax =  $_SESSION['loop1'];

$query="select  * from tb_gallery g join tb_prod_gallery pg on g.m_id_gambar = pg.m_id_gambar where g.m_id_gambar = $ax  ";
$result = $dbh->query($query)->fetch();
$query1="select  * from tb_gallery g join tb_prod_gallery pg on g.m_id_gambar = pg.m_id_gambar where g.m_id_gambar = $ax ";
$result1 = $dbh->query($query1)->fetchAll();
?>
<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Web Katalog</title>
<link href="../css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="../css/style1.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Web Katalog" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<link href="../css/animate.css" rel="stylesheet" type="text/css" media="all" />
<style>
            footer {
  color: white;
}
footer h3 {
  margin-bottom: 30px;
}
footer .footer-above {
  padding-top: 50px;
  background-color: #2C3E50;
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
<!-- start menu -->
<script src="../js/bootstrap.min.js"></script>
<script src="../js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="../js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
</head>
<style>
.alter {
	font-size : 20px;
	font-weight: bold;
}
        /*-- navigation --*/
.navbar-wrapper {
	position: absolute;
	top: 0;
	right: 0;
	left: 0;
	z-index: 20;
}
.navbar-wrapper > .container {
	padding-right: 0;
	padding-left: 0;
}
.navbar-wrapper .navbar {
	padding-right: 15px;
	padding-left: 15px;
}
.navbar-wrapper .navbar .container {
	width: auto;
}

@media (min-width: 768px) {
	.navbar-wrapper {
    margin-top: 50px;
}
	.navbar-wrapper .container {
    padding-right: 15px;
    padding-left: 15px;
}
	.navbar-wrapper .navbar {
    padding-right: 0;
    padding-left: 0;
}
	.navbar-wrapper .navbar {
    border-radius: 4px;
}
}

.navbar-inverse .navbar-collapse, .navbar-inverse .navbar-form {
    border-color: rgba(16, 16, 16, 0);
}
.navbar-inverse {
    background-color:transparent;
    border-color:transparent;
}
.navbar-brand {
    float: left;
    height: 50px;
    padding: 5px 15px;
    line-height: 20px;
}
.navbar-brand h1 {
	font-size:35px;
	font-weight:normal;
	color:#000;
	text-transform:uppercase;
	font-family: 'Raleway', sans-serif;
}
.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover {
    color: #000;
    background-color:transparent;
}
.navbar-inverse .navbar-nav>li>a {
    color: #000000;
    font-size: 17px;
    text-transform: uppercase;
    font-weight: bold;
}
.navbar>.container .navbar-brand, .navbar>.container-fluid .navbar-brand {
    position: absolute;
    top: 14px;
    right: 0;
}
.nav>li {
	margin-right:25px;
}
.nav>li>a {
	padding:20px 20px 15px;
}
/*-- /navigation --*/
/*-- navigation effects --*/
.cl-effect-7 li a::before,
.cl-effect-7 li a::after {
	position: absolute;
	top: 100%;
	left: 0;
	width: 100%;
	height: 3px;
	background: #000;
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
<body class="animated zoomIn">
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
                        <a class="navbar-brand" href="#"></a>
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
                            <li class="active"><a href="#">Workshop</a>
                            </li>
                            <li><a href="contact.php">Contact</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </div>
    </div>
			
				
		<div class="clearfix"> </div>
			<!---pop-up-box---->   
					<link href="../css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="../js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
				 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
				</script>			
	<!---->		
		</div>
	</div>
</div>

<div class="single">

<div class="container">
<div class="col-md-12">
   
	<div class="col-md-12">
        <?php foreach($result1 as $r1){ ?>
               <center> <img class="img-responsive img-rounded center" src="<?php echo $r1['p_tmp_pict']; ?>" alt=""></center>
        <?php } ?>
            </div>	
<div class="col-md-12 single-top-in">
						<div class="single-para simpleCart_shelfItem">
							<h2><?php echo $result['m_nama_gambar']; ?></h2>
							<hr style="height:3px;border:none;color:#333;background-color:#333;">
							<h2>Deskripsi</h2>
							<p><?php echo $result['m_desc_gambar']; ?></p>							
							<hr style="height:1px;border:none;color:#333;background-color:#333;">
							<!-- Buka Tutup 1, JS nya dibawah (ID sama class gak boleh sama) -->
							
							
							
						</div>					
					</div>	
</div>
<!----->

		<div class="clearfix"> </div>
	</div>
	</div>
<!-- /Footer -->
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
<!--footer-->
<!-- slide -->
<script src="../js/jquery.min.js"></script>
<script src="../js/imagezoom.js"></script>
<!-- start menu -->
<script src="../js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
<script src="../js/simpleCart.min.js"> </script>
<!--initiate accordion-->
						<script type="text/javascript">
							$(function() {
							    var menu_ul = $('.menu-drop > li > ul'),
							           menu_a  = $('.menu-drop > li > a');
							    menu_ul.hide();
							    menu_a.click(function(e) {
							        e.preventDefault();
							        if(!$(this).hasClass('active')) {
							            menu_a.removeClass('active');
							            menu_ul.filter(':visible').slideUp('normal');
							            $(this).addClass('active').next().stop(true,true).slideDown('normal');
							        } else {
							            $(this).removeClass('active');
							            $(this).next().stop(true,true).slideUp('normal');
							        }
							    });
							
							});
						</script>
						<!-- FlexSlider -->
  <script defer src="../js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>
<!---pop-up-box---->
					<link href="../css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
					<script src="../js/jquery.magnific-popup.js" type="text/javascript"></script>
					<!---//pop-up-box---->
					 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
						
						$(document).ready(function() {
							$('#showmenu').click(function() {
							$('.coco').toggle("slide");
							});
							//Abaikan yang atas, mulai dari showmenu2 s/d showmenu ke-n (sesuaikan)
							$('#showmenu2').click(function() {
							$('.coco2').toggle("slide");
							$("button", this).toggleClass("fa fa-plus-circle fa fa-minus-circle");
							});
							//showmenu3
							$('#showmenu3').click(function() {
							$('.coco3').toggle("slide");
							$("button", this).toggleClass("fa fa-plus-circle fa fa-minus-circle");
							});
							//showmenu4
							$('#showmenu4').click(function() {
							$('.coco4').toggle("slide");
							$("button", this).toggleClass("fa fa-plus-circle fa fa-minus-circle");
							});
						});
				</script>	
</body>
</html>