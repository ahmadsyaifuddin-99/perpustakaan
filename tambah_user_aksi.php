<?php
require_once "include/koneksi.php"; 
session_start();

if (isset($_POST['submit'])) {
    $email           = $_POST['email'];
    $password        = $_POST['password'];
  	$id_user         = $_POST['id_user'];
  	$username        = $_POST['username'];

  	$foto = $_FILES['foto']['name'];
    $tmp_name = $_FILES['foto']['tmp_name'];
    move_uploaded_file($tmp_name, 'img/'.$foto);

  	$tempat_lahir    = $_POST['tempat_lahir'];
  	$tanggal_lahir   = $_POST['tanggal_lahir'];
  	$alamat_domisili = $_POST['alamat_domisili'];
  	$jenis_kelamin   = $_POST['jenis_kelamin'];
  	$nomor_hp        = $_POST['nomor_hp'];

  	$sql = "INSERT INTO user (email, password, id_user, username, foto, tempat_lahir, tanggal_lahir, alamat_domisili, jenis_kelamin, nomor_hp) 
                                             VALUES ('$email', '$password',
                                             '$id_user', '$username', '$foto', '$tempat_lahir', '$tanggal_lahir',
                                             '$alamat_domisili', '$jenis_kelamin', '$nomor_hp')";
    if(mysqli_query($koneksi, $sql)) {
        header('location:tbl_user.php');
        exit();
    } else {
        header ("Location:tbl_user.php");
        exit();
    }
   }
     
?>
