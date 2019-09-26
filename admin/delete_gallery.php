<?php
require_once('includes/config.php');
if(!isset($_SESSION['auth']['id']))
{
	header("Location: index.php");
	exit;
}
$sql = "SELECT image1 FROM gallery WHERE id=".$_GET['id'];
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$var = mysqli_query($con, "DELETE FROM gallery WHERE id='".$_GET['id']."'");
if(mysqli_affected_rows($con))
{
 unlink($row['image1']);//images/a.jpg
	//echo "record deleted sucessfully.";
	echo("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Record Deleted')
    window.location.href='gallery_upload.php';
    </SCRIPT>");
}
else
	echo("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Record Not Deleted')
    window.location.href='gallery_upload.php';
    </SCRIPT>");
?>