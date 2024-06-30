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
		<h1>Data Guru</h1>
		<table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID Guru</th>
                      <th>Nama</th>
                      <th>TTL</th>
                      <th>Alamat</th>
                      <th>Telepon</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                    <?php
                        
                        $no = 1;
                        $sql ="SELECT * FROM guru ORDER BY id_guru DESC";
                        $result = mysqli_query($koneksi, $sql);
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['id_guru']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['tempat_lahir']; ?>,<?php echo $row['tanggal_lahir']; ?></td>
                        <td><?php echo $row['alamat']; ?></td>
                        <td><?php echo $row['nomor_hp']; ?></td>                      
                      </tr>  
                    <?php } ?>
                  
                  </tbody>
                </table>


</body>
</html>