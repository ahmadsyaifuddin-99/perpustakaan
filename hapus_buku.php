<?php  
require_once "include/koneksi.php";
session_start();

//mengambil data melalui method GET
$id_buku = $_GET['id_buku'];

  	$sql2 = "DELETE FROM buku WHERE id_buku = '$id_buku'";

	if (mysqli_query($koneksi, $sql2)) {
		header('location:tbl_buku.php');
	} 


?>