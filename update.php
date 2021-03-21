<?php
$servername = 'localhost';
$dbname = 'test2';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $sql = "update data set name = 'mahdi' where id=5";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
} catch (\Throwable $th) {
    echo 'error';
}