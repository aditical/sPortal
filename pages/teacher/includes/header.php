<?php
require_once './../../connections/db.php';
session_start();
$loggedUser_name= $_SESSION['loggedUser_name'];
$loggeduser = $_SESSION['loggedUser'];
$query = "SELECT * FROM users WHERE name='$loggedUser_name' ";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_array($result);
$image = $row['image'];
 ?>
<header class="bg-dark dk header navbar navbar-fixed-top-xs">
      <div class="navbar-header aside-md">      
        <a href="teacher_dashboard.php" class="navbar-brand" data-toggle="fullscreen"><img src="images/logo.png" class="img-circle">sPortal</a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user">
          <i class="fa fa-cog"></i>
        </a>
      </div>            
      <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
        <li class="hidden-xs">
          <a href="#" class="dropdown-toggle dk" data-toggle="dropdown">
            <i class="fa fa-bell"></i>
            <span class="badge badge-sm up bg-danger m-l-n-sm count">2</span>
          </a>
          <section class="dropdown-menu aside-xl">
            <section class="panel bg-white">
              <header class="panel-heading b-light bg-light">
                <strong>You have <span class="count">2</span> notifications</strong>
                </header>
              <div class="list-group list-group-alt animated fadeInRight">
                <a href="#" class="media list-group-item">
                  <span class="pull-left thumb-sm">
                    <img src="images/avatar.jpg" alt="John said" class="img-circle">
                  </span>
                  <span class="media-body block m-b-none">
                    Use awesome animate.css<br>
                    <small class="text-muted">10 minutes ago</small>
                  </span>
                </a>
                <a href="#" class="media list-group-item">
                  <span class="media-body block m-b-none">
                    1.0 initial released<br>
                    <small class="text-muted">1 hour ago</small>
                  </span>
                </a>
              </div>
              <footer class="panel-footer text-sm">
                <a href="#" class="pull-right"><i class="fa fa-cog"></i></a>
                <a href="notifications.html" class="pull-left">See all the notifications</a>
              </footer>
            </section>
          </section>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="thumb-sm avatar pull-left">
            <img src="./../../storage/<?php echo $image;?>" width="100" height="100"/>  
            </span>
            <?php echo $loggedUser_name; ?><b class="caret"></b>
          </a>
          <ul class="dropdown-menu animated fadeInRight">
            <span class="arrow top"></span>            
            <li>
              <a href="profile.html">Profile</a>
            </li>          
            <li class="divider"></li>
            <li>
              <a href="./../../actions/logout.php"  >Logout</a>
            </li>
          </ul>
        </li>
      </ul>      
    </header>