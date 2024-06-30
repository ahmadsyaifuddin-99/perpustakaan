<?php
require_once "include/koneksi.php"; 
session_start();

if (isset($_POST['submit'])) {
    $id_rak            = $_POST['id_rak'];
    $rak_buku      = $_POST['rak_buku'];


    $sql = "INSERT INTO rak (id_rak, rak_buku) VALUES 
                        ('$id_rak', '$rak_buku')";

    if(mysqli_query($koneksi, $sql)) {
        header('location:tbl_rak.php');
        exit();
    } else {
        header ("Location:tbl_rak.php");
        exit();
    }
   }
     
?>