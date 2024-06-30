<?php
require_once "include/koneksi.php"; 
session_start();

//mengambil data melalui method GET
$id_rak 			= $_POST['id_rak'];
$rak_buku 			= $_POST['rak_buku'];

//mengupdate data ke dalam database
$sql3 = "UPDATE rak SET rak_buku = '$rak_buku'WHERE id_rak = '$id_rak'";
if (mysqli_query($koneksi, $sql3)) {
	header('location:tbl_rak.php');

} 
?>