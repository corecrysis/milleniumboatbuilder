<?php
include('../../../koneksi.php');
session_start();
       if (!isset($_SESSION['id_admin'])){
     header( 'Location:../../index.php');
 } else {
  $id2 = $_SESSION['id2'];
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
                $m_p_lmld_seluruh = $_POST['m_p_lmld_seluruh'];
                $m_p_lmld_moulded = $_POST['m_p_lmld_moulded'];
                $m_p_ga_lwl = $_POST['m_p_ga_lwl'];
                $m_l_max = $_POST['m_l_max'];
                $m_l_bwl = $_POST['m_l_bwl'];
                $m_t_dmax = $_POST['m_t_dmax'];
                $m_sarat_air = $_POST['m_sarat_air'];
                $m_displacement = $_POST['m_displacement'];
                $m_dead_weight = $_POST['m_dead_weight'];
                $m_bahan_bakar = $_POST['m_bahan_bakar'];
                $m_air_tawar = $_POST['m_air_tawar'];
                $m_penumpang = $_POST['m_penumpang'];
                $m_crew = $_POST['m_crew'];
                $m_mesin_omfs = $_POST['m_mesin_omfs'];
                $m_speed_mcr = $_POST['m_speed_mcr'];
                $m_speedj_mcr = $_POST['m_speedj_mcr'];
                $m_range_mcr = $_POST['m_range_mcr']; 
	$uploadOk = 1;

//    var_dump($_FILES['upload1']['name']);
//    var_dump($_FILES['upload2']['name']);
//    var_dump($_FILES['upload3']['name']);
//    var_dump($_FILES['upload4']['name']);
//    var_dump($_FILES['upload5']['name']);
//    die();
$rand_text = rand(99999,239028302);
	if(!empty($m_judul) || !empty($deskripsi_id) || !empty($deskripsi_en) || !empty($m_p_lmld_seluruh) || !empty($m_p_lmld_moulded) || !empty($m_p_ga_lwl) || !empty($m_l_max) || !empty($m_l_bwl) || !empty($m_t_dmax) || !empty($m_sarat_air) || !empty($m_displacement)  || !empty($m_dead_weight) || !empty($m_bahan_bakar) || !empty($m_air_tawar) || !empty($m_penumpang) || !empty($m_crew) || !empty($m_mesin_omfs) || !empty($m_speed_mcr)  || !empty($m_speedj_mcr) ||  !empty($m_range_mcr)    ){ 
             $query1 = "UPDATE tb_gallery SET m_judul = '$m_judul' , m_desc_id = '$deskripsi_id', m_desc_en = '$deskripsi_en', m_p_lmld_seluruh = '$m_p_lmld_seluruh', m_p_lmld_moulded = '$m_p_lmld_moulded', m_p_ga_lwl = '$m_p_ga_lwl', m_l_max = '$m_l_max',m_l_bwl = '$m_l_bwl',m_t_dmax = '$m_t_dmax',m_sarat_air = '$m_sarat_air',m_displacement = '$m_displacement', m_dead_weight = '$m_dead_weight', m_bahan_bakar = '$m_bahan_bakar', m_air_tawar = '$m_air_tawar',m_penumpang = '$m_penumpang',m_crew = '$m_crew',m_mesin_omfs = '$m_mesin_omfs',m_speed_mcr = '$m_speed_mcr', m_speedj_mcr = '$m_speedj_mcr', m_range_mcr = '$m_range_mcr' WHERE m_id_gambar = '$id2'";
            $con2=$dbh->exec($query1);
            
        }

	
if($_FILES['upload1']['name'] == "" && $_FILES['upload2']['name'] == "" && $_FILES['upload3']['name'] == "" && $_FILES['upload4']['name'] == "" && $_FILES['upload5']['name'] == ""){	
	// tetap, tidak upload gambar
    
    
   
       
        
        $query = "UPDATE tb_gallery SET m_nama_gambar = '$m_judul' , m_desc_id = '$deskripsi_id', m_desc_en = '$deskripsi_en', m_p_lmld_seluruh = '$m_p_lmld_seluruh', m_p_lmld_moulded = '$m_p_lmld_moulded', m_p_ga_lwl = '$m_p_ga_lwl', m_l_max = '$m_l_max',m_l_bwl = '$m_l_bwl',m_t_dmax = '$m_t_dmax',m_sarat_air = '$m_sarat_air',m_displacement = '$m_displacement', m_dead_weight = '$m_dead_weight', m_bahan_bakar = '$m_bahan_bakar', m_air_tawar = '$m_air_tawar',m_penumpang = '$m_penumpang',m_crew = '$m_crew',m_mesin_omfs = '$m_mesin_omfs',m_speed_mcr = '$m_speed_mcr', m_speedj_mcr = '$m_speedj_mcr', m_range_mcr = '$m_range_mcr' WHERE m_id_gambar = '$id2'";
$con=$dbh->exec($query);
//    var_dump($con);
//    die();
if($con !== false) 
{
    //echo 'sukses';
    echo "<script type='text/javascript'>alert('Anda berhasil mengubah data!.');document.location='product.php'</script>";
    //echo '<p>Selamat, anda telah berhasil mengubah data!</p>';
	//	header('location:./settings.php');
}else{
    //echo 'gagal';
    echo "<script type='text/javascript'>alert('aupload failed, please check your internet connection or image files');document.location='product.php'</script>";
    //echo '<a href="indiv_edit.php">Kembali</a>';
}
    
		/*editProfileTetap($_POST['y_name'],$_POST['y_alamathome'],$_POST['y_kdposhome'],$_POST['y_tplahir'],$_POST['y_ttl'],$_POST['y_phone'],$_POST['y_idline'],$_POST['y_email'],$_POST['y_asalsch'],$_POST['y_alamatsch'],$_POST['y_kdpos'],$_POST['y_phonesch'],$_POST['y_class'],$_POST['y_ta'],$_POST['y_pembina'],$_POST['y_phonebina'],$_POST['y_idlinebina'],$_POST['y_emailbina']);*/
		
	} else {
    if($_FILES['upload1']['name'] != null){
	// update gambar
		$lokasi_1=$r3[0];
		$lokasi_1="../../".$lokasi_1;
		$nama_gambar_1 = $_FILES['upload1']['name'];
		$tmp_gambar_1 = $_FILES['upload1']['tmp_name'];
		
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
	    if ($_FILES['upload1']['size'] > 15000000) {
            echo "<script type='text/javascript'>alert('Sorry, your file is too large.');document.location='product.php'</script>";
		   // echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType_1 != "jpg" && $imageFileType_1 != "png" && $imageFileType_1 != "jpeg" && $imageFileType_1 != "PNG" && $imageFileType_1 != "JPG" && $imageFileType_1 != "JPEG"
		 ) {
            echo "<script type='text/javascript'>alert('Sorry, only JPG, JPEG, & PNG files are allowed.');document.location='product.php'</script>";
		   // echo "Sorry, only JPG, JPEG, & PNG files are allowed.";
		    $uploadOk = 0;
		}
        
        
    }
       if($_FILES['upload2']['name'] != null){
	// update gambar
		$lokasi_2=$r3[1];
		$lokasi_2="../../".$lokasi_2;
		$nama_gambar_2 = $_FILES['upload2']['name'];
		$tmp_gambar_2 = $_FILES['upload2']['tmp_name'];
		
		$rand_gambar_2= $rand_text.$nama_gambar_2;
        $new_locationeks = "../../../images/".$rand_gambar_2;
        $new_locationeks1 = "../images/".$rand_gambar_2;
           
           
           $imageFileType_2 = pathinfo($new_locationeks,PATHINFO_EXTENSION);
		$check = getimagesize($tmp_gambar_2);
	    if($check !== false) {
	        $uploadOk = 1;
	    } else {
	        $uploadOk = 0;
	    }
	    if ($_FILES['upload2']['size'] > 15000000) {
            echo "<script type='text/javascript'>alert('Sorry, your file is too large.');document.location='product.php'</script>";
		   // echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType_2 != "jpg" && $imageFileType_2 != "png" && $imageFileType_2 != "jpeg" && $imageFileType_2 != "PNG" && $imageFileType_2 != "JPG" && $imageFileType_2 != "JPEG"
		 ) {
            echo "<script type='text/javascript'>alert('Sorry, only JPG, JPEG, & PNG files are allowed.');document.location='product.php'</script>";
		   // echo "Sorry, only JPG, JPEG, & PNG files are allowed.";
		    $uploadOk = 0;
		}
           
           
    }
          if($_FILES['upload3']['name'] != null){
	// update gambar
		$lokasi_3=$r3[2];
		$lokasi_3="../../".$lokasi_3;
		$nama_gambar_3 = $_FILES['upload3']['name'];
		$tmp_gambar_3 = $_FILES['upload3']['tmp_name'];
		
		$rand_gambar_3= $rand_text.$nama_gambar_3;
        $new_locationint = "../../../images/".$rand_gambar_3;
        $new_locationint1 = "../images/".$rand_gambar_3;
              
              
              $imageFileType_3 = pathinfo($new_locationint,PATHINFO_EXTENSION);
		$check = getimagesize($tmp_gambar_3);
	    if($check !== false) {
	        $uploadOk = 1;
	    } else {
	        $uploadOk = 0;
	    }
	    if ($_FILES['upload3']['size'] > 15000000) {
            echo "<script type='text/javascript'>alert('Sorry, your file is too large.');document.location='product.php'</script>";
		   // echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType_3 != "jpg" && $imageFileType_3 != "png" && $imageFileType_3 != "jpeg" && $imageFileType_3 != "PNG" && $imageFileType_3 != "JPG" && $imageFileType_3 != "JPEG"
		 ) {
            echo "<script type='text/javascript'>alert('Sorry, only JPG, JPEG, & PNG files are allowed.');document.location='product.php'</script>";
		   // echo "Sorry, only JPG, JPEG, & PNG files are allowed.";
		    $uploadOk = 0;
		}
              
              
    }

             if($_FILES['upload4']['name'] != null){
	// update gambar
		$lokasi_4=$result1['m_path_spec'];
		$lokasi_4="../../".$lokasi_4;
		$nama_gambar_4 = $_FILES['upload4']['name'];
		$tmp_gambar_4 = $_FILES['upload4']['tmp_name'];
		
		$rand_gambar_4= $rand_text.$nama_gambar_4;
        $new_locationpdf = "../../../pdf/".$rand_gambar_4;
        $new_locationpdf1 = "../pdf/".$rand_gambar_4;
                 
                 
    $imageFileType_4 = pathinfo($new_locationpdf,PATHINFO_EXTENSION);
		
	    if ($_FILES['upload4']['size'] > 15000000) {
            echo "<script type='text/javascript'>alert('Sorry, your file is too large.');document.location='product.php'</script>";
		   // echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType_4 != "pdf" && $imageFileType_4 != "PDF"
		 ) {
            echo "<script type='text/javascript'>alert('Sorry, only JPG, JPEG, & PNG files are allowed.');document.location='product.php'</script>";
		   // echo "Sorry, only JPG, JPEG, & PNG files are allowed.";
		    $uploadOk = 0;
		}             
                 
                 
                 
    }
    if($_FILES['upload5']['name'] != null){
	// update gambar
		$lokasi_5=$result1['m_path_teknis'];
		$lokasi_5="../../".$lokasi_5;
		$nama_gambar_5 = $_FILES['upload5']['name'];
		$tmp_gambar_5 = $_FILES['upload5']['tmp_name'];
		
		$rand_gambar_5= $rand_text.$nama_gambar_5;
        $new_locationpdfteknis = "../../../pdf/".$rand_gambar_5;
        $new_locationpdfteknis1 = "../pdf/".$rand_gambar_5;
                 
                 
    $imageFileType_5 = pathinfo($new_locationpdfteknis,PATHINFO_EXTENSION);
		
	    if ($_FILES['upload5']['size'] > 15000000) {
            echo "<script type='text/javascript'>alert('Sorry, your file is too large.');document.location='product.php'</script>";
		   // echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType_5 != "pdf" && $imageFileType_5 != "PDF"
		 ) {
            echo "<script type='text/javascript'>alert('Sorry, only JPG, JPEG, & PNG files are allowed.');document.location='product.php'</script>";
		   // echo "Sorry, only JPG, JPEG, & PNG files are allowed.";
		    $uploadOk = 0;
		}             
                 
                 
                 
    }
       
		//$new_location = "../img/form/individu/ynec/".$rand_gambar;
		//$fix_location = $rand_gambar;
		
		if ($uploadOk == 1){
            if($_FILES['upload1']['name'] != null){
			if (move_uploaded_file($tmp_gambar_1, $new_location)){
            unlink($lokasi_1);
            $prod0 = $id_product[0];
                $pict1= "UPDATE tb_prod_gallery SET p_tmp_pict = '$new_location1' WHERE p_id_product = '$prod0'";
                
                $con_1=$dbh->exec($pict1);
                
            } else {
		// upload gagal
                echo "<script type='text/javascript'>alert('upload failed, please check your internet connection or image files');document.location='product.php'</script>";
				
			}
            }
            if($_FILES['upload2']['name'] != null){
			if (move_uploaded_file($tmp_gambar_2, $new_locationeks)){
            unlink($lokasi_2);
            $prod1 = $id_product[1];
                $pict2= "UPDATE tb_prod_gallery SET p_tmp_pict = '$new_locationeks1' WHERE p_id_product = '$prod1'";
                
                $con_2=$dbh->exec($pict2);
                
            } else {
		// upload gagal
                echo "<script type='text/javascript'>alert('upload failed, please check your internet connection or image files');document.location='product.php'</script>";
				
			}
            }
            if($_FILES['upload3']['name'] != null){
			if (move_uploaded_file($tmp_gambar_3, $new_locationint)){
            unlink($lokasi_3);
            $prod2 = $id_product[2];
                $pict3= "UPDATE tb_prod_gallery SET p_tmp_pict = '$new_locationint1' WHERE p_id_product = '$prod2'";
                
                $con_3=$dbh->exec($pict3);
                
            } else {
		// upload gagal
                echo "<script type='text/javascript'>alert('upload failed, please check your internet connection or image files');document.location='product.php'</script>";
				
			}
            }
            if($_FILES['upload4']['name'] != null){
			if (move_uploaded_file($tmp_gambar_4, $new_locationpdf)){
            unlink($lokasi_4);
                $pict4= "UPDATE tb_gallery SET m_path_spec = '$new_locationpdf1' WHERE m_id_gambar = '$id2'";
                
                $con_4=$dbh->exec($pict4);
                
            } else {
		// upload gagal
                echo "<script type='text/javascript'>alert('upload failed, please check your internet connection or image files');document.location='product.php'</script>";
				
			}
            }
            if($_FILES['upload5']['name'] != null){
			if (move_uploaded_file($tmp_gambar_5, $new_locationpdfteknis)){
            unlink($lokasi_5);
                $pict5= "UPDATE tb_gallery SET m_path_teknis = '$new_locationpdfteknis1' WHERE m_id_gambar = '$id2'";
                
                $con_5=$dbh->exec($pict5);
                
            } else {
		// upload gagal
                echo "<script type='text/javascript'>alert('upload failed, please check your internet connection or image files');document.location='product.php'</script>";
				
			}
            }
            echo "<script type='text/javascript'>alert('Anda berhasil mengubah Data.');document.location='product.php'</script>";
			// upload berhasil
           }else{
            echo "<script type='text/javascript'>alert('Format foto yang di upload tidak sesuai!');document.location='product.php'</script>";
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