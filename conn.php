<?php
$servername = 'localhost';
$dbname = 'test2';
$username = 'root';
$password = '';
try{ 
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $sql = "insert into data (name , phone , age ) values ('ali' , '1122' , '10')";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
}catch(PDOException $e){
    echo "Error :" .  $e->getMessage();
}