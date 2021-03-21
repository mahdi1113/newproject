<?php
session_start();
if(!empty($_SESSION['error'])){
    foreach($_SESSION['error'] as $error){
        ?>
        <li><?php echo $error;?></li>
        <?php
    }
}
unset($_SESSION['error']);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="test2.php">
    <div style="width=100%;margin-bottom:10px">
        <label for="username">نام</label>
        <input name="username">
    </div>
    <div style="width=100%;margin-bottom:10px">
        <label for="age">سن</label>
        <input name="age">
    </div>
        <input type="submit">
    </form>
</body>
</html>