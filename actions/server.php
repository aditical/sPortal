<?php
session_start();
include '../connections/db.php';

$errors=array();

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
if (isset($_POST['signup'])) {
    $fname = test_input($_POST["fname"]);
    $lname = test_input($_POST["lname"]);
    $email = test_input($_POST["email"]);
    $password = test_input($_POST["password"]);
    $type = test_input($_POST["type"]);	
    $batch= test_input($_POST["cmbBatch"]);
    $fullname=$fname.' '.$lname;

	$check_user_query="SELECT * FROM users WHERE email='$email' LIMIT 1"; //email= skhadka200ns@gmail.com
	$result=mysqli_query($con,$check_user_query);
	$user=mysqli_fetch_assoc($result);//if $result is true
	if ($user) { // if user exists
	    if ($user['email'] === $email) {
	      array_push($errors, "Email already exists");
	    }
	}

	if (count($errors) == 0){ 
		if ($type == 'teacher' or $type == 'admin') {
			$batch = 0;
		}
		//$password=md5($password);
		$insert_sql="INSERT INTO users (name,email,password,type,batch_id) VALUES('$fullname', '$email', '$password','$type',$batch)";
		$result=mysqli_query($con, $insert_sql);
		
		if ($result) {
				$query = mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND password='$password'");
			
			 // login users
			    $row = mysqli_fetch_assoc($query);

			    if ($type == 'teacher') {
					$_SESSION['loggedUser_name']=$row['name'];
			        $_SESSION['loggedUser'] = $row['id'];
			        header('Location: ../pages/teacher_dashboard.php');
			    }
				elseif ($type == 'admin') {
			        $_SESSION['loggedUser'] = $row['id'];
			        header('Location: ../pages/Admin.php');
				}
				else {
			        $_SESSION['loggedUser'] = $row['id'];
			        header('Location: ../pages/student_dashboard.php');
				}
			}	
		}	
	}

?>

