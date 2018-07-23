<?php
require_once '../../connections/db.php';
?>
<!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  <title>Queries</title>
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
                 <h4 class="text-center">Query Section</h4>
                      <div class="m-b-md"></div>
                 </header>
                  <div class="m-b-md"></div>
                  <div class="col-md-8">
                  <article id="comment-id-4" class="comment-item">
                      <a class="pull-left thumb-sm avatar"><img src="images/avatar_default.jpg" class="img-circle"></a>
                      <span class="arrow left"></span>
                      <section class="comment-body panel panel-success ">
                        <header class="panel-heading">
                          <a href="#">Peter</a>
                          <label class="label bg-primary m-l-xs"></label> 
                        </header>
                        <div class="panel-body">
                          <div>Lorem ipsum dolor sit amet, consecteter adipiscing elit...</div>
                          <div class="comment-action m-t-sm">
                            <a href="#comment-form" class="btn btn-default btn-xs"><i class="fa fa-mail-reply text-muted"></i> Reply</a>
                          </div>
                        </div>
                      </section>
                    </article>
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