<?php
require_once '../../connections/db.php';
$batch = $_GET['batch'];
$query = "SELECT id FROM batch WHERE batch= '$batch' ";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);
$id = $row['id'];
$bid = $id;
?>
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
      
            <header class="header bg-white b-b b-light">
              <p><big> <?php echo $batch; ?></big></p>
            </header>
        
          <section class="hbox stretch">
            <!-- .aside -->
                        <!-- /.aside -->
            <!-- .aside -->
            <aside class="bg-white">
                  <section class="vbox">                    
                    <section class="scrollable">
                    <section class="panel panel-default">
                       <?php                    
                        
                          $sql = "SELECT * FROM posts WHERE batch_id='$id'";
                          $run = mysqli_query($con, $sql);
                          while ($row = mysqli_fetch_array($run)){
                            $id = $row['aid']; 
                            $name = $row['name'];
                            $file = $row['file'];
                            $category = $row['category'];                         
                      
                       ?>
                          <header class="panel-heading bg-danger lt no-border">
                          <div class="clearfix">
                            
                            <div class="clear">
                              <div class="h3 m-t-xs m-b-xs text-white">
                              <?php echo $category; ?> 
                           
                             <a href="#"> <i class="fa fa-trash-o text-white pull-right text-xs m-t-sm"style="font-size:24px"></i> </a> 
                             <a href="#"> <i class="fa fa-edit text-white pull-right text-xs m-t-sm" style="font-size:24px"></i> </a>               
                          </div>
                          <small> <?php echo $name; ?></small><br/>
                          <small> <?php echo $file; ?></small>
                        </header>
                          <?php } ?>
                      </section>
                    </section>
                  </section>
                </aside>
             <!-- /.aside -->
            <!-- .aside -->
            
            <!-- /.aside -->
            <aside class="aside-sm b-l">
              <section class="vbox">
                <header class="bg-light dk header">
                  <p>Students</p>
                </header>    
                <?php            
                        $query2 = "SELECT * FROM users WHERE batch_id='$bid' AND type='student' ";
                        $run = mysqli_query($con, $query2);
                        while ($row = mysqli_fetch_array($run)){
                          $id = $row['id']; 
                          $name = $row['name'];                                               
                    ?>        
                <section class="scrollable bg-white">
                
                  <div class="list-group list-group-alt no-radius no-borders">
                
                  <a class="list-group-item" href="#">
                        <i class="fa fa-circle text-success text-xs"></i>
                        <span><?php echo $name; ?></span>
                    </a>   
                                        
                  </div>
                  <?php } ?> 
                </section>
                
              </section>
            </aside>
          </section>
          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen" data-target="#nav"></a>
        </section>
        <aside class="bg-light lter b-l aside-md hide" id="notes">
          <div class="wrapper">Notification</div>
        </aside>
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
  

</body>
</html>