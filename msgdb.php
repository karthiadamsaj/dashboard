<?php

$servername = "localhost";
$username = "root";
$password ="";

try {
    $conn = new PDO ("mysql:host=$servername; dbname=d1", $username $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connection succesfully";
}
catch(PDOException $e) {
    echo "connection failed". $e->getMessage();
}

?>