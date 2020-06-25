<?php 

session_start();

include('koneksi.php');

$idmhs = $_SESSION['id_mahasiswa'];
$password_mahasiswa = $_SESSION['password_mahasiswa'];
$password_lama = $_POST['pass_lama'];
$password_baru = $_POST['pass_baru'];

if($password_lama == $password_mahasiswa) {
    $sql = $pdo->prepare("UPDATE mahasiswa SET password_mahasiswa=:a WHERE id_mahasiswa='$idmhs'");
    $sql->bindParam(':a', $password_baru);
    // $sql->execute();

    if($sql->execute()){
        echo "<font face='Verdana' size='2' color=green>You have successfully updated your profile<br></font>";
        $_SESSION['password_mahasiswa'] = $password_baru;
        header("Location: edit-profile.php");
    }// End of if profile is ok 
    else {
        print_r($sql->errorInfo()); // if any error is there it will be posted
        $msg=" <font face='Verdana' size='2' color=red>There is some problem in updating your profile. Please contact site admin<br></font>";
    }
} else {
    echo "<script type='text/javascript'>alert('Password Salah');</script>";
}
?>