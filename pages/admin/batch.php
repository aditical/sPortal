<?php
require_once '../../connections/db.php';
session_start();
//$loggedUser_name= $_SESSION['loggedUser_name'];
//$loggeduser = $_SESSION['loggedUser'];
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
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
        rel='stylesheet'>
</head>
<body>
        <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                   <?php include 'includes/header.php';?>
                </div>
                <!-- /navbar-inner -->
            </div>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                  
                               <?php include 'includes/aside.php';?>
                           
                <div class="span9">
                    <div class="content">
                        <div class="module">
                            <div class="module-head">
                                <h3>
                                    Classes</h3>
                            </div>                           
                            <div class="module-body">
                            <?php                   
                                $query = "SELECT * FROM batch ";
                                $result = mysqli_query($con,$query);
                                while ($row = mysqli_fetch_array($result)) {
                                $id = $row['id']; 
                                $batch = $row['batch']; 
                                $sql = "SELECT * FROM users WHERE type='student' AND batch_id='$id'";
                                $run = mysqli_query($con, $sql);
                                $total_students = mysqli_num_rows($run);                     
                             ?>                             
                                <div class="row-fluid">
                                    <div class="span6">
                                        <div class="media user">
                                           
                                            <div class="media-body">
                                                <h3 class="media-title"> <strong>BATCH </strong>
                                                <?php echo $batch; ?></h3>
                                                <p>
                                                    <small class="muted"><?php echo $total_students;?> students</small></p>
                                                <div class="media-option btn-group shaded-icon">
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                 
                                </div>
                                <!--/.row-fluid-->
                                <br />
                                <?php 
								}
							?>  
                                
                                
                               
                              
                                <div class="pagination pagination-centered">
                                    <ul>
                                        <li><a href="#"><i class="icon-double-angle-left"></i></a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#"><i class="icon-double-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.content-->
                </div>
                <!--/.span9-->
            </div>
        </div>
        <!--/.container-->
    </div>
    <!--/.wrapper-->
    <div class="footer">
        <div class="container">
            <b class="copyright">&copy; 2014 Edmin - EGrappler.com </b>All rights reserved.
        </div>
    </div>
    <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
</body>
