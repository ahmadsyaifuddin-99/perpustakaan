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
		<h1>Data User</h1>
		<table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID User</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Password</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                    <?php
                        
                        $no = 1;
                        $sql ="SELECT * FROM user ORDER BY id_user DESC";
                        $result = mysqli_query($koneksi, $sql);
                        while ($row = mysqli_fetch_assoc($result)) { ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['id_user']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['password']; ?></td>                      
                      </tr>  
                    <?php } ?>
                  
                  </tbody>
                </table>


</body>
</html>