<?php
require_once('includes/config.php');
if(!isset($_SESSION['auth']['id']))
{
  header("Location:index.php");
  exit;
}
extract($_POST);
$errors=array();
if(isset($_POST['signup'])){
 $errors = validate_signup();
  if(!count($errors))
  {
		$phone = $_POST['mobile_no'];
    $sql="insert into admin set first_name='".$_POST['first_name']."', last_name='".$_POST['last_name']."',email='".$_POST['email']."',mobile_no=$phone ,password = '".md5($_POST['password'])."',created=NOW();";

	 if(mysqli_query($con,$sql))
	 {
	     //echo mysqli_error($con);
  echo("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Added')
    window.location.href='adminrecord.php';
    </SCRIPT>");
 // header("location:index.php");
  }
  else
  {
       //echo mysqli_error($con);
    echo("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Could not Registered.')
    window.location.href='registration.php';
    </SCRIPT>");
  }
 }
}

?>

<?php
require_once('includes/config.php');
if(isset($_POST['signout']))
{
unset($_SESSION['auth']);
header("location:index.php");
exist;
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
    <title>Punar Nava</title>
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
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
<style>
	.error{
		background-color:red;
		color:white;
	}

</style>
</head>
<body>


        <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
            <?php
              include("menu.php");
            ?>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

         <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>
				  </div>
                </div>


                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

                            <form enctype="multipart/form-data" method="post">
                  <button type="submit" name="signout" class="btn btn-primary">Signout</button>
                  </form>
                        </div>
                    </div>

               </div>
            </div>
   </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Registration</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
	<div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <h2>Signin</h2>
                </div>
					
                <div class="login-form">
				<form enctype="multipart/form-data" method="post">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="first_name"  placeholder="First Name" value="<?php echo isset($_POST['first_name'])? $_POST['first_name']:'';?>">
                        <?php if(isset($errors['fn'])) { ?>
						   <div class="error">
								<?php echo $errors['fn']; ?>
						   </div>
						   <?php } ?>
						</div>

						<div class="form-group">
                            <label>Last Name</label>
                          <input type="text" class="form-control" name="last_name"  placeholder="Last Name" value="<?php echo isset($_POST['last_name'])? $_POST['last_name']:'';?>">
                        <?php if(isset($errors['ln'])) { ?>
						   <div class="error">
								<?php echo $errors['ln']; ?>
						   </div>
						   <?php } ?>
						</div>
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" name="email"   placeholder="Email" value="<?php echo isset($_POST['email'])? $_POST['email']:'';?>">
                        <?php if(isset($errors['em'])) { ?>
						   <div class="error">
								<?php echo $errors['em']; ?>
						   </div>
						   <?php } ?></div>
						<div class="form-group">
                            <label>mobile_no</label>
                            <input type="text" class="form-control" name="mobile_no" maxlength="10"  placeholder="Mobile_no" value="<?php echo isset($_POST['mobile_no'])? $_POST['mobile_no']:'';?>">
                        <?php if(isset($errors['mob_no'])) { ?>
						   <div class="error">
								<?php echo $errors['mob_no']; ?>
						   </div>
						   <?php } ?>
						</div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control"  name="password" placeholder="Password" value="<?php echo isset($_POST['password'])? $_POST['password']:'';?>">
							<?php if(isset($errors['p'])) { ?>
						   <div class="error">
								<?php echo $errors['p']; ?>
						   </div>
						   <?php } ?>
						</div>

                        <button type="submit" name="signup" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>

                        <div class="register-link m-t-15 text-center">
                            <p>Already have account ? <a href="index.html"> Sign in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
        </div> <!-- .content -->
    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
    <script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
    <script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
    <script>
        ( function ( $ ) {
            "use strict";

            jQuery( '#vmap' ).vectorMap( {
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: [ '#1de9b6', '#03a9f5' ],
                normalizeFunction: 'polynomial'
            } );
        } )( jQuery );
    </script>
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
		    <script type="text/javascript"> 
		      $(document).ready( function() {
		        $('.error').delay(3000).fadeOut();
		      });
		  </script>

</body>
</html>
