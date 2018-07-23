<!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  <title>Notebook | Web Application</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="css/animate.css" type="text/css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="css/font.css" type="text/css" />
  
  <link rel="stylesheet" href="css/app.css" type="text/css" />
  <!--[if lt IE 9]>
    <script src="js/ie/html5shiv.js"></script>
    <script src="js/ie/respond.min.js"></script>
    <script src="js/ie/excanvas.js"></script>
  <![endif]-->
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
           
            <section class="scrollable wrapper">              
              
              <div class="row">
               
                <div class="col-lg-12">
                  <!-- .comment-list -->
                  <?php                   
                          $query = "SELECT * FROM anotice WHERE category='teacher' ";
                          $result = mysqli_query($con,$query);
                          while ($row = mysqli_fetch_array($result)) {
                          $id = $row['id']; 
                          $title = $row['title']; 
                          $description = $row['description'];  
                          $date = $row['date'];                                      
                      ?>
                  <section class="comment-list block">                 
                 
                    <article id="comment-id-4" class="comment-item">
                      <a class="pull-left thumb-sm avatar"><img src="images/avatar.jpg" class="img-circle"></a>
                    
                      <section class="comment-body panel panel-default">
                        <header class="panel-heading">
                          <a href="#"><?php echo $title; ?></a>
                          <label class="label bg-primary m-l-xs">Admin</label> 
                          <span class="text-muted m-l-sm pull-right">
                            <i class="fa fa-clock-o"></i>
                            <?php echo $date; ?>
                          </span>
                        </header>
                        <div class="panel-body">
                          <blockquote>
                            <p><?php echo $description; ?></p>
                            
                          </blockquote>
                         
                         
                        </div>
                      </section>
                    </article>
                    <!-- comment form -->
                    
                  </section>
                          <?php } ?>
                  <!-- / .comment-list -->
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

</body>
</html>