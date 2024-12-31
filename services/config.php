<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $db_name = "infokes";

    $conn = mysqli_connect($hostname, $username, $password, $db_name);

    if (!$conn) {
        header('location: ../404.php');
        echo "Koneksi Gagal!";
    } 

?>