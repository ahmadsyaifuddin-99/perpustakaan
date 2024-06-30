<?php

require_once "include/koneksi.php";
session_start();

  $sql ="SELECT * FROM siswa WHERE nisn ='$_GET[id]'";
  $result = mysqli_query($koneksi, $sql);
  $row = mysqli_fetch_assoc($result) 

?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Cetak Kartu | Siswa</title>

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
            <div class="pull-left">
                Codekop - Preview HTML to DOC [ size paper A4 ]
            </div>
            <div class="pull-right"> 
            <button type="button" class="btn btn-success btn-md" onclick="printDiv('printableArea')">
                <i class="fa fa-print"> </i> Print File
            </button>
            </div>
        </div>
                          <br/>
                            <div id="printableArea">
                              <page size="A4">
                                <div class="table table-bordered">
                                  <div class="card-body">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">KARTU ANGGOTA PERPUSTAKAAN</h1>
                                    </div>
                                    <hr>
                                    <br>
                                    <div class="row">
                                      <div class="col-sm-12">
                                      <table class="table table-stripped text-gray-900">
                                        <div>
                                      
                                        <td>NISN</td>
                                        <td>: <?php echo $row['nisn']; ?></td>
                                      
                                    </div>
                                      <tr>
                                        <td>Nama</td>
                                        <td>: <?php echo $row['nama_siswa']; ?></td>
                                      </tr>
                                      <tr>
                                        <td>Jurusan</td>
                                        <td>: <?php echo $row['jurusan']; ?></td>
                                      </tr>
                                      <tr>
                                        <td>TTL</td>
                                        <td>: <?php echo $row['tempat_lahir']; ?>, <?php echo $row['tanggal_lahir']; ?></td>
                                      </tr>
                                      <tr>
                                        <td>Alamat Domisili</td>
                                        <td>: <?php echo $row['alamat_siswa']; ?></td>
                                      </tr>
                                      <tr>
                                        <td>Nomor HP</td>
                                        <td>: <?php echo $row['nomor_hp']; ?></td>
                                      </tr>
                                    </table>
                                  </div>
                                  


                                </div>
                                <hr>
                              
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

