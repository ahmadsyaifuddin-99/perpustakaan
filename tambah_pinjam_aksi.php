<?php
require_once "include/koneksi.php"; 
session_start();

if (isset($_POST['submit'])) {
    $id_pinjam            = $_POST['id_pinjam'];
    $nama               = $_POST['nama'];
    $nama_buku               = $_POST['nama_buku'];
    $tanggal_pinjam               = $_POST['tanggal_pinjam'];
    $tanggal_kembali             = $_POST['tanggal_kembali'];
    $jumlah_buku       = $_POST['jumlah_buku'];
    $status               = $_POST['status'];

    $sql = "INSERT INTO pinjam_buku (id_pinjam, nama, nama_buku, tanggal_pinjam, tanggal_kembali, jumlah_buku, status) 
        VALUES ('$id_pinjam', '$nama', '$nama_buku', '$tanggal_pinjam', '$tanggal_kembali', '$jumlah_buku', '$status')";

    
    if(mysqli_query($koneksi, $sql)) {
        header('location:tbl_peminjaman.php');
        exit();
    } else {
        header ("Location:tbl_peminjaman.php");
        exit();
    }
   }
     
?>