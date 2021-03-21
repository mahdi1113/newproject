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
<form action="upload2.php" method="post" enctype="multipart/form-data">

    <input type="file" name="fileUpload">
    <input type="submit">

</form>