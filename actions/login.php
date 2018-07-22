<?php @session_start();
// require database
require_once '../connections/db.php';

// Login Handler
// get post data
$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];



$query = mysqli_query($con, "SELECT * FROM users WHERE email='$username' AND password='$password'");
if (mysqli_num_rows($query) > 0) {
    // login users
    $row = mysqli_fetch_assoc($query);

    if ($row['type'] == 'teacher'){
        $_SESSION['loggedUser_name']=$row['name'];
        $_SESSION['loggedUser'] = $row['id'];
		$_SESSION['email']=$row['email'];
        header('Location: ../pages/teacher/teacher_dashboard.php');
    }
    elseif ($row['type'] == 'admin') {
		 $_SESSION['loggedUser_name']=$row['name'];
        $_SESSION['loggedUser'] = $row['id'];
		$_SESSION['email']=$row['email'];
        header('Location: ../pages/admin/admin_dashboard.php');
    }
    else {
		 $_SESSION['loggedUser_name']=$row['name'];
        $_SESSION['loggedUser'] = $row['id'];
		$_SESSION['email']=$row['email'];
        header('Location: ../pages/student/student_dashboard.php');
    }
} else {
  //  echo "Invalide Username or Password<br>";
   // echo "Redirecting Back in 5 sec";
   // header('refresh:5; url:../index.php');
   header('Location: ../index.php?msg=error');
}
 ?>
