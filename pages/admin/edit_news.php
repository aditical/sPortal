<!DOCTYPE html>
<html lang="en">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edmin</title>
	<link type="text/css" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link type="text/css" href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link type="text/css" href="css/theme.css" rel="stylesheet">
	<link type="text/css" href="images/icons/css/font-awesome.css" rel="stylesheet">
	<link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600' rel='stylesheet'>
	<script> CKEDITOR.replace( 'editor1' ); </script>
</head>
<body>

	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="navbar navbar-fixed-top">
				<div class="navbar-inner">
				   <?php include 'includes/header.php';?>
				</div>
				<!-- /navbar-inner -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->



	<div class="wrapper">
		<div class="container">
			<div class="row">
				<?php include 'includes/aside.php'?>
				<div class="span9">
					<div class="content">
                    <?php
                        $connect = mysqli_connect("localhost", "root", "", "sagarmatha");				
                        $edit_id = @$_GET['edit'];	
                        $query = "SELECT * FROM events WHERE id='$edit_id'";
                        $result = mysqli_query($connect,$query);
                        while ($row = mysqli_fetch_array($result)) {
                            $edit_id1 = $row['id'];
                            $title = $row['title'];
                            $image = $row['image'];
                            $content = $row['content'];
                            $author = $row['author'];
                            $date = $row['date'];
            		?>
						<div class="module">
							<div class="module-head">
								<h3>News</h3>
							</div>
							<div class="module-body">							
									<form class="form-horizontal row-fluid" action=edit_news.php?edit_form=<?php echo $edit_id1; ?> method="POST" enctype="multipart/form-data">
										<div class="control-group">
											<label class="control-label" for="basicinput">Title</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Type something here..." class="span8"name="title" value="<?php echo $title; ?>">
												
											</div>
										</div>	
										<div class="control-group">
											<label class="control-label" for="basicinput">Author</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Author" class="span8"name="author"value="<?php echo $author; ?>">
												
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Upload an image</label>
											<div class="controls">
												<input type="file"  id="basicinput"  name="image" class="span8">
												<img src="../../storage/<?php echo $image; ?>" width="100" height"100">
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput" >Content</label>
                                            
											<div class="controls">
												<textarea class="span8" rows="5"name="content"><?php echo $content; ?></textarea>
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn" value="Insert Event" name="update">Update</button>
											</div>
										</div>
                                        <?php
                                            } 
                                        ?>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	 <?php include 'includes/footer.php'?>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
</body>
</html>
<?php
	if(isset($_POST['update']))
	{
		$update_id = $_GET['edit_form'];
		$post_title = $_POST['title'];
		$post_date = date('y-m-d');
		$post_author = $_POST['author'];
		$post_content = $_POST['content'];
		$post_image = $_FILES['image']['name'];
		$post_image_type = $_FILES['image']['type'];
		$post_image_size = $_FILES['image']['size'];
		$post_image_tmp = $_FILES['image']['tmp_name'];
		$path="../../storage/$post_image";
		move_uploaded_file($post_image_tmp, $path);
		$connect = mysqli_connect("localhost", "root", "", "sagarmatha");
		$query="UPDATE events set title = '$post_title', author = '$post_author', image = '$post_image', content = '$post_content', date = '$post_date' WHERE id = '$update_id'";
		if (mysqli_query($connect,$query)) {			
			echo "<script>alert('Event has been updated.')</script>";
			echo "<script>window.open('view_news.php','_self')</script>";
		}
	}
?>