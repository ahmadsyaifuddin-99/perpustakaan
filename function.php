<?php 


 function terlambat($tanggal_pinjam, $tanggal_kembali)
{
    $tanggal_pinjam_pecah = explode('-', $tanggal_pinjam);
    $tanggal_pinjam_pecah = $tanggal_pinjam_pecah[2].'-'.$tanggal_pinjam_pecah[1].'-'.$tanggal_pinjam_pecah[0];

    $tanggal_kembali_pecah = explode('-', $tanggal_kembali);
    $tanggal_kembali_pecah = $tanggal_kembali_pecah[2].'-'.$tanggal_kembali_pecah[1].'-'.$tanggal_kembali_pecah[0];

    $selisih = strtotime($tanggal_kembali_pecah)- strtotime($tanggal_pinjam_pecah);
    $selisih = $selisih/86400;

    if ($selisih>=1) {
        $hasil_tgl = floor($selisih);
    } else {
        $hasil_tgl = 0;
    }
    return $hasil_tgl;
}

?>
