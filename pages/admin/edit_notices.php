<?php
require_once '../../connections/db.php';
$query = mysqli_query($con, "SELECT * FROM batch");
?>
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
                        $query = "SELECT * FROM anotice WHERE id='$edit_id'";
                        $result = mysqli_query($connect,$query);
                        while ($row = mysqli_fetch_array($result)) {
                            $edit_id1 = $row['id'];
                            $title = $row['title'];
                            $file = $row['image'];									
                            $description = $row['description'];
                            $type= $row['category'];
                            $batch= $row['batch_id'];
                            $date = $row['date']; 
            		?>
						<div class="module">
							<div class="module-head">
								<h3>Edit Notice</h3>
							</div>
							<div class="module-body">							
									<form class="form-horizontal row-fluid" action=edit_notices.php?edit_form=<?php echo $edit_id1; ?> method="POST" enctype="multipart/form-data">
										<div class="control-group">
											<label class="control-label" for="basicinput">Title</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="Type something here..." class="span8"name="title" value="<?php echo $title; ?>">
												
											</div>
										</div>	
                                        <div class="control-group">
											<label class="control-label" for="basicinput">Select category</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." class="span8" name="type" id="cmbSelectType">
													<option value="">Select here..</option>
													<option value="teacher">Teacher</option>
													<option value="student">Student</option>												
												</select>
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="basicinput">Upload an image</label>
											<div class="controls">
												<input type="file"  id="basicinput"  name="image" class="span8">
												<img src="../../storage/<?php echo $file; ?>" width="100" height"100">
											</div>
										</div>
                                        <div class="control-group">
											<label class="control-label" for="basicinput" >Description</label>
											<div class="controls">
												<textarea class="span8" rows="5"name="description"><?php echo $description; ?></textarea>
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
												<button type="submit" class="btn" value="Insert Notice" name="update">Update</button>
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
<?php
	if(isset($_POST['update']))
	{
		$update_id = $_GET['edit_form'];
		$post_title = $_POST['title'];
		$post_date = date('y-m-d');
        $post_type = $_POST['type'];
        $post_batch= $_POST["cmbBatch"]; 
		$post_description = $_POST['description'];
		$post_image = $_FILES['image']['name'];
		$post_image_type = $_FILES['image']['type'];
		$post_image_size = $_FILES['image']['size'];
		$post_image_tmp = $_FILES['image']['tmp_name'];
		$path="../../storage/$post_image";
		move_uploaded_file($post_image_tmp, $path);
		
		$sql="UPDATE anotice set title = '$post_title', description = '$post_description', image = '$post_image', category = '$post_type',batch_id ='$post_batch' ,date = '$post_date' WHERE id = '$update_id'";
			
        if ($con->query($sql)=== TRUE){
            echo ("<script>alert('Data has been inserted.')</script>");				
            echo ("<script>window.open('view_notices.php?view=view','_self')</script>");
        }else{
            echo "Error: " . $sql . "<br>" . $con->error;
        }
	}
?>