<?php
    include("koneksi.php");
    session_start();

    $id_mahasiswa=$_SESSION['id_mahasiswa'];
    $judul=$_POST['judul'];
    $id_platform=$_POST['id_platform'];
    $deskripsi=$_POST['deskripsi'];
    $tanggal=date('y-m-d');

    $sql = "INSERT INTO project (id_mahasiswa, foto_karya, judul, id_platform, deskripsi, jumlah_view, tgl_upload) VALUES ('$id_mahasiswa','','$judul','$id_platform','$deskripsi','','$tanggal')";
    $query= mysqli_query($conn,$sql);

    if($query)
    {
        echo "berhasil disimpan";
        header('location:gallery.php');
    }
    else
    {
        echo "gagal";
    }    
?>