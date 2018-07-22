<?php
require_once '../../connections/db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
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
        <!-- /navbar -->
        <div class="wrapper">
            <div class="container">
                <div class="row">
                  <?php include 'includes/aside.php'?>
                    <!--/.span3-->
                    <div class="span9">
                        <div class="content">
                            <div class="btn-controls">
                            <div class="btn-box-row row-fluid">
                                    <div class="span8">
                                        <div class="row-fluid">
                                            <div class="span12">
                                            <?php 									
                                                    $sql = "SELECT * FROM events";
                                                    $run = mysqli_query($con, $sql);
                                                    $total_events = mysqli_num_rows($run);
								            ?>
                                                <a href="#" class="btn-box small span4"><i class="icon-bullhorn"></i><b> <?php echo $total_events;?></b>
                                                <p class="text-muted">News</p></a>
                                                <?php 
                                                    $sql = "SELECT * FROM users";
                                                    $run = mysqli_query($con, $sql);
                                                    $total_users = mysqli_num_rows($run);
                                                ?>
                                                <a href="#" class="btn-box small span4"><i class="icon-group"></i><b> <?php echo $total_users;?></b> <p class="text-muted">Users</p></a>
                                                <?php 
                                                    $sql = "SELECT * FROM posts WHERE category='notice'";
                                                    $run = mysqli_query($con, $sql);
                                                    $total_notice = mysqli_num_rows($run);
                                                ?>
                                                <a href="#" class="btn-box small span4"><i class="icon-group"></i><b> <?php echo $total_notice;?></b> <p class="text-muted">Posts</p></a>
                                                
                                            </div>
                                        </div>
                                        <div class="row-fluid">
                                            <div class="span12">
                                            <?php 
                                                    $sql = "SELECT * FROM batch";
                                                    $run = mysqli_query($con, $sql);
                                                    $total_batch = mysqli_num_rows($run);
                                                ?>
                                                <a href="#" class="btn-box small span4"><i class="icon-group"></i><b> <?php echo $total_batch;?></b> <p class="text-muted">Batch</p></a>
                                                <?php 
                                                    $sql = "SELECT * FROM posts WHERE category='note'";
                                                    $run = mysqli_query($con, $sql);
                                                    $total_notes = mysqli_num_rows($run);
                                                ?>
                                                <a href="#" class="btn-box small span4"><i class="icon-book"></i><b><?php echo $total_notes;?> <p class="text-muted">Notes</p></b></a>
                                                <?php 
                                                    $sql = "SELECT * FROM posts WHERE category='assignment'";
                                                    $run = mysqli_query($con, $sql);
                                                    $total_assignment = mysqli_num_rows($run);
                                                ?>
                                                <a href="#" class="btn-box small span4"><i class="icon-pencil"></i><b><?php echo $total_assignment;?> <p class="text-muted">Assignments</p></b></a>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="widget widget-usage unstyled span4">
                                        <li>
                                            <p>
                                                <strong>Calender</strong> 
                                            </p>
                                           
                                        </li>
                                        <li>
                                         <p> Calender contentts</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!--/#btn-controls-->                        
                        </div>
                        <div class="content">
                        <div class="module">
                        <div class="module-head">
								<h3>Notices</h3>
							</div>
                            <div class="module-body">
                                <div class="profile-head media">
                                    <a href="#" class="media-avatar pull-left">
                                        <img src="images/user.png">
                                    </a>
                                    <div class="media-body">
                                        <h4>
                                            John Donga <small>Offline</small>
                                        </h4>
                                        <p class="profile-brief">
                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                            unknown printer took a galley of type.
                                        </p>                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="content">                        
						<div class="module message">
							<div class="module-head">
								<h3>News</h3>
							</div>
							<div class="module-option clearfix">
							
								<div class="pull-right">
									<a href="news.php" class="btn btn-primary">Create News</a>
								</div>
							</div>
							<div class="module-body table">	
                                
								<table class="table table-message">
									<tbody>
										<tr class="heading">
											<td class="cell-id">S.N</td>
                                            <td class="cell-title">Title</td>
                                            <td class="cell-author">Author</td>
                                            <td class="cell-image">Image</td>
                                            <td class="cell-content">Content</td>
											<td class="cell-status hidden-phone hidden-tablet">Action</td>
											<td class="cell-time align-right">Date</td>
                                        </tr>
                                        <?php 
									
                                            $i=1;
                                            $query = "SELECT * FROM events ORDER BY 1 DESC LIMIT 3";
                                            $result = mysqli_query($con,$query);

                                            while ($row = mysqli_fetch_array($result)) {
                                                $id = $row['id'];
                                                $title = $row['title'];
                                                $image = $row['image'];
                                                $content = substr($row['content'],0,400);
                                                $author = $row['author'];
                                                $date = $row['date'];

								?>
										<tr class="task">
											<td class="cell-icon"><?php echo $i++; ?></td>
											<td class="cell-title"><div><?php echo $title; ?></div></td>
                                            <td class="cell-author"><?php echo $author; ?></td>
                                            <td class="cell-image"><img src="../../storage/<?php echo $image;?>" width="50" height="50"/></td>
                                            <td class="cell-content"><?php echo $content; ?></td>
                                            <td class="cell-status hidden-phone hidden-tablet"><a href="edit.php?edit=<?php echo $id;?>">Edit</a> <a href="delete.php?del=<?php echo $id;?>" onclick="return confirm('Do you want to delete this event?')">Delete</a></td>
											<td class="cell-time align-right"><?php echo $date; ?></td>
                                        </tr>
                                        <?php 
									}
								?>  			
                                                                            
									</tbody>
								</table>


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
        <script src="scripts/flot/jquery.flot.js" type="text/javascript"></script>
        <script src="scripts/flot/jquery.flot.resize.js" type="text/javascript"></script>
        <script src="scripts/datatables/jquery.dataTables.js" type="text/javascript"></script>
        <script src="scripts/common.js" type="text/javascript"></script>
      
    </body>
