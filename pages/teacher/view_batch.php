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
      <?php
      $loggedUser_name= $_SESSION['loggedUser_name'];
      $loggeduser = $_SESSION['loggedUser'];
      ?>   
        <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <?php include 'includes/aside.php'?>             
          <!-- /.aside -->
        <section id="content">
        <section class="vbox">
      
            <header class="header bg-default b-b b-light">
              <p><big><strong> BATCH <?php echo $batch; ?></strong></big></p>
            </header>
        
          <section class="hbox stretch">
            <!-- .aside -->
                        <!-- /.aside -->
            <!-- .aside -->
            <aside class="bg-white">
                  <section class="vbox">                    
                    <section class="scrollable">
                       <div class="col-md-12">
                    <div class="m-b-md"></div>
                    <h4 class="text-center text-primary m-t-none"><strong>Classroom Essentials</strong></h4>
                    <div class="m-b-md"></div>
                    <section class="panel panel-default">
                    <header class="panel-heading bg-light">
                      <ul class="nav nav-tabs nav-justified">
                        <li class="active"><a href="#assignments" data-toggle="tab">Assignments</a></li>
                        <li><a href="#notes" data-toggle="tab">Notes</a></li>
                        <li><a href="#notices" data-toggle="tab">Notices</a></li>
                      </ul>
                    </header>
                    <section class="scrollable">
                      <div class="tab-content">
                        <div class="tab-pane active" id="assignments">
                          <?php                    
                              $sql = "SELECT * FROM posts WHERE batch_id='$id'AND category='assignment'";
                              $run = mysqli_query($con, $sql);
                              while ($row = mysqli_fetch_array($run)){
                              $id = $row['aid']; 
                              $name = $row['name'];
                              $file = $row['file'];
                                               
                          ?>
                          <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
                            <li class="list-group-item">
                              <a href="#" class="clear">
                                <small class="pull-right">
                                   <a href="#"> <i class="fa fa-trash-o text-warning pull-right text-xs m-t-sm" style="font-size:24px"></i> </a>
                                   <a href="edit_assignments.php"> <i class="fa fa-edit text-danger pull-right text-xs m-t-sm" style="font-size:24px"></i> </a> 
                                </small>                                
                              </a>
                              <big><strong> <?php echo $name; ?></strong></big><br/>
                              <small> <?php echo $file; ?></small>
                            </li>
                          <?php } ?>
                          </ul>
                        </div>
                        <div class="tab-pane" id="notes">
                           <?php                    
                              $sql = "SELECT * FROM posts WHERE batch_id='$id' AND category='note'";
                              $run = mysqli_query($con, $sql);
                              while ($row = mysqli_fetch_array($run)){
                              $id = $row['aid']; 
                              $name = $row['name'];
                              $file = $row['file'];                                                     
                            ?>
                           <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
                             <li class="list-group-item">
                              <a href="#" class="clear">
                                <small class="pull-right">
                                   <a href="#"> <i class="fa fa-trash-o text-info pull-right text-xs m-t-sm" style="font-size:24px"></i> </a>
                                   <a href="#"> <i class="fa fa-edit text-success pull-right text-xs m-t-sm" style="font-size:24px"></i> </a> 
                                </small>                               
                              </a>
                              <small> This is something<?php echo $name; ?></small><br/>
                              <small> <?php echo $file; ?></small>
                            </li>
                          <?php } ?>
                          </ul>
                        </div>
                        <div class="tab-pane" id="notices">
                           <?php                    
                              $sql = "SELECT * FROM posts WHERE batch_id='$id' AND category='notice'";
                              $run = mysqli_query($con, $sql);
                              while ($row = mysqli_fetch_array($run)){
                              $id = $row['aid']; 
                              $name = $row['name'];
                              $file = $row['file'];                                                     
                          ?>
                          <ul class="list-group no-radius m-b-none m-t-n-xxs list-group-lg no-border">
                            <li class="list-group-item">
                              <a href="#" class="clear">
                                <small class="pull-right">
                                   <a href="#"> <i class="fa fa-trash-o text-info pull-right text-xs m-t-sm" style="font-size:24px"></i> </a> 
                                   <a href="#"> <i class="fa fa-edit text-success pull-right text-xs m-t-sm" style="font-size:24px"></i> </a>
                                </small>                            
                              </a>
                              <small> <?php echo $name; ?></small><br/>
                              <small> <?php echo $file; ?></small>
                            </li>
                          <?php } ?>
                          </ul>
                        </div>
                      </div>
                    </section>
                      </section>
                    </div>
                    </section>
                  </section>
                </aside>
             <!-- /.aside -->
            <!-- .aside -->
            
            <!-- /.aside -->
                 <aside class="aside-sm b-l">
              <section class="vbox">
                <header class="bg-info dk header">
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
                
                  <a class="list-group-item">
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