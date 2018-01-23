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
    	$nama_gambar = $_FILES['upload']['name'];
		$tmp_gambar = $_FILES['upload']['tmp_name'];
    $m_judul = $_POST['m_judul'];
    $deskripsi_id = $_POST['deskripsi_id'];
    $deskripsi_en = $_POST['deskripsi_en'];
		$rand_text = rand(99999,239028302);
		$rand_gambar= $rand_text.$nama_gambar;
   $new_location = "../../../images/".$rand_gambar;
        $new_location1 = "../images/".$rand_gambar;
        $post_position = "workshop";
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
	    if ($_FILES['upload']['size'] > 15000000) {
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
                
                 
                $table = 'tb_gallery'; // ubah ke nama tabel
        $field = '`m_desc_id`,`m_desc_en`,`m_position`,`m_nama_gambar`'; // kolomnya, kalo > 1 pisahkan pakai koma
        $val = '?,?,?,?'; // ini sesuai jumlah kolomnya, pakai koma
        $array = array($deskripsi_id, $deskripsi_en, $post_position, $m_judul); // sesuai jumlah kolom juga
 
        $sth = $dbh->prepare( "INSERT INTO $table ($field) VALUES ($val)" );
        $query1 = $sth->execute( $array );
//        var_dump($query1);
//                die;
       
        

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
    echo "<script type='text/javascript'>alert('Anda berhasil memasukkan data Workshop.');document.location='upl_works.php'</script>";
}
else{
    //echo 'gagal';
    echo "<script type='text/javascript'>alert('upload failed, please check your internet connection or image files titt');document.location='upl_produk.php'</script>";
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