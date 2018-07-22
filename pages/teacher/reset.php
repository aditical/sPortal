<!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  <title>Teacher Dashboard</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" />
  <link rel="stylesheet" href="js/calendar/bootstrap_calendar.css" type="text/css" />
  <link rel="stylesheet" href="css/app.css" type="text/css" />
</head>
	<body>
	<section class="vbox">  
      <?php include 'includes/header.php'?> 
        <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <?php include 'includes/aside.php'?>
                <!-- /.aside -->
        <section id="content">
          <section class="vbox">          
            <section class="scrollable padder">
              <div class="m-b-md"></div>
              <div class="row">
                <div class="col-md-8">
                  <section class="panel panel-success">
                    <header class="panel-heading font-default">Reset Password</header>
                    <div class="panel-body">
                      <form class="bs-example form-horizontal" action="reset.php" method="POST" enctype="multipart/form-data">                      
                       
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Current Password</label>
                          <div class="col-lg-10">
                              <input type="password" class="form-control"  placeholder="Current Password" name="cur_password">
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">New Password</label>
                          <div class="col-lg-10">
                              <input type="password" class="form-control" placeholder="New password" name="new_password"></input>
                            </div>
                        </div>
						<div class="form-group">
                          <label class="col-lg-2 control-label">New Password</label>
                          <div class="col-lg-10">
                              <input type="password" class="form-control" placeholder="New password" name="new_password2"></input>
                            </div>
                        </div>                      
                                        
                        <div class="form-group">
                          <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-sm btn-success" value="Change Password" name="update">Change Password</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </section>    
                </div>         
              </div>
      </section>
    </section>
  </section>
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