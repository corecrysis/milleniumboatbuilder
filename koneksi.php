<?php

$db_user = 'root';
$db_pass = '';
$db_name = 'marine_domainesia';
 
// connect to database
$dsn = 'mysql:dbname=' . $db_name . ';charset=utf8;host=localhost';
try {
        $dbh = new PDO( $dsn, $db_user, $db_pass );
} catch ( PDOException $e ) {
        echo 'Koneksi Gagal : ' . $e->getMessage();
}
?>