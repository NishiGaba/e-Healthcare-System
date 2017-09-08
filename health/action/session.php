<?php
include_once '../include/db_connect.php';

session_start();

$user 	 	= $_REQUEST['name'];
$passwd 	= $_REQUEST['password'];
$cat 		= $_REQUEST['category'];

$result 	= mysql_query("SELECT * FROM `login` WHERE `name` = '$user' AND `password` = '$passwd' AND `category` = '$cat' ");

if($data    = mysql_fetch_array($result))
{
	if($cat == '1')
		{
			header('location:../patient.php?msg= Login Successfully');
		}
		elseif($cat == '2')
		{
			header('location:../doctor.php?msg= Login Successfully');
		}
}
else
	{
	header('Location:../login.php?msg= *Invalid Login!');
	}

?>