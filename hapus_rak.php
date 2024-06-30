<?php  
require_once "include/koneksi.php";
session_start();

//mengambil data melalui method GET
$id_rak = $_GET['id_rak'];

  	$sql2 = "DELETE FROM rak WHERE id_rak = '$id_rak'";

	if (mysqli_query($koneksi, $sql2)) {
		header('location:tbl_rak.php');
	} 


?>