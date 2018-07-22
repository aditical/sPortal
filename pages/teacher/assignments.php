<?php
require_once '../../connections/db.php';
//session_start();
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
    <?php
      $loggedUser_name= $_SESSION['loggedUser_name'];
      $loggeduser = $_SESSION['loggedUser'];
      $query = mysqli_query($con, "SELECT * FROM batch");
      $query2 = mysqli_query($con, "SELECT * FROM submission AS s JOIN users ON s.student_id = users.id JOIN batch ON users.batch_id = batch.id WHERE s.teacher_id = $loggeduser");
    ?>
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
                  <h4 class="text-center text-info m-t-none"><strong>Submitted Assignments</strong></h4>
                  <div class="m-b-md"></div>
                   <section class="panel panel-default">
                <div class="table-responsive">
                  <table id="MyStretchGrid" class="table table-striped  m-b-sm" style="font-size:15px" >
                    <thead>
                    <tr>
                      <th data-property="name" class="sortable">Student</th>
                      <th data-property="assignmentname" class="sortable">Title</th>
                      <th data-property="batch" class="sortable">Batch</th>
                      <th data-property="action" class="sortable">Action</th>
                      <th data-property="submitteddate" class="sortable">Submitted Date</th>
                    </tr>
                  </thead>
                  <tbody>                    
                           
                  <?php while($row2 = mysqli_fetch_assoc($query2)) { ?>
                                <tr>
                                    <td><?php echo $row2['name']; ?></td>
                                    <td><?php echo $row2['aname']; ?></td>
                                    <td><?php echo $row2['batch']; ?></td>
                                    <td><a href="../../<?php echo $row2['file']; ?>">View</a> | <a href="send_feedback.php?id=<?php echo $row2['sub_id']; ?>">send Feedback</a></td>
                                    <td><?php echo $row2['submitted_date']; ?></td>
                                </tr>
                            <?php } ?>                            
                        </tbody>                      
                   

                  
                  </table>
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