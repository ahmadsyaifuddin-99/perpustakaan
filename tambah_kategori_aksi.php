<?php
require_once "include/koneksi.php"; 
session_start();

if (isset($_POST['submit'])) {
    $id_kategori            = $_POST['id_kategori'];
    $kategori_buku      = $_POST['kategori_buku'];


  	$sql = "INSERT INTO kategori (id_kategori, kategori_buku) VALUES 
                        ('$id_kategori', '$kategori_buku')";

    if(mysqli_query($koneksi, $sql)) {
        header('location:tbl_kategori.php');
        exit();
    } else {
        header ("Location:tbl_kategori.php");
        exit();
    }
   }
     
?>