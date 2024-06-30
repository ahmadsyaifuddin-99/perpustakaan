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
        <h1>Data Denda</h1>
        <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>ID</th>
                      <th>Nama</th>
                      <th>Jumlah</th>
                    </tr>
                  </thead>
                  <tbody>
                  
                    <?php
                        
                        $tot_bayar = 0;
                        $total = 0;
                        $no = 1;

                        $sql ="SELECT * FROM denda";
                        $result = mysqli_query($koneksi, $sql);
                        while ($row = mysqli_fetch_assoc($result)) { 

                        $total = $row['jumlah'];
                        

                        ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $total; ?></td>

                      </tr>  
                    <?php } ?>
                  
                  </tbody>
                 
                  
                  
                </table>


</body>
</html>