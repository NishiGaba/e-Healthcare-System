<?php
include_once '../include/db_connect.php';

session_start();

$spec 	 	=	$_REQUEST['doc_spec'];
$name 	 	=	$_REQUEST['doc_name'];

if($spec != '')
{
	mysql_query("INSERT INTO `speciality`(name,doc_spec) VALUES ('$name','$spec')")or die(mysql_error());
	header('location:../doctor.php?msg= Speciality Added Successfully');
}
else {
	header('location:../doctor.php?msg= Error Occured !');	
}