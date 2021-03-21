<?php
$servername = 'localhost';
$dbname = 'test2';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $sql = 'delete from data where id = 3';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
} catch (\Throwable $th) {
    //throw $th;
}