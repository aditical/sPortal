<?php
require_once '../../connections/db.php';
?>
<!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  <title>Profile</title>
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
  <?php include 'includes/header.php';?>
  
    <section>
      <section class="hbox stretch">        
        <?php include 'includes/aside.php';?>               
        <section id="content">
          <section class="vbox">          
            <section class="scrollable padder">
              <div class="m-b-md"></div>
                <header class="header bg-white b-b b-light">
                <?php
                  $loggedUser_name= $_SESSION['loggedUser_name'];
                  $loggeduser = $_SESSION['loggedUser'];
                  $query = "SELECT * FROM users WHERE name='$loggedUser_name' ";
                  $result = mysqli_query($con,$query);
                  $row = mysqli_fetch_array($result);
                  $image = $row['image'];
                ?>
                 <p><?php echo $loggedUser_name; ?> 's profile</p>
                 </header>
                  <div class="m-b-md"></div>
                  <div class="wrapper col-md-4">
                        <div class="clearfix m-b">
                          <a href="#" class="pull-left thumb m-r">
                            <img src="images/avatar_default.jpg" class="img-circle">
                          </a>
                          <div class="clear">
                            <div class="h3 m-t-xs m-b-xs"><?php echo $loggedUser_name; ?></div>
                            <small class="text-muted"><i class="fa fa-map-marker"></i> </small>
                          </div>                    
                        </div>
                        <div class="m-b-md"></div>
                        <div class="btn-group btn-group-justified m-b">
                          <a class="btn btn-primary btn-rounded" href="queries.php" >
                            <span class="text">
                              <i class="fa fa-question"></i> View Queries
                            </span>
                          </a>
                          <a class="btn btn-dark btn-rounded" href = "edit_profile.php" >
                            <i class="fa fa-pencil"></i> Edit Profile
                          </a>
                        </div>
                        <div class="m-b-md"></div>
                        <div>
                          <small class="text-uc text-xs text-muted">about me</small>
                          <p>Artist</p>
                          <div class="m-b-md"></div>
                          <small class="text-uc text-xs text-muted">info</small>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi id neque quam. Aliquam sollicitudin venenatis ipsum ac feugiat.</p>
                          <div class="line"></div>
                          <div class="m-b-md"></div>
                        </div>
                      </div>
                      <div class="col-md-4">
                      <section class="panel panel-default">
                          <h4 class="font-thin padder">Latest Queries</h4>
                          <ul class="list-group">
                            <li class="list-group-item">
                               <a href="#" class="thumb-sm pull-left m-r-sm">
                                <img src="images/avatar_default.jpg" class="img-circle">
                              </a>
                              <a href="#" class="clear">
                                <strong class="block">Drew Wllon</strong>
                                <small>Wellcome and play this web application template ... </small>
                              </a>
                              <div class="m-b-md"></div>
                                <a href="#comment-form" class="btn btn-default btn-xs">
                              <i class="fa fa-mail-reply text-muted"></i> Reply
                            </a>
                            </li>
                          </ul>
                        </section>
                        </div>
                  <div class="col-md-4 clearfix">
                  <section class="panel b-light">
                    <header class="panel-heading bg-primary dker no-border"><strong>Calendar</strong></header>
                    <div id="calendar" class="bg-primary m-l-n-xxs m-r-n-xxs"></div>
                    <div class="list-group">
                      <a href="#" class="list-group-item text-ellipsis">
                        <span class="badge bg-danger">7:30</span> 
                        Meet a friend
                      </a>
                      <a href="#" class="list-group-item text-ellipsis"> 
                        <span class="badge bg-success">9:30</span> 
                        Have a kick off meeting with .inc company
                      </a>
                      <a href="#" class="list-group-item text-ellipsis">
                        <span class="badge bg-light">19:30</span>
                        Milestone release
                      </a>                      
                    </div>
                  </section>                  
                </div>
                </div>
              </div>
              </section>
              </section>
              </section>
      </section>
    </section>
  </section>
  <script src="js/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.js"></script>
  <!-- App -->
  <script src="js/app.js"></script>
  <script src="js/app.plugin.js"></script>
  <script src="js/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
  <script src="js/charts/sparkline/jquery.sparkline.min.js"></script>
  <script src="js/charts/flot/jquery.flot.min.js"></script>
  <script src="js/charts/flot/jquery.flot.tooltip.min.js"></script>
  <script src="js/charts/flot/jquery.flot.resize.js"></script>
  <script src="js/charts/flot/jquery.flot.grow.js"></script>
  <script src="js/charts/flot/demo.js"></script>

  <script src="js/calendar/bootstrap_calendar.js"></script>
  <script src="js/calendar/demo.js"></script>

  <script src="js/sortable/jquery.sortable.js"></script>

</body>
</html>