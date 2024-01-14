<?php
    require 'connect.php';
    $namalengkap = $_POST["nama_lengkap"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query_sql = "INSERT INTO tb_user (nama_lengkap, email, username, password) 
                    VALUES ('$namalengkap','$email','$username','$password')";

    if (mysqli_query($conn, $query_sql)) {
        header("Location : main.html");
    }
    else {
        echo "Register gagal : " . mysqli_error($conn);
    }
?>