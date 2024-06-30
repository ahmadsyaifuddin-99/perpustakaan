<?php  
require_once "include/koneksi.php";
session_start();

//mengambil data melalui method GET
$id_kategori = $_GET['id_kategori'];

  	$sql2 = "DELETE FROM kategori WHERE id_kategori = '$id_kategori'";

	if (mysqli_query($koneksi, $sql2)) {
		header('location:tbl_kategori.php');
	} 


?>