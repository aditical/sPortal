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
        <?php include 'includes/aside.php'?>               
        <section id="content">
          <section class="vbox">          
            <section class="scrollable padder">
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
                      <a class="clear" href="view_batch.php?batch=<?php echo $batch;?>">
                        <span class="h3 block m-t-xs"><strong><?php echo $batch; ?></strong></span>
                        <small class="text-muted text-uc"><?php echo $total_students; ?></small>
                      </a>
                    </div>    
                    <?php 
								}
							?>         
               
                  
                 
                </div>
              </section>                       
              <div class="row">
                <div class="col-sm-8">
                 <section class="panel panel-info">
                   <header class="panel-heading">
                     <ul class="nav nav-pills pull-right">
                       <li>
                         <a href="#" class="panel-toggle text-muted"><i class="fa fa-caret-down text-active"></i><i class="fa fa-caret-up text"></i></a>
                        </li>
                      </ul>
                      News <span class="badge bg-info"></span>                    
                    </header>
                 <section class="panel-body">
                    <?php 
                         $i=1;
                         $query = "SELECT * FROM events ORDER BY 1 DESC LIMIT 4";
                         $result = mysqli_query($con,$query);
                         while ($row = mysqli_fetch_array($result)) {
                         $id = $row['id'];
                         $title = $row['title'];
                         $image = $row['image'];
                         $content = substr($row['content'],0,100);
                         $author = $row['author'];
                         $date = $row['date'];
                        ?>
                    <article class="media">
                        <div class="pull-left">
                            <span class="fa-stack fa-lg"></span> 
                            <img src="../../storage/<?php echo $image;?>" width="120" height="120"/>
                          
                        </div>
                        <div class="media-body">                        
                            <a href="#" class="h4"><?php echo $title; ?></a>
                            <small class="block m-t-xs"><?php echo $content; ?>.....<a class="text-info href="#">Read More</a> </small>
                             <div class="m-b-md"></div>
                             <div class="pull-right"> 
                            <em class="text-xs">Posted by <span class="text-inverse"><strong><?php echo $author;?></strong></span></em>
                            <em class="text-xs">on <span class="text-inverse"><strong><?php echo $date; ?></strong></span></em>
                        </div>
                      </div>
                        </article> 
                        <div class="line pull-in"></div>
                    <?php 
						          }
                    ?>                                   
                </section>  
              </div>   
              <div class="col-md-4">
                  <!-- .crousel slide -->
                  <section class="panel panel-default">
                    <div class="carousel slide auto panel-body" id="c-slide">
                        <ol class="carousel-indicators out">
                          <li data-target="#c-slide" data-slide-to="0" class="active"></li>
                          <li data-target="#c-slide" data-slide-to="1" class=""></li>
                          <li data-target="#c-slide" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="item active">
                            <p class="text-center">
                              <a href="#"><em class="h4 text-mute">This is notice for teacher by admin</em></a><br>
                              <small class="text-muted">Prepare questions for 1st exam</small>
                            </p>
                          </div>
                          <div class="item">
                            <p class="text-center">
                              <em class="h4 text-mute">Notice2</em><br>
                              <small class="text-muted">Tomorrow you should take class earlier</small>
                            </p>
                          </div>
                          <div class="item">
                            <p class="text-center">
                              <em class="h4 text-mute">Notice 3</em><br>
                              <small class="text-muted">Department meeting tommorow</small>
                            </p>
                          </div>
                        </div>
                        <a class="left carousel-control" href="#c-slide" data-slide="prev">
                          <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right carousel-control" href="#c-slide" data-slide="next">
                          <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                  </section>
                  <!-- / .carousel slide -->
                </div>  
                <div class="col-md-4">
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