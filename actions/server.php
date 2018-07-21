<?php
session_start();
include '../connections/db.php';
?>
<?php
if (isset($_POST['add'])) {
    $name = $_POST['name'];   
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type =$_POST['type'];	
    $batch= $_POST['cmbBatch'];    
	$query="INSERT INTO users (name,email,password,type,batch_id) VALUES('$name', '$email', '$password','$type',$batch)";
		
	if (mysqli_query($con,$query)){
		echo ("<script>alert('User has been inserted.')</script>");				
		echo ("<script>window.open('../pages/edmin/index.php?view=view','_self')</script>");
	}	
?>