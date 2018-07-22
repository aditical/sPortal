<?php
session_start();
include '../../connections/db.php';
if (isset($_POST['add'])) {
    $name = $_POST["name"];   
    $email = $_POST["email"];
    $password = $_POST["password"];
    $type = $_POST["type"];	
    $batch= $_POST["cmbBatch"];   

		if ($type == 'teacher' or $type == 'admin') {
			$batch = 0;
		}
		//$password=md5($password);
		$insert_sql="INSERT INTO users (name,email,password,type,batch_id) VALUES('$name', '$email', '$password','$type',$batch)";
		$result=mysqli_query($con, $insert_sql);
		
		if ($result) {
				$query = mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND password='$password'");
				echo ("<script>alert('User has been added.')</script>");
				echo ("<script>window.open('user.php?view=view','_self')</script>");	    
			}
			
	}

?>

