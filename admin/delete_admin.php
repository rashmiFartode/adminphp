<?php
require_once('includes/config.php');
if(!isset($_SESSION['auth']['id']))
{
	header("Location: login.php");
	exit;
}

extract($_GET);
$var = mysqli_query($con,"DELETE FROM admin WHERE id='".$_GET['id']."'");
if(mysqli_affected_rows($con))
{
 
	echo("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Record Deleted')
    window.location.href='adminrecord.php';
    </SCRIPT>");
}
else
	echo "Could not delete subject.";
?>