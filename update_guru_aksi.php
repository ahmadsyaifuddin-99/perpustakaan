<?php
require_once "include/koneksi.php"; 
session_start();

//mengambil data melalui method GET
$id_guru 				= $_POST['id_guru'];
$nama 					= $_POST['nama'];
$alamat 				= $_POST['alamat'];
$tempat_lahir 			= $_POST['tempat_lahir'];
$tanggal_lahir			= $_POST['tanggal_lahir'];
$nomor_hp 				= $_POST['nomor_hp'];

//mengupdate data ke dalam database
$sql2 = "UPDATE guru SET nama = '$nama',
							alamat = '$alamat',
							tempat_lahir = '$tempat_lahir',
							tanggal_lahir = '$tanggal_lahir',
							nomor_hp = '$nomor_hp'
							WHERE id_guru = '$id_guru'";
if (mysqli_query($koneksi, $sql2)) {
	header('location:tbl_guru.php');

} 
?>