<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "sblc_member_db";

    $conn = mysqli_connect($server, $username, $password, $db);

    if(!$conn)
    {
        echo "Kết nối tới $db thất bại";
    }
?>