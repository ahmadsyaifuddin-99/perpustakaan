<?php
require_once "include/koneksi.php"; 
session_start();

//mengambil data melalui method GET
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

//mengupdate data ke dalam database
$sql2 = "UPDATE user SET username = '$username', email = '$email', password = '$password', id_user = '$id_user', foto = '$foto', tempat_lahir = '$tempat_lahir', tanggal_lahir = '$tanggal_lahir', alamat_domisili = '$alamat_domisili', jenis_kelamin = '$jenis_kelamin', nomor_hp = '$nomor_hp' WHERE id_user = '$id_user'";
if (mysqli_query($koneksi, $sql2)) {
	header('location:tbl_user.php');

} 
?>