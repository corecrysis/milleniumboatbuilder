<?php
session_start();
include_once('../koneksi.php');
//$coba=$_POST[$aku];

if ( isset($_POST['login']) ) {
	$sth = $dbh->prepare( "SELECT * FROM tb_user WHERE a_user_name=? and a_pass=? " );
   
    $aku = $_POST['password'];
    $coba = MD5("malupula" . $aku);
    //$result1 =  $_POST['status'];
	//$result2 =  $_POST['a_status'];
	$sth->execute( array( $_POST['username'], $coba ) );
   
	$result = $sth->fetch( PDO::FETCH_OBJ );
  
   

    
  //  $result1 =  ;
//	$result2 =  ;
	
	if ( $result ) {
       if($result->a_id_user==1)
           
        {
            $_SESSION['id_admin'] = $result->a_id_user;
            header( 'Location:dashboard.php');
        }
        else if($result->a_id_user==2){
		
		$_SESSION['id_admin'] = $result->a_id_user;
		 echo "<script type='text/javascript'>alert('Anda berhasil Melakukan Login.');document.location='dashboard.php'</script>";
		
		} else {
            $_SESSION['id_admin'] = $result->a_id_user;
		 echo "<script type='text/javascript'>alert('Anda berhasil Melakukan Login.');document.location='dashboard.php'</script>";
        }
	} else 
		echo "<script type='text/javascript'>alert('Anda Gagal Login, Isikan Username dan Password dengan benar');document.location='index.php'</script>";
        
}
?>