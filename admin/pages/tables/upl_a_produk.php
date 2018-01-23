<?php
include('../../../koneksi.php');
session_start();
       if (!isset($_SESSION['id_admin'])){
     header( 'Location:../../index.php');
 } else {
    
$jut = $_SESSION['id_admin'];
$query = "SELECT * FROM tb_user where a_id_user='$jut'";
           $result = $dbh->query($query)->fetch();
//$artikel2="SELECT * FROM b_data WHERE m_id_member= '$tes'";
//
//$result2 = $dbh->query($artikel2)->fetch();


if(isset($_POST['submit'])){
    	$nama_gambar = $_FILES['upload1']['name'];
		$tmp_gambar = $_FILES['upload1']['tmp_name'];
        $nama_gambar2 = $_FILES['upload2']['name'];
		$tmp_gambar2 = $_FILES['upload2']['tmp_name'];
        $nama_gambar3 = $_FILES['upload3']['name'];
		$tmp_gambar3 = $_FILES['upload3']['tmp_name'];
        $nama_gambar4 = $_FILES['upload4']['name'];
		$tmp_gambar4 = $_FILES['upload4']['tmp_name'];
    
    $m_jenis_gambar = $_POST['m_jenis'];
		$rand_text = rand(99999,239028302);
		$rand_gambar= $rand_text.$nama_gambar;
    $rand_gambar2= $rand_text.$nama_gambar2;
    $rand_gambar3= $rand_text.$nama_gambar3;
    $rand_gambar4= $rand_text.$nama_gambar4;
   
        $new_location = "../../../images/".$rand_gambar;
        $new_location1 = "../images/".$rand_gambar;
        $new_locationeks = "../../../images/".$rand_gambar2;
        $new_locationeks1 = "../images/".$rand_gambar2;
        $new_locationint = "../../../images/".$rand_gambar3;
        $new_locationint1 = "../images/".$rand_gambar3;
        $new_locationpdf = "../../../pdf/".$rand_gambar4;
        $new_locationpdf1 = "../pdf/".$rand_gambar4;
        $post_position = "produk";
        //$post_type = "draft";
		//$new_location = "../img/form/individu/ynec/".$rand_gambar;
		//$fix_location = $rand_gambar;
		$imageFileType = pathinfo($new_location,PATHINFO_EXTENSION);
		$check = getimagesize($tmp_gambar);
	    if($check !== false) {
	        $uploadOk = 1;
	    } else {
	        $uploadOk = 0;
	    }
	    if (($_FILES['upload1']['size'] > 15000000000000)&&($_FILES['upload2']['size'] > 15000000000000)&&($_FILES['upload3']['size'] > 15000000000000)) {
            echo "<script type='text/javascript'>alert('Sorry, your file is too large. size upload must less than 100 KB');document.location='upl_produk.php'</script>";
		   // echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}
		// Allow certain file formats
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "PNG" && $imageFileType != "JPG" && $imageFileType != "JPEG"
		 ) {
            echo "<script type='text/javascript'>alert('Sorry, only JPG, JPEG, & PNG files are allowed.');document.location='upl_produk.php '</script>";
		   // echo "Sorry, only JPG, JPEG, & PNG files are allowed.";
		    $uploadOk = 0;
		}
		if ($uploadOk == 1){
			if (move_uploaded_file($tmp_gambar, $new_location)){
                
			// upload berhasil
		//unlink($lokasi);
                
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
                //echo $deskripsi;
                $table = 'tb_gallery'; // ubah ke nama tabel
        $field = '`m_nama_gambar`,`m_desc_id`,`m_desc_en`,`m_jenis_gambar`,`m_p_lmld_seluruh`,`m_p_lmld_moulded`,`m_p_ga_lwl`,`m_l_max`,`m_l_bwl`,`m_t_dmax`,`m_sarat_air`,`m_displacement`,`m_dead_weight`,`m_bahan_bakar`,`m_air_tawar`,`m_penumpang`,`m_crew`,`m_mesin_omfs`,`m_speed_mcr`,`m_speedj_mcr`,`m_range_mcr`,`m_path_spec`,`m_position`'; // kolomnya, kalo > 1 pisahkan pakai koma
        $val = '?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?'; // ini sesuai jumlah kolomnya, pakai koma
        $array = array($m_judul , $deskripsi_id, $deskripsi_en,$m_jenis_gambar ,$m_p_lmld_seluruh, $m_p_lmld_moulded , $m_p_ga_lwl, $m_l_max, $m_l_bwl, $m_t_dmax, $m_sarat_air, $m_displacement, $m_dead_weight, $m_bahan_bakar, $m_air_tawar, $m_penumpang, $m_crew, $m_mesin_omfs, $m_speed_mcr, $m_speedj_mcr, $m_range_mcr, $new_locationpdf1 , $post_position   ); // sesuai jumlah kolom juga
 move_uploaded_file($tmp_gambar4, $new_locationpdf);
        $sth = $dbh->prepare( "INSERT INTO $table ($field) VALUES ($val)" );
        $query1 = $sth->execute( $array );
        
       
        

if(($query1))
{
   // echo 'sukses';
    $query_ambil = "select m_id_gambar from tb_gallery order by m_id_gambar desc limit 1";
    $result_ambil = $dbh->query($query_ambil)->fetch();
    $id_gambar_ambil = $result_ambil['m_id_gambar'];
    $table = 'tb_prod_gallery';
    $field='`p_tmp_pict`,`m_id_gambar`';
    $val = '?,?';
    $array = array($new_location1,$id_gambar_ambil);
    $ath = $dbh->prepare( "INSERT INTO $table ($field) VALUES ($val)" );
    $query2 = $ath->execute( $array );
    
        if($query2)
{
          
     $table = 'tb_prod_gallery';
    $field='`p_tmp_pict`,`m_id_gambar`';
    $val = '?,?';
    $array = array($new_locationeks1,$id_gambar_ambil);
    $bth = $dbh->prepare( "INSERT INTO $table ($field) VALUES ($val)" );
    $query3 = $bth->execute( $array );
            if($query3)
{
                move_uploaded_file($tmp_gambar2, $new_locationeks);
    $table = 'tb_prod_gallery';
    $field='`p_tmp_pict`,`m_id_gambar`';
    $val = '?,?';
    $array = array($new_locationint1,$id_gambar_ambil);
    $cth = $dbh->prepare( "INSERT INTO $table ($field) VALUES ($val)" );
    $query4 = $cth->execute( $array );
                if($query4)
{
    move_uploaded_file($tmp_gambar3, $new_locationint);
    echo "<script type='text/javascript'>alert('Anda berhasil memasukkan data kapal.');document.location='upl_produk.php'</script>";
}
else{
    
    echo "<script type='text/javascript'>alert('upload failed, please check your internet connection, data field or image files ');document.location='upl_produk.php'</script>";
}
    echo "<script type='text/javascript'>alert('Anda berhasil memasukkan data kapal.');document.location='upl_produk.php'</script>";
}
else
{
    echo "<script type='text/javascript'>alert('upload failed, please check your internet connection, data field or image files ');document.location='upl_produk.php'</script>";
    }
    echo "<script type='text/javascript'>alert('Anda berhasil memasukkan data kapal.');document.location='upl_produk.php'</script>";
}
else
{
    echo "<script type='text/javascript'>alert('upload failed, please check your internet connection or image files ');document.location='upl_produk.php'</script>";
       }
    echo "<script type='text/javascript'>alert('Anda berhasil memasukkan data kapal.');document.location='upl_produk.php'</script>";
}
else{
    //echo 'gagal';
    echo "<script type='text/javascript'>alert('upload failed, please check your internet connection, data field or image files ');document.location='upl_produk.php'</script>";
    //echo '<a href="indiv_edit.php">Kembali</a>';
}	/*editProfileSemua($_POST['y_name'],$_POST['y_alamathome'],$_POST['y_kdposhome'],$_POST['y_tplahir'],$_POST['y_ttl'],$_POST['y_phone'],$_POST['y_idline'],$_POST['y_email'],$_POST['y_asalsch'],$_POST['y_alamatsch'],$_POST['y_kdpos'],$_POST['y_phonesch'],$_POST['y_class'],$_POST['y_ta'],$_POST['y_pembina'],$_POST['y_phonebina'],$_POST['y_idlinebina'],$_POST['y_emailbina'],$new_location);*/

			} else {
		// upload gagal
                echo "<script type='text/javascript'>alert('upload failed, please check your internet connection or image files');document.location='upl_produk.php'</script>";
				//echo 'upload failed, please check your internet connection or image files';
			}
		}else{
            echo "<script type='text/javascript'>alert('Format foto yang di upload tidak sesuai!');document.location='upl_produk.php'</script>";
			//echo "Format foto yang di upload tidak sesuai!";
		}
	}






}
?>