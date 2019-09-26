<?php
require_once('includes/config.php');
if(!isset($_SESSION['auth']['id']))
{
  header("Location:index.php");
  exit;
}
if(isset($_POST['add']))
{
 $errors = validate_event_blog();
  if(count($errors)==0)
  {
	 $rand = rand();
     $src=$_FILES['image3']['tmp_name'];
	 $dest='images/blog/'.$rand.$_FILES['image3']['name'];
	 $photo='';
	 if(move_uploaded_file($src,$dest))
	 //$photo=$rand.$_FILES['event_img']['name'];
	 
	 
  // 	 if(!empty($_POST['date'])){
  // 	      $date= $_POST['date'];
  //	      $date;
  // 	      $date= strtotime($date);
  // 	      $date = date('d-m-y',$date);
  // 	      // echo $date;
  // 	 }
	
	
     $sql="INSERT INTO blog SET blog_name='".$_POST['blog_name']."',image3='$dest',details='".$_POST['details']."',date='".$_POST['date']."',created=NOW()";
	 if(mysqli_query($con,$sql))
	 {
	  echo("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Succesfully Added')
    window.location.href='blog.php';
    </SCRIPT>");
	 }
	 else
	 {
	   echo("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Could not Added')
    window.location.href='blog.php';
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
                        <h1>Blogs</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Blogs</li>
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
                    <h2>Add Blogs</h2>
                </div>
                <div class="login-form">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Blogs Title</label>
                            <input type="text" class="form-control" name="blog_name" placeholder="Blogs Title" value="<?php echo isset($_POST['blog_name'])? $_POST['blog_name']:'';?>">
							<?php if(isset($errors['en'])) { ?>
							   <div class="error">
									<?php echo $errors['en']; ?>
							   </div>
						   <?php } ?>
						</div>
						<div class="form-group">
                            <label>Blogs Photo</label>
                            <input type="file"  name="image3">
							<?php if(isset($errors['pic2'])) { ?>
							   <div class="error">
									<?php echo $errors['pic2']; ?>
							   </div>
						   <?php } ?>
                        </div>
                        <div class="form-group">
                            <label>Blog Details</label>
                            <input type="text" class="form-control"  placeholder="Blog Details" name="details" value="<?php echo isset($_POST['details'])? $_POST['details']:'';?>" />
							<?php if(isset($errors['ev'])) { ?>
							   <div class="error">
									<?php echo $errors['ev']; ?>
							   </div>
						   <?php } ?>
						</div>
						<div class="form-group">
                            <label>Blog Date</label>
                            <input type="date" class="form-control"  placeholder="Blog Date" name="date" value="<?php echo isset($_POST['date'])? $_POST['date']:'';?>" />
							<?php if(isset($errors['da'])) { ?>
							   <div class="error">
									<?php echo $errors['da']; ?>
							   </div>
						   <?php } ?>
						</div>

					
                        <button type="submit" name="add" class="btn btn-primary btn-flat m-b-30 m-t-30">Add</button>

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
