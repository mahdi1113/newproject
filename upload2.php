<?php
$file_path = $_FILES['fileUpload']['tmp_name'];
session_start();
$error = [];
if($_FILES['fileUpload']['error'] !== 4){
    if($_FILES['fileUpload']['type'] === 'image/jpeg' && $_FILES['fileUpload']['size'] < 1000000){
        
        do{
            $file_name = md5(rand(11111,99999)); 
        }   
        while(file_exists('uploads/'.$file_name.'jpg'));
            move_uploaded_file($file_path,'uploads/'.$file_name.'.jpg');
             
    }else{
        header ('Location: upload.php');
        $error['TS'] = 'اندازه فایل شما بیش از حد بزرگ است';
    }
}
else{
    header ('Location: upload.php');
    $error['error'] = 'یک خطا مانع ثبت این فایل شد لطفا دوباره تلاش کنید';
}

$_SESSION['error'] = $error;
