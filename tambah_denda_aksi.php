<?php
require_once "include/koneksi.php"; 
session_start();

if (isset($_POST['submit'])) {
    $id            = $_POST['id'];
    $nama      = $_POST['nama'];
    $jumlah      = $_POST['jumlah'];


  	$sql = "INSERT INTO denda (id, nama, jumlah) VALUES 
                        ('$id', '$nama', '$jumlah')";

    if(mysqli_query($koneksi, $sql)) {
        header('location:tbl_denda.php');
        exit();
    } else {
        header ("Location:tbl_denda.php");
        exit();
    }
   }
     
?>