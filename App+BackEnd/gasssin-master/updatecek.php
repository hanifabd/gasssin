<?php 

session_start();

include('koneksi.php');

if (isset($_POST['upload'])) {
    $idmhs = $_SESSION['id_mahasiswa'];
    $nama_mahasiswa = $_POST['nama_mahasiswa'];
    $username_mahasiswa = $_POST['username_mahasiswa'];
    $biografi_mahasiswa = $_POST['biografi_mahasiswa'];
    $email_mahasiswa = $_POST['email_mahasiswa'];

    $nama_pp = $_FILES['profilepicture']['name'];
    $x = explode('.', $nama_pp);
    $ekstensi = strtolower(end($x));
    $ukuran	= $_FILES['profilepicture']['size'];
    $file_tmp = $_FILES['profilepicture']['tmp_name'];	
    $ekstensi_diperbolehkan	= array('png','jpg');

    if($ukuran == 0) {
        $sql = $pdo->prepare("UPDATE mahasiswa SET nama_mahasiswa=:a, username_mahasiswa=:b, biografi_mahasiswa=:c, email_mahasiswa=:d WHERE id_mahasiswa='$idmhs'");
        $sql->bindParam(':a', $nama_mahasiswa);
        $sql->bindParam(':b', $username_mahasiswa);
        $sql->bindParam(':c', $biografi_mahasiswa);
        $sql->bindParam(':d', $email_mahasiswa);
        if($sql->execute()){
            echo "<font face='Verdana' size='2' color=green>You have successfully updated your profile<br></font>";
            $_SESSION['email_mahasiswa'] = $email_mahasiswa;
            $_SESSION['nama_mahasiswa']= $nama_mahasiswa;
            $_SESSION['username_mahasiswa']= $username_mahasiswa;
            $_SESSION['biografi_mahasiswa']= $biografi_mahasiswa;
            header("Location: edit-profile.php");
        }// End of if profile is ok 
        else {
            print_r($sql->errorInfo()); // if any error is there it will be posted
            $msg=" <font face='Verdana' size='2' color=red>There is some problem in updating your profile. Please contact site admin<br></font>";
        }
    }
    else {
        if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
	        if($ukuran < 1044070){
	            move_uploaded_file($file_tmp, 'upload/profile_pict/'.$nama_pp);
                $sql = $pdo->prepare("UPDATE mahasiswa SET nama_mahasiswa=:a, username_mahasiswa=:b, biografi_mahasiswa=:c, email_mahasiswa=:d, file_pp=:e WHERE id_mahasiswa='$idmhs'");
                $sql->bindParam(':a', $nama_mahasiswa);
                $sql->bindParam(':b', $username_mahasiswa);
                $sql->bindParam(':c', $biografi_mahasiswa);
                $sql->bindParam(':d', $email_mahasiswa);
                $sql->bindParam(':e', $nama_pp);
                if($sql->execute()){
                    echo "<font face='Verdana' size='2' color=green>You have successfully updated your profile<br></font>";
                    $_SESSION['email_mahasiswa'] = $email_mahasiswa;
                    $_SESSION['nama_mahasiswa']= $nama_mahasiswa;
                    $_SESSION['username_mahasiswa']= $username_mahasiswa;
                    $_SESSION['biografi_mahasiswa']= $biografi_mahasiswa;
                    $_SESSION['file_pp'] = $nama_pp;
                    header("Location: edit-profile.php");
                }// End of if profile is ok 
                else {
                    print_r($sql->errorInfo()); // if any error is there it will be posted
                    $msg=" <font face='Verdana' size='2' color=red>There is some problem in updating your profile. Please contact site admin<br></font>";
                }
	        }else{
    	        echo 'UKURAN FILE TERLALU BESAR';	    }
        }else{
	        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
        }
    }
}
// $sql->execute();
?>