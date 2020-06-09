<?php
    include("koneksi.php");

    $nama_mahasiswa=$_POST['nama_mahasiswa'];
    $email_mahasiswa=$_POST['email_mahasiswa'];
    $password_mahasiswa=$_POST['password_mahasiswa'];
    $konfirmasi_password=$_POST['konfirmasi_password'];

    if($password_mahasiswa != $konfirmasi_password)
        {
            header('location:register.php?konfirmasipassword-failed');
        }
        else
        {
            $sql="INSERT INTO mahasiswa (nama_mahasiswa, username_mahasiswa, biografi_mahasiswa, password_mahasiswa, email_mahasiswa)
            values('$nama_mahasiswa','','','$password_mahasiswa','$email_mahasiswa')";
            mysqli_query($conn,$sql);
            header('location:login.php?register-success');
        }
?>