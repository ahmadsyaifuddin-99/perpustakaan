<?php
require_once "include/koneksi.php"; 
session_start();

//mengambil data melalui method GET
    $id_pinjam            = $_POST['id_pinjam'];
   
    $nama               = $_POST['nama'];
    $tanggal_kembali             = $_POST['tanggal_kembali'];

//mengupdate data ke dalam database
$sql2 = "UPDATE pinjam_buku SET nama = '$nama',
							tanggal_kembali = '$tanggal_kembali'
							WHERE id_pinjam = '$id_pinjam'";
if (mysqli_query($koneksi, $sql2)) {
	header('location:tbl_peminjaman.php');

} 
?>