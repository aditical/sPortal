<?php
require_once '../../connections/db.php';
session_start();
//$loggedUser_name= $_SESSION['loggedUser_name'];
//$loggeduser = $_SESSION['loggedUser'];
?>
<?php include '../../actions/server.php'; ?>  
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
						<div class="module">
							<div class="module-head">
								<h3>Notice</h3>
							</div>
							<div class="module-body">							
									<form class="form-horizontal row-fluid" action=user.php method="POST" enctype="multipart/form-data">
										<div class="control-group">
											<label class="control-label" for="basicinput">Name </label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Full Name" class="span8"name="name">												
											</div>
                                        </div>	
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Email</label>
											<div class="controls">
												<input type="email" id="basicinput" placeholder="someone@something.com" class="span8"name="email " id="email">												
											</div>
                                        </div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Password</label>
											<div class="controls">
												<input type="password" id="basicinput" name="password" id="pwd" placeholder="Password"  class="span8">												
											</div>
                                        </div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Select category</label>
											<div class="controls">
												<select tabindex="1"  class="span8" name="type" id="cmbSelectType">
                                                    <option value="">Select</option>
                                                    <option value="admin">Admin</option>
													<option value="teacher">Teacher</option>
													<option value="student">Student</option>												
												</select>
											</div>
										</div>									
										<div class="control-group">
											<label class="control-label" for="basicinput">Upload an image</label>
											<div class="controls">
												<input type="file"  id="basicinput"  name="image" class="span8">												
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput" >Description</label>
											<div class="controls">
												<textarea class="span8" rows="5"name="description"></textarea>
											</div>
                                        </div>
                                        <div class="control-group"id="showBatch">
											<label class="control-label" for="basicinput">Select batch</label>
											<div class="controls">
												<select tabindex="1" class="span8" name="cmbBatch">
                                                    <?php
                                                    while($row = mysqli_fetch_assoc($query)) { ?>
                                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['batch']; ?></option>
                                                    <?php } ?>												
												</select>
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn" value="Insert User" name="add">Add</button>
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

	<div class="footer">
		<div class="container">
			 

			<b class="copyright">&copy; 2014 Edmin - EGrappler.com </b> All rights reserved.
		</div>
	</div>

	<script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
	<script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
	<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
    <script type="text/javascript">
		$('#cmbSelectType').change(function() {
			var type = $(this).val();
			if (type == 'student') {
				$('#showBatch').fadeIn('slow');
			} else {
				$('#showBatch').hide();
			}
		});
	</script>
</body>
</html>