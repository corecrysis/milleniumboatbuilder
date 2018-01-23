<?php
include('../koneksi.php');
session_start();
       if (!isset($_SESSION['id_admin'])){
    
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login System</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #eee;
        }
        .row {
            margin: 100px auto;
            width: 300px;
            text-align: center;
        }
        .login {
            background-color: #fff;
            padding: 20px;
            margin-top: 20px;
        }
    </style>
    <!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

    <div class="container">
        <div class="row">
            <!--<img src="img/logo-gmf2.png" alt="Smiley face" width="300" height="70">-->
            <div class="login">

                <form action="logon.php" method="post" role="form">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Username" required autofocus />
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required autofocus />
                    </div>

                    <div class="form-group">
                        <input type="submit" name="login" class="btn btn-primary btn-block" value="submit" />
                    </div>
                </form>




            </div>
            Copyright &copy; 2017
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>
<?php 
       } else {
$jut = $_SESSION['id_admin'];
$query = "SELECT * FROM tb_user where a_id_user='$jut'";
           $result = $dbh->query($query)->fetch();
           $query1 = "SELECT * FROM tb_feed_back";
           $result1 = $dbh->query($query1)->fetchAll();
           header( 'Location:dashboard.php');
       } ?>