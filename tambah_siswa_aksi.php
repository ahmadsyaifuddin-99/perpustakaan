<?php
require_once "include/koneksi.php"; 
session_start();

if (isset($_POST['submit'])) {
    $nisn            = $_POST['nisn'];
    $nama_siswa      = $_POST['nama_siswa'];
  	$jurusan         = $_POST['jurusan'];
  	$alamat_siswa    = $_POST['alamat_siswa'];
  	$tempat_lahir    = $_POST['tempat_lahir'];
  	$tanggal_lahir   = $_POST['tanggal_lahir'];
  	$nomor_hp        = $_POST['nomor_hp'];

  	$sql = "INSERT INTO siswa (nisn, nama_siswa, jurusan, alamat_siswa, tempat_lahir, tanggal_lahir, nomor_hp) VALUES 
                        ('$nisn', '$nama_siswa', '$jurusan', '$alamat_siswa', '$tempat_lahir', '$tanggal_lahir', '$nomor_hp')";
    if(mysqli_query($koneksi, $sql)) {
        header('location:tbl_siswa.php');
        exit();
    } else {
        header ("Location:tbl_siswa.php");
        exit();
    }
   }
     
?>