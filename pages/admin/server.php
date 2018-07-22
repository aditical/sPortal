<?php
include '../../connections/db.php';
if (isset($_POST['add'])) {
    $name = $_POST["name"];   
    $email = $_POST["email"];
    $password = $_POST["password"];
    $type = $_POST["type"];	
	$batch= $_POST["cmbBatch"];   
	$image_name=$_FILES['image']['name'];
			$image_type=$_FILES['image']['type'];
			$image_size=$_FILES['image']['size'];
			$image_tmp=$_FILES['image']['tmp_name'];
			$path="../../storage/$image_name";
			
			if ($image_type=="image/jpeg" or $image_type=="image/jpg" or $image_type=="image/png" or $image_type=="image/PNG" or $image_type=="image/JPG" or $image_type=="image/JPEG"  ) {
				if ($image_size>=1) {			
					move_uploaded_file($image_tmp,$path);
				}
				else{
					echo ("<script>alert('Invalid file size, use higher size')</script>");
					exit();
				}

			}
			else{
				echo "<script>alert('Inavlid file type')</script>";
				exit();
			}

		if ($type == 'teacher' or $type == 'admin') {
			$batch = 0;
		}
		//$password=md5($password);
		$insert_sql="INSERT INTO users (name,email,password,type,batch_id, image) VALUES('$name', '$email', '$password','$type','$batch','$image_name' )";
		$result=mysqli_query($con, $insert_sql);
		
		if ($result) {
				$query = mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND password='$password'");
				echo ("<script>alert('User has been added.')</script>");
				echo ("<script>window.open('user.php?view=view','_self')</script>");	    
			}
			
	}

?>

