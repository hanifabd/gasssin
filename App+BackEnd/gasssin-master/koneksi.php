<?php
    $username="root";
    $password="";
    $server="localhost";
    $namadatabase="ppl";
    $pdo = new PDO('mysql:host='.$server.';dbname='.$namadatabase, $username, $password);
    $db1 = new mysqli($server, $username, $password, $namadatabase);
    $conn=mysqli_connect($server,$username,$password,$namadatabase);

    if(!$conn)
    {
        echo "gagal konek !!";
        die();
    }
?>