<?php
$con=mysqli_connect('localhost','punarnav_db','punarnav_punarnava123')OR die("could not connect to server");
mysqli_select_db($con,'punarnav_punarnava')OR die("could not conect to database");
session_name('auth');
session_start();

require_once('includes/validate.php');

?>
