<?php 

session_start();

include('koneksi.php');
 
$email_mahasiswa = $_POST['email_mahasiswa'];
$password_mahasiswa = $_POST['password_mahasiswa'];
 
$sql = $pdo->prepare("SELECT * FROM mahasiswa WHERE email_mahasiswa=:a AND password_mahasiswa=:b");
$sql->bindParam(':a', $email_mahasiswa);
$sql->bindParam(':b', $password_mahasiswa);
$sql->execute();
$data = $sql->fetch();
 
if(! empty($data)){
    $_SESSION['email_mahasiswa'] = $data['email_mahasiswa'];
    $_SESSION['nama_mahasiswa']= $data['nama_mahasiswa'];
	header("location:gallery.php");
}else{
	header("location:login.php?pesan=gagal");	
}
 
?>