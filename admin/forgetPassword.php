<?php 
	require_once("includes/config.php");
	if (isset($_POST["reset"])) {
				
		$email = $_POST["email"];
		
		$data = mysqli_query($con, "SELECT id FROM admin WHERE email='".$_POST["email"]."'");
//print_r($data);exit;
		$res = mysqli_num_rows($data);
		if ($res > 0) {
			$str = "0123456789qwertzuioplkjhgfdsayxcvbnm";
			$str = str_shuffle($str);
			$str = substr($str, 0, 10);
			$url = "http://radioswag.in/rs_admin/resetPassword.php?token=$str&email=$email";

			mail($email, "Reset password", "To reset your password, please visit this: $url", "From: ashwiniingle29@gmail.com\r\n");
//echo $url;
			$up = mysqli_query($con, "UPDATE admin SET token='$str', expire = DATE_ADD(NOW(), INTERVAL 5 MINUTE) WHERE email='$email'");
//print_r($up);exit;
			 $rslt ="Please Visit your Email!";
		} else {
			 $rslt = "Please check your inputs!";
		}
	}	
?>


<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Forget Password</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="images/COLOUR LOGO.png">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
<style>
	.error{
		background-color:red;
		color:white;
	}

</style>
</head>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="forgetPassword.php">
                        <h1>Forget Password</h1>
                    </a>

                </div>
				<div id="mydiv" >

					<?php if(isset($rslt)) { ?>
						<div class="flash alert alert-success" style="color:red;text-align:center;">

							<div class="message notice">
								<?php echo $rslt; ?>
							</div>

					</div>
					<?php } ?>

					</div>
                <div class="login-form">

                    <form enctype="multipart/form-data" method="post" >
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="text" class="form-control" placeholder="Email" name="email">
 			 <?php if(isset($errors['e'])) { ?>
						   <div class="error">
								<?php echo $errors['e']; ?>
						   </div>
						   <?php } ?>

                        </div>
                        <div class="checkbox">

                           
                        </div>
                        <button type="submit" name="reset" class="btn btn-success btn-flat m-b-30 m-t-30">Reset</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
	
    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
		    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
		    <script type="text/javascript"> 
		      $(document).ready( function() {
		        $('.error').delay(3000).fadeOut();
		      });
 			$(document).ready( function() {
		        $('.flash').delay(3000).fadeOut();
		      });

		  </script>

</body>
</html>
