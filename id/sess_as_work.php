<?php  
include('../koneksi.php');
session_start();
    $dx = $_GET['id'];
    $_SESSION['loop1']=$dx;
//echo $dx;
header( 'Location:detail_workshop.php');
?>