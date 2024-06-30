<?php  
require_once "include/koneksi.php";
session_start();



?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
	<body onload="window.print()">
		<h1>Data Buku</h1>
		<table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID Buku</th>
                      <th>Nama Buku</th>
                      <th>Penerbit</th>
                      <th>Pengarang</th>
                      <th>Tahun Terbit</th>
                      <th>Jumlah Buku</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                    <?php
                        
                        $no = 1;
                        $sql ="SELECT * FROM buku ORDER BY id_buku DESC";
                        $result = mysqli_query($koneksi, $sql);
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['id_buku']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['penerbit']; ?></td>
                        <td><?php echo $row['pengarang']; ?></td>
                        <td><?php echo $row['tahun_terbit']; ?></td>
                        <td><?php echo $row['jumlah_buku']; ?></td>                      
                      </tr>  
                    <?php } ?>
                  
                  </tbody>
                </table>


</body>
</html>