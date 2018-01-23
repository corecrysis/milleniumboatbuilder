<?php
session_start();
include_once('../koneksi.php');
//$coba=$_POST[$aku];

if ( isset($_POST['submit_fdback']) ) {

    $m_nama = $_POST['m_nama'];
    $m_gender = $_POST['m_gender'];
    $m_organ = $_POST['m_organ'];
    $m_email = $_POST['m_email'];
    $m_address = $_POST['m_address'];
    $m_message = $_POST['m_message'];
    $date2 = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
               $p_timest= $date2->format('Y-m-d H:i:s');
    
    $table = 'tb_feed_back'; // ubah ke nama tabel
        $field = '`m_name`,`m_gender`,`m_organ`,`m_email`,`m_address`,`m_message`, `m_timest`'; // kolomnya, kalo > 1 pisahkan pakai koma
        $val = '?,?,?,?,?,?,?'; // ini sesuai jumlah kolomnya, pakai koma
        $array = array( $m_nama, $m_gender, $m_organ, $m_email, $m_address, $m_message, $p_timest ); // sesuai jumlah kolom juga
 
        $sth = $dbh->prepare( "INSERT INTO $table ($field) VALUES ($val)" );
        $input = $sth->execute( $array );

   echo "<script type='text/javascript'>alert('Selamat, Pesan Anda Berhasil Terkirim');document.location='contact.php'</script>";


}