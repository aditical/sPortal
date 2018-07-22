<?php
require_once '../../connections/db.php';
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
                                   Posts</h3>
                            </div>                           
                            <div class="module-body">
                            <?php                   
                                $query ="SELECT * FROM posts ORDER BY 1 DESC";
                                $result = mysqli_query($con,$query);
                                while ($row = mysqli_fetch_array($result)) {
                                    $id = $row['aid'];
                                    $title = $row['name'];
                                    $batch = $row['batch_id'];
									$file = $row['file'];									
                                    $author = $row['teacher_name'];
                                    $category= $row['category'];
									$date = $row['date'];                     
                             ?>                             
                                <div class="row-fluid">
                                    <div class="span12">
                                        <div class="media user">
                                           
                                            <div class="media-body">
                                                <h2 class="media-title"> <strong><?php echo $title; ?> </strong>
                                                </h2>  
                                                <small><?php echo $category; ?></small>  
                                                <a href="delete_posts.php?deln=<?php echo $id;?>" class="  pull-right text-xs m-t-sm"><i class="icon-trash"></i></a>                                                    
                                                <p>
                                                <div class="pull-left">                                                    
                                                                             
                                                </div>
                                                    <a href="../../<?php echo $file; ?>">Download</a>
                                                    <em class="pull-right text-xs">on <span class="text-default"><strong><?php echo $date; ?></strong></span></em> 
                                                    <em class="pull-right text-xs">Posted by <span class="text-default"><strong><?php echo $author;?></strong></span></em>
                                                   
                                                                                       
                                                    
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
    <?php include 'includes/footer.php'?>
    <script src="scripts/jquery-1.9.1.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
</body>
