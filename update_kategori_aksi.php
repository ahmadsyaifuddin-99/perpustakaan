<?php
require_once "include/koneksi.php"; 
session_start();

//mengambil data melalui method GET
$id_kategori 			= $_POST['id_kategori'];
$kategori_buku 			= $_POST['kategori_buku'];

//mengupdate data ke dalam database
$sql3 = "UPDATE kategori SET kategori_buku = '$kategori_buku'WHERE id_kategori = '$id_kategori'";
if (mysqli_query($koneksi, $sql3)) {
	header('location:tbl_kategori.php');

} 
?>