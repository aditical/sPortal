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
                <div class="col-md-10">
                  <h4 class="text-center text-default m-t-none"></h4>
                  <div class="m-b-md"></div>
                  <section class="panel panel-info">
                    <header class="panel-heading font-bold">Edit Profile</header>
                    <div class="panel-body">
                      <div class="row">
                          <div class="col-md-5">
                            <div class="form-group bmd-form-group">
                              <label class="bmd-label-floating">Sagarmatha Profile (disabled)</label>
                              <input type="text" class="form-control" disabled="">
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group bmd-form-group">
                              <label class="bmd-label-floating">Username</label>
                              <input type="text" name="u_name" class="form-control" tabindex="1" required="">
                            </div>
                          </div>

                          <div class="col-md-4">
                            <div class="form-group bmd-form-group">
                              <label class="bmd-label-floating">Email address</label>
                              <input type="email" name="u_email" class="form-control" required="">
                              <label>Required Valid Email </label>
                            </div>
                          </div>
                         
                          <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                              <label class="bmd-label-floating">Fist Name</label>
                              <input type="text" name="u_firstname" class="form-control" required="">

                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                              <label class="bmd-label-floating">Last Name</label>
                              <input type="text" name="u_lastname" class="form-control" required="">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group bmd-form-group">
                              <label class="bmd-label-floating">Address</label>
                              <input type="text" name="u_address" class="form-control" required="">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                              <label class="bmd-label-floating">Password</label>
                              <input type="password" name="u_pwd" id="password" class="form-control" required="">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                              <label class="bmd-label-floating">Confirm Password</label>
                              <input type="password" name="u_cfmpwd" id="confirm_password" class="form-control" required="">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                              <label class="bmd-label-floating">City</label>
                              <input type="text" name="u_city" class="form-control" required="">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group bmd-form-group">
                              <label class="bmd-label-floating">Country</label>
                              <input type="text" name="u_country" class="form-control" required="">
                            </div>
                          </div>
                          
                          <div class="col-md-4">
                            <label class="bmd-label-floating" style="position: relative; width: 100px;">Gender</label>
                            <div class="mui-select" style="position: relative; width: 190px;" tabindex="0">
                              <select name="u_gender" tabindex="-1">
                                <option>Male</option>
                                <option>Female</option>
                                <option>Other</option>
                              </select>
                            <div class="mui-event-trigger"></div></div>
                          </div>
                        </div>
                        <div class="m-b-md"></div>
                         <div class="col-md-14">
                            <div class="form-group bmd-form-group ">
                              <label class="bmd-label-floating" >About Me</label>
                                <textarea class="form-control" name="u_aboutme" rows="5" required> Write something about yourself </textarea>
                              </div>
                            </div>
                            <div class="col-md-14">
                            <div class="form-group bmd-form-group ">
                              <label class="bmd-label-floating" >Info </label>
                                <textarea class="form-control" name="u_aboutme" rows="5" required> Give information </textarea>
                              </div>
                            </div>
                            <button type="submit" name="u_signup" class="btn btn-info pull-right">Edit Profile</button>
                        </div>
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