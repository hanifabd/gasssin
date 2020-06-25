<?php
    include("koneksi.php");
    session_start();

    $id_project=$_POST['id_project'];
    $id_mahasiswa=$_SESSION['id_mahasiswa'];
    $judul=$_POST['judul'];
    $id_platform=$_POST['id_platform'];
    $deskripsi=$_POST['deskripsi'];
    $tanggal=date('y-m-d');

    $foto_karya=$_FILES['foto_karya']['name'];
    $x = explode('.', $foto_karya);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['foto_karya']['size'];
    $file_tmp = $_FILES['foto_karya']['tmp_name'];	
    $ekstensi_diperbolehkan	= array('png','jpg');    

    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
        if($ukuran < 1044070){			
            move_uploaded_file($file_tmp, 'upload/upload_foto_karya/'.$foto_karya);
            $sql = "UPDATE project SET id_mahasiswa='$id_mahasiswa', foto_karya='$foto_karya', judul='$judul', id_platform='$id_platform', deskripsi='$deskripsi', jumlah_view='', tgl_upload='$tanggal' WHERE id_project='$id_project'";
            $query= mysqli_query($conn,$sql);
            if($query)
            {
                echo "berhasil disimpan";
                header('location:editportofolio.php');
            }
            else
            {
                echo "gagal";
            }  
        }
    }
?>