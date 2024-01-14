<?php
    require 'connect.php';
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query_sql = "SELECT * FROM tb_user WHERE email = '$email' AND password = '$password'";

    $result = mysqli_query ($conn, $query_sql);

    if (mysqli_num_rows($result) > 0 ) {
        header ("Location: ../page/main.html");
    }
    else {
        echo "<center><h1>GAGAL!</h1></center>";
    }
?>