<?php
include "include/koneksi.php";
session_start();

//mengambil data melalui method GET
$id_buku            = $_POST['id_buku'];
$id_kategori		= $_POST['id_kategori'];
$id_rak				= $_POST['id_rak'];
$nama               = $_POST['nama'];
$pengarang          = $_POST['pengarang'];
$penerbit       	= $_POST['penerbit'];
$tanggal_masuk      = $_POST['tanggal_masuk'];
$tahun_terbit       = $_POST['tahun_terbit'];
$stok_buku          = $_POST['stok_buku'];
// $jumlah_buku        = $_POST['jumlah_buku'];

//mengupdate data ke dalam database
$sql2 = "UPDATE buku SET nama = '$nama',
							id_kategori = '$id_kategori',
							id_rak = '$id_rak',
							pengarang = '$pengarang',
							penerbit = '$penerbit',
							tanggal_masuk = '$tanggal_masuk',
							tahun_terbit = '$tahun_terbit',
							stok_buku = '$stok_buku'
							-- jumlah_buku = '$jumlah_buku'
							WHERE id_buku = '$id_buku'";
if (mysqli_query($koneksi, $sql2)) {
	header('location:tbl_buku.php');
}
