<?php  
require_once "include/koneksi.php";
session_start();

//mengambil data melalui method GET
$id_guru = $_GET['id_guru'];

  	$sql2 = "DELETE FROM guru WHERE id_guru = '$id_guru'";

	if (mysqli_query($koneksi, $sql2)) {
		header('location:tbl_guru.php');
	} 


?>