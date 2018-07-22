<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
  <meta charset="utf-8" />
  <title>sPORTAL</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" />
    <link rel="stylesheet" href="css/app.css" type="text/css" />
    
    </head>
<body>

  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
    <div class="container aside-xxl">
      <a class="navbar-brand block" href="index.html">sPORTAL</a>
	  <?php if(!empty($_GET['msg']) and ($_GET['msg']=='error')){ echo "Invalid Username or password"; }?>
      <section class="panel panel-default bg-white m-t-lg">
        <header class="panel-heading text-center">
          <strong>Change Password</strong>
        </header>
        <form class="form-signin" method="POST" name="forgetpwd">
          <div class="form-group">
           
            <input type="Email" name="email" placeholder="Email" class="form-control input-lg" required>
          </div>
          
          <input type="submit" name="forget" class="btn btn-primary" value="Forget Password">
		  
		  
         
           </form>
      </section>
       <script src="js/jquery.min.js"></script>
         <script src="js/bootstrap.js"></script>
          <script src="js/app.js"></script>
  <script src="js/app.plugin.js"></script>
  <script src="js/slimscroll/jquery.slimscroll.min.js"></script>
  
</body>
</html>

<?php 
if(isset($_POST['forget'])){
	$email_tosend=$_POST['email'];
// select email from database with this email if exist select passsword field from database and below program will send email
	
	include_once("../connections/db.php");
			$sql="select password from users where email="."'".$email_tosend."'";
			$run=mysqli_query($con,$sql);
			$count=mysqli_num_rows($run);
			if($count> 0){
			$data=mysqli_fetch_array($run);
			$password=$data['password'];
			$subject="Forget password";
			include_once('function/gmail.php');
			date_default_timezone_set('Etc/UTC');
			require_once ('classes/PHPMailer-master/PHPMailerAutoload.php');
			//Create a new PHPMailer instance
			$mail = new PHPMailer;	
			send_mail($email_tosend,$subject,$password,$mail);
			echo "<script>alert('Password has been send to your email')</script>";	
			}else{
			echo "<script>alert('Email Does not exist')</script>";	
			}
}
 

?>
