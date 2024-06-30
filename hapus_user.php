<?php  
require_once "include/koneksi.php";
session_start();

//mengambil data melalui method GET
$id_user = $_GET['id_user'];

  	$sql2 = "DELETE FROM user WHERE id_user = '$id_user'";

	if (mysqli_query($koneksi, $sql2)) {
		header('location:tbl_user.php');
	} 


?>