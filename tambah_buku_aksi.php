<?php
require_once "include/koneksi.php"; 
session_start();

if (isset($_POST['submit'])) {
    $id_buku            = $_POST['id_buku'];
    $id_kategori               = $_POST['id_kategori'];
    $id_rak               = $_POST['id_rak'];
    $nama               = $_POST['nama'];
  	$pengarang             = $_POST['pengarang'];
  	$penerbit       = $_POST['penerbit'];
  	$tanggal_masuk      = $_POST['tanggal_masuk'];
  	$tahun_terbit           = $_POST['tahun_terbit'];
    $stok_buku               = $_POST['stok_buku'];
    $jumlah_buku               = $_POST['jumlah_buku'];

  	$sql = "INSERT INTO buku (id_buku, id_kategori, id_rak, nama, pengarang, penerbit, tanggal_masuk, tahun_terbit, stok_buku, jumlah_buku) 
        VALUES ('$id_buku', '$id_kategori', '$id_rak', '$nama', '$pengarang', '$penerbit', '$tanggal_masuk', '$tahun_terbit', '$stok_buku', '$jumlah_buku')";
    
    if(mysqli_query($koneksi, $sql)) {
        header('location:tbl_buku.php');
        exit();
    } else {
        header ("Location:tbl_buku.php");
        exit();
    }
   }
     
?>