
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
								<h3>Reset Password</h3>
							</div>
							<div class="module-body">							
									<form class="form-horizontal row-fluid" action=reset.php method="POST" enctype="multipart/form-data">
										<div class="control-group">
											<label class="control-label" for="basicinput">Current Password</label>
											<div class="controls">
												<input type="password" id="basicinput"  class="span8"placeholder="Current Password" name="cur_password">
												
											</div>
										</div>	
										<div class="control-group">
											<label class="control-label" for="basicinput">New Password</label>
											<div class="controls">
												<input type="password" id="basicinput"class="span8"placeholder="New password" name="new_password">
												
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Repeat new password</label>
											<div class="controls">
												<input type="password"  id="basicinput"  placeholder="New password" name="new_password2" class="span8">
												
											</div>
										</div>
										

										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn"value="Change Password" name="update">Change Password</button>
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
	
</html>

<?php 
	include_once("../../connections/db.php");
	//var_dump($_SESSION);
	if(isset($_POST['update'])){
		if ($_POST['cur_password']=='' or $_POST['new_password']=='' or $_POST['new_password2']==''){
			echo ("<script>alert('FILL All THE FIELDS')</script>");
			exit();
		}
		else{
			$cur_password=$_POST['cur_password'];
			$new_password=$_POST['new_password'];
			$new_password2=$_POST['new_password2'];
			
			$sql="select password from users where email="."'".$_SESSION['email']."'";
			$run=mysqli_query($con,$sql);
			$data=mysqli_fetch_array($run);
			//$count=mysqli_num_rows($run);
					if($cur_password == $data['password']){
						
						if($new_password!=$new_password2){
							$message="Password and Repeat Password does not match";
							}
						else{
							$sql_update="update users set password="."'".$new_password."' where email ="."'".$_SESSION['email']."'";
							$run=mysqli_query($con,$sql_update);
							$message= "Password has been changed";
						}	
						
					}else{
						$message="Supplied password is not valid";
						
					}
					echo "<script>alert('".$message."')</script>";
				
				
			}		
		
		}	
		
?>