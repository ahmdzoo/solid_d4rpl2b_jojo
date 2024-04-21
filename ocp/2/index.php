<?php
// Include semua file kelas
include_once("DBMS.php");
include_once("DBMSConnection.php");
include_once("MangoDB.php");
include_once("MySql.php");

// Membuat objek DBMSConnection
$dbmsConnection = new DBMSConnection();

// Membuat koneksi dengan MangoDB
echo "Menghubungkan ke MangoDB:\n";
$dbmsConnection->connect(new MangoDB());

// Membuat koneksi dengan MySQL
echo "Menghubungkan ke MySQL:\n";
$dbmsConnection->connect(new MySql());
?>
