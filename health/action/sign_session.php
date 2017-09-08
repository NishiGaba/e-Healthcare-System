<?php
include_once '../include/db_connect.php';

session_start();

$user 	 	=	$_REQUEST['name'];
$passwd 	=	$_REQUEST['password'];
$mob		=	$_REQUEST['phone'];
$email		=	$_REQUEST['mail'];
$cat 		=	$_REQUEST['category'];

if($user != '' && $cat != 'null')
{
	mysql_query("INSERT INTO `login`(name,password,phone,mail,category) VALUES ('$user','$passwd','$mob','$email','$cat')")or die(mysql_error());

		if($cat == '1')
		{
			header('location:../patient.php?msg= Login Successfully');
		}
		elseif($cat == '2')
		{
			header('location:../doctor.php?msg= Login Successfully');
		}
}
else {
	header('location:../signup.php?msg= Error Occured !');	
}