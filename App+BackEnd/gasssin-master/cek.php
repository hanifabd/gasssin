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
    $_SESSION['id_mahasiswa'] = $data['id_mahasiswa'];
    $_SESSION['email_mahasiswa'] = $data['email_mahasiswa'];
    $_SESSION['password_mahasiswa'] = $data['password_mahasiswa'];
    $_SESSION['nama_mahasiswa']= $data['nama_mahasiswa'];
    $_SESSION['username_mahasiswa']= $data['username_mahasiswa'];
    $_SESSION['biografi_mahasiswa']= $data['biografi_mahasiswa'];
	header("location:index.php");
}else{
	header("location:login.php?pesan=gagal");	
}
 
?>