<?php
    include 'koneksi.php';
    $kata_cari = '';
    $bulan_ini = date('m');
    $bulan_lalu = date('m');
    $bulan_lalu = $bulan_lalu - 1;
    $tahun_lalu = date('y');
    $tahun_lalu = $tahun_lalu - 1;
    // $query = "SELECT * FROM project WHERE MONTH(tgl_upload) <=  $bulan_lalu";
    $query = "SELECT * FROM project WHERE MONTH(tgl_upload) = $bulan_ini ORDER BY tgl_upload DESC";
    $dewan1 = $db1->prepare($query);
    $dewan1->execute();
    $res1 = $dewan1->get_result();
    while($row = $res1->fetch_assoc()) {
        echo $row['tgl_upload'];
    };

?>