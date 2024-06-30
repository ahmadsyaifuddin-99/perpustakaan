<?php
require_once "include/koneksi.php"; 
session_start();

//mengambil data melalui method GET
$nisn 					= $_POST['nisn'];
$nama_siswa 			= $_POST['nama_siswa'];
$jurusan 				= $_POST['jurusan'];
$alamat_siswa 			= $_POST['alamat_siswa'];
$tempat_lahir 			= $_POST['tempat_lahir'];
$tanggal_lahir			= $_POST['tanggal_lahir'];
$nomor_hp 				= $_POST['nomor_hp'];

//mengupdate data ke dalam database
$sql2 = "UPDATE siswa SET nama_siswa = '$nama_siswa',
							jurusan = '$jurusan',
							alamat_siswa = '$alamat_siswa',
							tempat_lahir = '$tempat_lahir',
							tanggal_lahir = '$tanggal_lahir',
							nomor_hp = '$nomor_hp'
							WHERE nisn = '$nisn'";
if (mysqli_query($koneksi, $sql2)) {
	header('location:tbl_siswa.php');

} 
?>