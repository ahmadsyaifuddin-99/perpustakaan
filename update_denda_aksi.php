<?php
require_once "include/koneksi.php"; 
session_start();

//mengambil data melalui method GET
    $id            = $_POST['id'];
    $nama      = $_POST['nama'];
    $jumlah      = $_POST['jumlah'];


//mengupdate data ke dalam database
$sql3 = "UPDATE denda SET nama = '$nama',
                          jumlah = '$jumlah' 
                          WHERE id = '$id'";
if (mysqli_query($koneksi, $sql3)) {
    header('location:tbl_denda.php');

   }
     
?>