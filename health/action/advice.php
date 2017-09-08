<?php
include_once '../include/db_connect.php';

session_start();

$doctor 	=	$_REQUEST['doc_name'];
$title 		=	$_REQUEST['ad_title'];
$ad			=	$_REQUEST['advice'];

if($doctor != '' && $title != '' && $ad != '')
{
	mysql_query("INSERT INTO `advice`(doc_name,ad_title,advice) VALUES ('$doctor','$title','$ad')")or die(mysql_error());
	header('location:../doctor.php?msg= Advice Updated Successfully');
}
else
 {
	header('location:../doctor.php?msg= Error Occured !');	
}

?>

