<?php
require_once "include/koneksi.php"; 
session_start();

if (isset($_POST['submit'])) {
    $id_guru            = $_POST['id_guru'];
    $nama               = $_POST['nama'];
  	$alamat             = $_POST['alamat'];
  	$tempat_lahir       = $_POST['tempat_lahir'];
  	$tanggal_lahir      = $_POST['tanggal_lahir'];
  	$nomor_hp           = $_POST['nomor_hp'];

  	$sql = "INSERT INTO guru (id_guru, nama, alamat, tempat_lahir, tanggal_lahir, nomor_hp) VALUES 
                        ('$id_guru', '$nama', '$alamat', '$tempat_lahir', '$tanggal_lahir', '$nomor_hp')";
    if(mysqli_query($koneksi, $sql)) {
        header('location:tbl_guru.php');
        exit();
    } else {
        header ("Location:tbl_guru.php");
        exit();
    }
   }
     
?>