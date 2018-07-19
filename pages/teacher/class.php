<?php
require_once '../../connections/db.php';
?>
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
        <?php include 'includes/aside.php' ?>
                <!-- /.aside -->
        <section id="content">
          <section class="vbox">          
            <section class="scrollable padder">
              <div class="m-b-md"></div>
              <div class="row">
                <div class="col-md-12">
                  <h4 class="m-t-none">Classes</h4>
                  <div class="m-b-md"></div>
              <section class="panel panel-default">
                <div class="row m-l-none m-r-none bg-light lter">
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
                      <div class="col-sm-6 col-md-3 padder-v b-r b-light">
                      <span class="fa-stack fa-2x pull-left m-r-sm">
                        <i class="fa fa-circle fa-stack-2x text-info"></i>
                        <i class="fa fa-users fa-stack-1x text-white"></i>
                      </span>
                      <a class="clear" href="view_batch.php">
                        <span class="h3 block m-t-xs"><strong><?php echo $batch; ?></strong></span>
                        <small class="text-muted text-uc"><?php echo $total_students; ?></small>
                      </a>
                    </div>    
                    <?php 
								}
							?>               
               
                </div>
              </section>     
                </div>         
              </div>
      </section>
    </section>
  </section>
  <script src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- App -->
  <script src="js/app.js"></script>
  <script src="js/app.plugin.js"></script>

  <script src="js/sortable/jquery.sortable.js"></script>

 </body>
</html>