<?php

require_once "include/koneksi.php";
session_start();
 

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cetak | Laporan</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
      body {
        background: rgba(0,0,0,0.2);
      }
      page[size="A4"] {
        background: white;
        width: 21cm;
        height: 29.7cm;
        display: block;
        margin: 0 auto;
        margin-bottom: 0.5pc;
        box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
        padding-left:2.54cm;
        padding-right:2.54cm;
        padding-top:1.54cm;
        padding-bottom:1.54cm;
      }
      @media print {
        body, page[size="A4"] {
          margin: 0;
          box-shadow: 0;
        }
      }
    </style>

</head>

<body>

    <div class="container">
            <br/> 
            <div class="pull-right">
            <div class="card-header with-border">
                            <div class="row">
                                <div class="col">
                                    <form method="POST" class="form-inline">
                                        <input type="date" name="tgl_mulai" class="form-control ml-2">
                                        <input type="date" name="tgl_selesai" class="form-control ml-3">
                                        <button type="submit" name="filter_tgl" class="btn btn-info ml-3">Filter</button>
                                        <button type="button" class="btn btn-success ml-2" onclick="printDiv('printableArea')">
                                        <i class="fa fa-print"> </i> Print File
                                        </button>
                                    </form>
                                </div>
                            </div>
                         </div> 
            
            </div>
        </div>
                          <br/>
                            <div id="printableArea">
                              <page size="A4">
                              
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">PERPUSTAKAAN</h1>
                                    </div>
                                    
                                    <br>
                                    <div class="row">
                                      <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>ID Pinjam</th>
                                                        <th>Nama</th>
                                                        <th>Nama Buku</th>
                                                        <th>Tanggal Pinjam</th>
                                                        <th>Tanggal Kembali</th>
                                                        <th>Jumlah</th>
                                                        
                                                        
                                            
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php


                                                    if (isset($_POST['filter_tgl'])) {
                                                        $mulai = mysqli_real_escape_string($koneksi, $_POST['tgl_mulai']);
                                                        $selesai = mysqli_real_escape_string($koneksi, $_POST['tgl_selesai']);

                                                        $sql ="SELECT * FROM pinjam_buku WHERE tanggal_pinjam BETWEEN '$mulai' AND '$selesai'";
                                                        $result = mysqli_query($koneksi, $sql);
                                                    
                                                    }else {
                                                        $sql ="SELECT * FROM pinjam_buku";
                                                        $result = mysqli_query($koneksi, $sql);

                                                    }

                                                        
                                                        $no = 1;
                                                        while ($row = mysqli_fetch_assoc($result)) { ?>
                                                    <tr>
                                                        <td><?php echo $no++; ?></td>
                                                        <td><?php echo $row['id_pinjam']; ?></td>
                                                        <td><?php echo $row['nama']; ?></td>
                                                        <td><?php echo $row['nama_buku']; ?></td>
                                                        <td><?php echo $row['tanggal_pinjam']; ?></td>
                                                        <td><?php echo $row['tanggal_kembali']; ?></td>
                                                        <td><?php echo $row['jumlah_buku']; ?></td>
                                                    </tr>

                                                    <?php } ?>
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                  


                                </div>
                                
                              
                                
                            </div>
                        </page>
                    </div>
                  </div>
                
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
  </body>

 <script>
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
  </script>

</html>

