<?php
session_start();
echo 'ثبت نام شما با موفقیت انجام شد' . "<br>" . "<br>";
echo date("Y-m-d"). "<br>" . "<br>";
date_default_timezone_set('Iran');
echo date("h:i:sa"). "<br>" . "<br>";
$_SESSION['now']=strtotime("now");
$future=strtotime("1 Minutes");



// if($d + 60 < strtotime("now")){
//     echo "no";
// }else{
//     echo "yes";
// }

$cookie_name = 'user';
$cookie_value = 'ali';
setcookie($cookie_name , $cookie_value , time() + 60 , "/" );
if(isset($_COOKIE[$cookie_name])){
    echo $cookie_value;
}else{
    echo 'no set cookie';
}
echo"<br>";
echo"<br>";

$int = 10;
if(filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false){
    echo 'yes';
}else{
    echo 'no';
}
echo"<br>";
echo"<br>";

$string = '123@';
if(!filter_var($string , FILTER_VALIDATE_EMAIL) === false){
    echo 'ok!!!';
}else{
    echo 'oh!!!';
}

