<?php
require_once('includes/config.php');
if(!isset($_SESSION['auth']['id']))
{
	header("Location: index.php");
	exit;
}
$sql = "SELECT image3 FROM blog WHERE id=".$_GET['id'];
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$var = mysqli_query($con, "DELETE FROM blog WHERE id='".$_GET['id']."'");
if(mysqli_affected_rows($con))
{
 unlink('images/blog/'.$row['image3']);//images/a.jpg
	//echo "record deleted sucessfully.";
	echo("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Record Deleted')
    window.location.href='blog.php';
    </SCRIPT>");
}
else
	echo("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Could Not Deleted.')
    window.location.href='blog.php';
    </SCRIPT>");
?>