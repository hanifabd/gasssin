<?php 

session_start();

include('koneksi.php');

$id_prj = $_POST['id_prj'];
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

if($ukuran == 0) {
    $sql = $pdo->prepare("UPDATE project SET judul=:a, id_platform=:b, deskripsi=:c, tgl_edit=:d WHERE id_project='$id_prj'");
    $sql->bindParam(':a', $judul);
    $sql->bindParam(':b', $id_platform);
    $sql->bindParam(':c', $deskripsi);
    $sql->bindParam(':d', $tanggal);
    if($sql->execute()){
        echo "<font face='Verdana' size='2' color=green>You have successfully updated your profile<br></font>";
        header("Location: profil.php?id=".$_SESSION['id_mahasiswa']);
    }// End of if profile is ok 
    else {
        print_r($sql->errorInfo()); // if any error is there it will be posted
        $msg=" <font face='Verdana' size='2' color=red>There is some problem in updating your profile. Please contact site admin<br></font>";
    }
}
else {
    if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
	    if($ukuran < 1044070){
	        move_uploaded_file($file_tmp, 'upload/upload_foto_karya/'.$nama_pp);
            $sql = $pdo->prepare("UPDATE project SET judul=:a, id_platform=:b, deskripsi=:c, tgl_edit=:d, foto_karya=:e WHERE id_project='$id_prj'");
            $sql->bindParam(':a', $judul);
            $sql->bindParam(':b', $id_platform);
            $sql->bindParam(':c', $deskripsi);
            $sql->bindParam(':d', $tanggal);
            $sql->bindParam(':e', $nama_pp);
            if($sql->execute()){
                echo "<font face='Verdana' size='2' color=green>You have successfully updated your profile<br></font>";
                header("Location: profil.php?id=".$_SESSION['id_mahasiswa']);
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
// $sql->execute();
?>