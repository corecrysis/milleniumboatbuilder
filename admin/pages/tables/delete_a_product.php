<?php
include('../../../koneksi.php');

session_start();
       if (!isset($_SESSION['id_admin'])){
     header( 'Location:../../index.php');
 } else {
$_SESSION['idfolder1'] = $_POST['id1'];
$tes = $_SESSION['idfolder1'];

$query = "DELETE FROM tb_gallery WHERE m_id_gambar = '$tes'";

if($dbh->exec($query))
{
    $query1 = "DELETE FROM tb_prod_gallery WHERE m_id_gambar = '$tes'";
if($dbh->exec($query1))
{
   
    echo "<script type='text/javascript'>alert('Anda berhasil menghapus product.');document.location='product.php'</script>";
}
else
{
    echo "<script type='text/javascript'>document.location='product.php'</script>";
       }
    
    echo "<script type='text/javascript'>alert('Anda berhasil menghapus product.');document.location='product.php'</script>";
}
else
{
    echo "<script type='text/javascript'>document.location='product.php'</script>";
       }
       }
?>