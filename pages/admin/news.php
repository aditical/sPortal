﻿<!DOCTYPE html>
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

						<div class="module">
							<div class="module-head">
								<h3>News</h3>
							</div>
							<div class="module-body">							
									<form class="form-horizontal row-fluid" action=../../actions/add_news.php method="POST" enctype="multipart/form-data">
										<div class="control-group">
											<label class="control-label" for="basicinput">Title</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Type something here..." class="span8"name="title">
												
											</div>
										</div>	
										<div class="control-group">
											<label class="control-label" for="basicinput">Author</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Author" class="span8"name="author">
												
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Upload an image</label>
											<div class="controls">
												<input type="file"  id="basicinput"  name="image" class="span8">
												
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput" >Content</label>
											<div class="controls">
												<textarea class="span8" rows="5"name="content"></textarea>
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn" value="Insert Event" name="submit">Submit</button>
											</div>
										</div>
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