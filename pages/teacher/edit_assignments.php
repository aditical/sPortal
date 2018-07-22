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
                  <h4 class="text-center text-info m-t-none"><strong>Edit Assignments</strong></h4>
                  <div class="m-b-md"></div>
                   <section class="panel panel-default">
                <div class="table-responsive">
                  <table id="MyStretchGrid" class="table table-striped m-b-sm" style="font-size:15px">
                    <thead>
                    <tr>
                      <th data-property="name" class="sortable">Name</th>
                      <th data-property="assignmentname" class="sortable">Assignment Name</th>
                      <th data-property="batch" class="sortable">Batch</th>
                      <th data-property="file" class="sortable">File</th>
                      <th data-property="submitteddate" class="sortable">Submitted Date</th>
                       <th data-property="save" class="sortable"></th>
                    </tr>
                  </thead>
                  <tbody>
                    
                           
                                <tr>
                                    <td>name</td>
                                    <td>assignment name</td>
                                    <td>Batch</td>
                                    <td><a class="text-info" href="#">File</a></td>
                                    <td>Submitted Date</td>
                                    <td><a  href="#"><i class="fa fa-save text-success pull-right text-xs m-t-sm" style="font-size:15px"></i></a></td>
                                 </tr>
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