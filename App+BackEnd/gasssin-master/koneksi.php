<?php
    $username="root";
    $password="";
    $server="localhost";
    $namadatabase="ppl";
    $pdo = new PDO('mysql:host='.$server.';dbname='.$namadatabase, $username, $password);

?>