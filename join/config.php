<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $db = "sblc_member_db";

    $conn = mysqli_connect($server, $username, $password, $db);

    if(!$conn)
    {
        echo "<script>alert('Kết nối không thành công !.')</script>";
    }
?>