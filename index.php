<html>
    <head>
        <title>Millenia</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='css/custom.css' rel='stylesheet' type='text/css'>
        <link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/animate.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<style>           
            .messagepop {
                background-color: #FFFFFF;
                border: 1px solid #999999;
                cursor: default;
                display: none;
                margin-top: 5px;
                position: relative;
                top: -100px;
                text-align: left;
                width: 400px;
                padding: 25px 25px 20px;
            }
            
            label {
                display: block;
                margin-bottom: 3px;
                padding-left: 15px;
                text-indent: -15px;
            }
            
            .messagepop p,
            .messagepop.div {
                border-bottom: 1px solid #EFEFEF;
                margin: 8px 0;
                padding-bottom: 5px;
            }
            
            .modal-footer {
                background: ##1e2e4d
            }
            
            /* The Close Button */
            .close {
                color: white;
                float: right;
                font-size: 28px;
                font-weight: bold;
            }

            .close:hover,
            .close:focus {
                color: #000;
                text-decoration: none;
                cursor: pointer;
            }

            .modal-header {
                padding: 2px 16px;
                background-color: #1e2e4d;
                color: white;
            }

            .modal-body {padding: 2px 16px;}

            .modal-footer {
                padding: 2px 16px;
                background-color: #1e2e4d;
                color: white;
            }
            .form-style-5{
                    max-width: 500px;
                    padding: 10px 20px;
                    background: #dfe3ee;
                    margin: 10px auto;
                    padding: 20px;
                    border-radius: 8px;
                    font-family: Georgia, "Times New Roman", Times, serif;
                }
                .form-style-5 fieldset{
                    border: none;
                }
                .form-style-5 legend {
                    font-size: 1.4em;
                    margin-bottom: 10px;
                }
                .form-style-5 label {
                    display: block;
                    margin-bottom: 8px;
                }
                .form-style-5 input[type="text"],
                .form-style-5 input[type="date"],
                .form-style-5 input[type="datetime"],
                .form-style-5 input[type="email"],
                .form-style-5 input[type="number"],
                .form-style-5 input[type="search"],
                .form-style-5 input[type="time"],
                .form-style-5 input[type="url"],
                .form-style-5 textarea,
                .form-style-5 select {
                    font-family: Georgia, "Times New Roman", Times, serif;
                    background: rgba(255,255,255,.1);
                    border: none;
                    border-radius: 4px;
                    font-size: 16px;
                    margin: 0;
                    outline: 0;
                    padding: 7px;
                    width: 100%;
                    box-sizing: border-box; 
                    -webkit-box-sizing: border-box;
                    -moz-box-sizing: border-box; 
                    background-color: #e8eeef;
                    color:#8a97a0;
                    -webkit-box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
                    box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
                    margin-bottom: 30px;

                }
                .form-style-5 input[type="text"]:focus,
                .form-style-5 input[type="date"]:focus,
                .form-style-5 input[type="datetime"]:focus,
                .form-style-5 input[type="email"]:focus,
                .form-style-5 input[type="number"]:focus,
                .form-style-5 input[type="search"]:focus,
                .form-style-5 input[type="time"]:focus,
                .form-style-5 input[type="url"]:focus,
                .form-style-5 textarea:focus,
                .form-style-5 select:focus{
                    background: #d2d9dd;
                }
                .form-style-5 select{
                    -webkit-appearance: menulist-button;
                    height:35px;
                }
                .form-style-5 .number {
                    background: #1abc9c;
                    color: #fff;
                    height: 30px;
                    width: 30px;
                    display: inline-block;
                    font-size: 0.8em;
                    margin-right: 4px;
                    line-height: 30px;
                    text-align: center;
                    text-shadow: 0 1px 0 rgba(255,255,255,0.2);
                    border-radius: 15px 15px 15px 0px;
                }

                .form-style-5 input[type="submit"],
                .form-style-5 input[type="button"]
                {
                    position: relative;
                    display: block;
                    padding: 19px 39px 18px 39px;
                    color: #FFF;
                    margin: 0 auto;
                    background: #1e2e4d;
                    font-size: 18px;
                    text-align: center;
                    font-style: normal;
                    width: 100%;
                    border: 1px solid #1e2e4d;
                    border-width: 1px 1px 3px;
                    margin-bottom: 10px;
                }
                .form-style-5 input[type="submit"]:hover,
                .form-style-5 input[type="button"]:hover
                {
                    background: #1e2e4d;
					border: 1px solid #1e2e4d;
                }
        </style>
    </head>
    <body class="animated zoomIn">
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
                        <a class="navbar-brand" href="#"><h1>MILLENIUM MARINE</h1></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">Beranda</a>
                            </li>
                            <li><a href="about.php">Perusahaan</a>
                            </li>
                            <!--<li><a href="#info">Info</a></li>-->
                            <li><a href="product.php">Produk</a>
                            </li>
                            <li><a href="workshop.php">Workshop</a>
                            </li>
                            <li><a href="contact.php">Kontak</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </nav>
        </div>
    </div>
        <!-- fullscreen -->
<div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 style="line-height: 2.4;" class="modal-title" id="memberModalLabel">Welcome!</h3> </div>
                    <center>
                        <div class="modal-body">
                            <div class="form-style-5">
                            <form method="post" action="subs_cus.php">
                            <fieldset>
                            <legend>Choose your Language</legend>
                                <a href="id/index.php"><img border="0" alt="Indonesia" src="indo.png" width="100" height="50">
								<a href="en/index.php"><img border="0" alt="English" src="english.png" width="100" height="50">
                            </fieldset>
                            </form>
                            </div>
                            </div>
                    </center>
                    <div class="modal-footer">
                    </div>
                </div>
            </div>
        </div>
        <div id="carousel-example-generic2" class="carousel slide carousel-fullscreen carousel-fade" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic2" data-slide-to="0"></li>
                <li data-target="#carousel-example-generic2" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic2" data-slide-to="2"></li>
                <li data-target="#carousel-example-generic2" data-slide-to="3"></li>
                <li data-target="#carousel-example-generic2" data-slide-to="4"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active" style="background-image: url('images/1.jpg');">
                    <div class="overlay"></div>
                    <div class="carousel-caption">
                        <!--<h1 class="animated bounceInDown" style="font-size: 4.5vw;">Produk Marine</h1>
                        <p class="super-paragraph">This is a demo for the <a href="https://bootstrapious.com/p/bootstrap-carousel">Bootstrap Carousel Guide</a> by <a href="https://bootstrapious.com">Bootstrapious.com</a>.</p>-->
                    </div>
                </div>
                <div class="item" style="background-image: url('images/2.jpg');">
                    <div class="overlay"></div>
                    <div class="carousel-caption">
                       <!-- <h1 class="animated bounceInDown" style="font-size: 4.5vw;">Produk Marine</h1>
                        <p class="super-paragraph">This is a demo for the <a href="https://bootstrapious.com/p/bootstrap-carousel">Bootstrap Carousel Guide</a> by <a href="https://bootstrapious.com">Bootstrapious.com</a>.</p>-->
                    </div>
                </div>
                <div class="item" style="background-image: url('images/3.jpg');">
                    <div class="overlay"></div>
                    <div class="carousel-caption">
                         <!--<h1 class="animated bounceInDown" style="font-size: 4.5vw;">Produk Marine</h1>
                       <p class="super-paragraph">This is a demo for the <a href="https://bootstrapious.com/p/bootstrap-carousel">Bootstrap Carousel Guide</a> by <a href="https://bootstrapious.com">Bootstrapious.com</a>.</p>-->
                    </div>
                </div>
                <div class="item" style="background-image: url('images/4.jpg');">
                    <div class="overlay"></div>
                    <div class="carousel-caption">
                       <!-- <h1 class="animated bounceInDown" style="font-size: 4.5vw;">Produk Marine</h1>
                        <p class="super-paragraph">This is a demo for the <a href="https://bootstrapious.com/p/bootstrap-carousel">Bootstrap Carousel Guide</a> by <a href="https://bootstrapious.com">Bootstrapious.com</a>.</p>-->
                    </div>
                </div>
                <div class="item" style="background-image: url('images/5.jpg');">
                    <div class="overlay"></div>
                    <div class="carousel-caption">
                         <!--<h1 class="animated bounceInDown" style="font-size: 4.5vw;">Produk Marine</h1>
                       <p class="super-paragraph">This is a demo for the <a href="https://bootstrapious.com/p/bootstrap-carousel">Bootstrap Carousel Guide</a> by <a href="https://bootstrapious.com">Bootstrapious.com</a>.</p>-->
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic2" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic2" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        
<script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
        <script src="js/jquery-1.12.0.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
		<script>
            $(document).ready(function () {
                $('#memberModal').modal('show');
            });
        </script>
    </body>
</html>
