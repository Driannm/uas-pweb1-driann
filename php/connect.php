<?php
$servername = "localhost";
$database = "dbsultansavori";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else {
    echo "Connection Succes!";
}
