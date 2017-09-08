<?php
include_once '../include/db_connect.php';

session_start();

$doctor		=	$_REQUEST['docname'];
$spec		=	$_REQUEST['docspeciality'];
$calen		=	$_REQUEST['date'];

if($doctor != '' && $spec != '' && $calen != '')
{
	mysql_query("INSERT INTO `appoint`(docname,docspeciality,date) VALUES ('$doctor','$spec','$calen')")or die(mysql_error());
	header('location:../appointment.php?msg= Appointment Submitted Successfully');
}

else {
	header('location:../appointment.php?msg= Error Occured !');	
}