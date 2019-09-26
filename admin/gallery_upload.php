<?php
require_once('includes/config.php');
if(!isset($_SESSION['auth']['id']))
{ 
  header("Location:index.php");
  exit;
} 
if(isset($_POST['upload']))
{
	$errors = validate_gallery();
	  if(count($errors)==0)
	  {
	 $rand = rand();
     $src = $_FILES['image1']['tmp_name'];
	 $dest = 'images/gallery/'.$rand.$_FILES['image1']['name'];
	 //$file = $rand.$_FILES['file']['name'];
	 move_uploaded_file($src,$dest);
	 
     $sql = "INSERT INTO gallery SET image1='$dest',caption='".$_POST['caption']."' ,created=NOW()";
	 //print_r($sql);exit;
	 if(mysqli_query($con, $sql))
	 {
	  echo("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Succesfully Added')
		window.location.href='gallery_upload.php';
		</SCRIPT>");
	 }
	 else
	 {
	  	  echo("<SCRIPT LANGUAGE='JavaScript'>
		window.alert('Couldn't Added')
		window.location.href='gallery_upload.php';
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
exit;
}
?>

<?php
	require_once('includes/config.php');
	$slide = "SELECT * FROM gallery";
	$result = mysqli_query($con, $slide);
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
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
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
                        <h1>Gallery</h1>
                    </div>
                </div>
            </div>


            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Gallery</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
		 <div class="col-lg-12">
                    <div class="card">
                      <div class="card-header"><strong>Gallery Image upload</strong></div>
					  <form enctype="multipart/form-data" method="post">
                      <div class="card-body card-block">

                        <div class="row form-group ">

                          <div class="col-8">
                            <div class="form-group"><label class=" form-control-label">Upload Gallery Image</label>
							 <input type="file"  name="image1"  ></div>
							<?php if(isset($errors['slide'])) { ?>
							   <div class="error">
									<?php echo $errors['slide']; ?>
							   </div>
						   <?php } ?>
						   <br>
						  </div>
						  
						  <div class="col-8">
                            <div class="form-group"><label class=" form-control-label">Caption :</label>
							 <input type="text"  name="caption"></div>
							 <?php if(isset($errors['ev'])) { ?>
							   <div class="error">
									<?php echo $errors['ev']; ?>
							   </div>
						    <?php } ?>
						  </div>

                       	  
                        </div>
                      </div>
					  <div class="card-footer">
                        <button type="submit" name="upload" class="btn btn-primary btn-sm">
                          <i class="fa fa-dot-circle-o"></i> Upload
                        </button>
						
						
                      </div>
					  </form>
                    </div>

                  </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">All Gallery Images</strong>
                        </div>
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered">
                    <thead>
                      <tr>
                        <th>Sr.No</th>
                        <th>Gallery Image</th>
                        <th>Caption</th>
                        <th colspan="2">Action</th>
                      </tr>
                    </thead>
                    <tbody>

				<?php $sr=1 ?>
				<?php while($st = mysqli_fetch_array($result)){ ?>
                <tr>
				  <td width="10%"><?php echo "$sr"; ?></td>
                  <td width="30%"><img src="<?php echo $st['image1']; ?>" width="50%"></td>
                  <td width="40%"><?php echo $st['caption']; ?> </td>
                  <td width="10%"><a href="delete_gallery.php?id=<?php echo $st['id'];?>"
                  onclick="return confirm('do you want to delete this gallery image?');">Delete</a></td>
                  <td width="10%"><a href="edit_gallery.php?id=<?php echo $st['id'];?>"
				  onclick="return confirm('do you want to edit this gallery?');">Edit </a></td>
                  

				<?php $sr++ ?>
                </tr>
				 <?php } ?>


                    </tbody>
                  </table>
                        </div>
                    </div>
                </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>
<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
		    <script type="text/javascript"> 
		      $(document).ready( function() {
		        $('.error').delay(3000).fadeOut();
		      });
		  </script>

</body>
</html>
