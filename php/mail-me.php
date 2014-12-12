<?php

$name=$_POST['name'];
$v_email=$_POST['email'];
$msg=$_POST['msg'];

if(empty($name)||empty($v_email)){
	echo "Name and Email are mandatory";
	exit;
}

$from="zkhan1093@gmail.com";
$subject= $name+" wants to talk to you";
$body=" name : $name \n".
"email: $v_email \n".
"message: $msg".
$to= "zkhan1093@gmail.com";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
$header="From: $v_email \r\n";
mail($to,$subject,$body,$header);

?>
