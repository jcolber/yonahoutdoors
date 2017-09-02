<?php
$servername = "10.0.2.2:3306";
$username = "jcolber";
$password = "colberto";
$db = "yonah_store";

$link = mysqli_connect($servername, $username, $password, $db);

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
