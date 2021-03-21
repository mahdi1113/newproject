
<?php
$servername = 'localhost';
$dbname = 'test2';
$username = 'root';
$password = '';
try{

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $sql = 'select * from data limit 2';
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(pdo::FETCH_ASSOC);
    print_r($result);

}catch(PDOException $e){
    echo "Error :" . $e->getMessage();
}