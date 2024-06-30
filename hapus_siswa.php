<?php  
require_once "include/koneksi.php";
session_start();

//mengambil data melalui method GET
$nisn = $_GET['nisn'];

  	$sql2 = "DELETE FROM siswa WHERE nisn = '$nisn'";

	if (mysqli_query($koneksi, $sql2)) {
		header('location:tbl_siswa.php');
	} 


?>