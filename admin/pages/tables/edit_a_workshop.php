<?php
include('../../../koneksi.php');
session_start();
       if (!isset($_SESSION['id_admin'])){
     header( 'Location:../../index.php');
 } else {
  $id2 = $_SESSION['id3'];
$jut = $_SESSION['id_admin'];
$query = "SELECT * FROM tb_user where a_id_user='$jut'";
           $result = $dbh->query($query)->fetch();
           $query1 = "SELECT * FROM `tb_gallery` join tb_prod_gallery on tb_gallery.m_id_gambar = tb_prod_gallery.m_id_gambar WHERE tb_gallery.m_id_gambar = '$id2'";
           $result1 = $dbh->query($query1)->fetch();
$query2 = "SELECT * FROM `tb_gallery` join tb_prod_gallery on tb_gallery.m_id_gambar = tb_prod_gallery.m_id_gambar WHERE tb_gallery.m_id_gambar = '$id2'";
           $result2 = $dbh->query($query2)->fetchAll();
           $i=0;
           foreach ( $result2 as $r2 ) 
           {
               $r3[$i] = $r2['p_tmp_pict']; 
               $id_product[$i] = $r2['p_id_product'];
                   $i++;               
           }

if(isset($_POST['submit'])){
                $m_judul = $_POST['m_judul'];
                //echo $m_judul;
                $deskripsi_id = $_POST['deskripsi_id'];
                $deskripsi_en = $_POST['deskripsi_en'];
                
	

	
$rand_text = rand(99999,239028302);
	if(!empty($m_judul) || !empty($deskripsi_id) || !empty($deskripsi_en)  ){ 
             $query1 = "UPDATE tb_gallery SET m_judul = '$m_judul' , m_desc_id = '$deskripsi_id', m_desc_en = '$deskripsi_en' WHERE m_id_gambar = '$id2'";
            $con2=$dbh->exec($query1);
            
        }

	
if($_FILES['upload']['name'] == null ){	
	// tetap, tidak upload gambar
    
    
   
       
        
        $query = "UPDATE tb_gallery SET m_judul = '$m_judul' , m_desc_id = '$deskripsi_id', m_desc_en = '$deskripsi_en' WHERE m_id_gambar = '$id2'";
$con=$dbh->exec($query);
if($con !== false) 
{
    //echo 'sukses';
    echo "<script type='text/javascript'>alert('Anda berhasil mengubah data!.');document.location='workshop.php'</script>";
    //echo '<p>Selamat, anda telah berhasil mengubah data!</p>';
	//	header('location:./settings.php');
}else{
    //echo 'gagal';
    echo "<script type='text/javascript'>alert('upload failed, please check your internet connection or image files');document.location='workshop.php'</script>";
    //echo '<a href="indiv_edit.php">Kembali</a>';
}
    
		/*editProfileTetap($_POST['y_name'],$_POST['y_alamathome'],$_POST['y_kdposhome'],$_POST['y_tplahir'],$_POST['y_ttl'],$_POST['y_phone'],$_POST['y_idline'],$_POST['y_email'],$_POST['y_asalsch'],$_POST['y_alamatsch'],$_POST['y_kdpos'],$_POST['y_phonesch'],$_POST['y_class'],$_POST['y_ta'],$_POST['y_pembina'],$_POST['y_phonebina'],$_POST['y_idlinebina'],$_POST['y_emailbina']);*/
		
	} else {
    if($_FILES['upload']['name'] != null){
	// update gambar
		$lokasi_1=$r3[0];
		$lokasi_1="../../".$lokasi_1;
		$nama_gambar_1 = $_FILES['upload']['name'];
		$tmp_gambar_1 = $_FILES['upload']['tmp_name'];
		
		$rand_gambar_1= $rand_text.$nama_gambar_1;
        $new_location = "../../../images/".$rand_gambar_1;
        $new_location1 = "../images/".$rand_gambar_1;
        
        $imageFileType_1 = pathinfo($new_location,PATHINFO_EXTENSION);
		$check = getimagesize($tmp_gambar_1);
	    if($check !== false) {
	        $uploadOk = 1;
	    } else {
	        $uploadOk = 0;
	    }
	    if ($_FILES['upload']['size'] > 15000000) {
            echo "<script type='text/javascript'>alert('Sorry, your file is too large.');document.location='workshop.php'</script>";
		   // echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType_1 != "jpg" && $imageFileType_1 != "png" && $imageFileType_1 != "jpeg" && $imageFileType_1 != "PNG" && $imageFileType_1 != "JPG" && $imageFileType_1 != "JPEG"
		 ) {
            echo "<script type='text/javascript'>alert('Sorry, only JPG, JPEG, & PNG files are allowed.');document.location='workshop.php'</script>";
		   // echo "Sorry, only JPG, JPEG, & PNG files are allowed.";
		    $uploadOk = 0;
		}
        
        
    }
       
       
		//$new_location = "../img/form/individu/ynec/".$rand_gambar;
		//$fix_location = $rand_gambar;
		
		if ($uploadOk == 1){
            if($_FILES['upload']['name'] != null){
			if (move_uploaded_file($tmp_gambar_1, $new_location)){
            unlink($lokasi_1);
            $prod0 = $id_product[0];
                $pict1= "UPDATE tb_prod_gallery SET p_tmp_pict = '$new_location1' WHERE p_id_product = '$prod0'";
                
                $con_1=$dbh->exec($pict1);
                
            } else {
		// upload gagal
                echo "<script type='text/javascript'>alert('upload failed, please check your internet connection or image files');document.location='workshop.php'</script>";
				
			}
            }
            
            echo "<script type='text/javascript'>alert('Anda berhasil mengubah Data.');document.location='workshop.php'</script>";
			// upload berhasil
           }else{
            echo "<script type='text/javascript'>alert('Format foto yang di upload tidak sesuai!');document.location='workshop.php'</script>";
			//echo "Format foto yang di upload tidak sesuai!";
		} 
		
                
        
       
        

/*if($dbh->exec($query1))
{
   // echo 'sukses';
    
}
else{
        $errors = $dbh->errorInfo();
    echo($errors);
    //echo 'gagal';
    echo "<script type='text/javascript'>alert('upload failed, please check your internet connection or image files');document.location='../user/profile.php'</script>";
    //echo '<a href="indiv_edit.php">Kembali</a>';
}	editProfileSemua($_POST['y_name'],$_POST['y_alamathome'],$_POST['y_kdposhome'],$_POST['y_tplahir'],$_POST['y_ttl'],$_POST['y_phone'],$_POST['y_idline'],$_POST['y_email'],$_POST['y_asalsch'],$_POST['y_alamatsch'],$_POST['y_kdpos'],$_POST['y_phonesch'],$_POST['y_class'],$_POST['y_ta'],$_POST['y_pembina'],$_POST['y_phonebina'],$_POST['y_idlinebina'],$_POST['y_emailbina'],$new_location);*/
        }
			 
		
	
}
}
?>