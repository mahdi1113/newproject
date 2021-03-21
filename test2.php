<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $username = test_input($_POST['username']);
    $age = test_input($_POST['age']);
    $error = [];
    if(!empty($username)){
            if (preg_match("/^[a-zA-Z ]*$/",$username)) {
                header('Location: welcom.php');
        }else{
            header('Location: test1.php');
            $error ['age'] = 'نام باید انگلیسی باشد';
        }
    }else{
        header('Location: test1.php');
        $error ['username'] = 'لطفا نام خود را وارد کنید';
    }
    if(empty($age)){
        header('Location: test1.php');
        $error ['age'] = 'لطفا سن خود را وارد کنید';
    }
    $_SESSION ['error'] = $error;
}
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}