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
    <header class="bg-dark dk header navbar navbar-fixed-top-xs">
      <div class="navbar-header aside-md">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
          <i class="fa fa-bars"></i>
        </a>
        <a href="teacher.html" class="navbar-brand" data-toggle="fullscreen"><img src="images/logo.png" class="m-r-sm" width= "30" >sPortal</a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user">
          <i class="fa fa-cog"></i>
        </a>
      </div>
            
      <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
        <li class="hidden-xs">
          <a href="#" class="dropdown-toggle dk" data-toggle="dropdown">
            <i class="fa fa-bell"></i>
            <span class="badge badge-sm up bg-danger m-l-n-sm count"></span>
          </a>
          <section class="dropdown-menu aside-xl">
            <section class="panel bg-white">
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
              <img src="images/avatar.jpg">
            </span>
            Keshav Dhami <b class="caret"></b>
          </a>
          <ul class="dropdown-menu animated fadeInRight">
            <span class="arrow top"></span>            
            <li>
              <a href="profile.html">Profile</a>
            </li>          
            <li class="divider"></li>
            <li>
              <a href="modal.lockme.html" data-toggle="ajaxModal" >Logout</a>
            </li>
          </ul>
        </li>
      </ul>      
    </header>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <aside class="bg-dark lter aside-md hidden-print" id="nav">          
          <section class="vbox">            
            <section class="w-f scrollable">
              <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
                
                <!-- nav -->
                <nav class="nav-primary hidden-xs">
                  <ul class="nav">
                    <li>
                      <a href="teacher.html" >
                        <i class="fa fa-dashboard icon">
                          <b class="bg-danger"></b>
                        </i>
                        <span>Dashboard</span>
                      </a>
                    </li>
                     <li >
                      <a href= "profile.html"  >
                        <i class="fa fa-user icon">
                          <b class="bg-warning"></b>
                        </i>                       
                        <span>Profile</span>                       
                      </a>                    
                    </li>
                    <li >
                      <a href= "news.html"  >
                        <i class="fa fa-list-alt icon">
                          <b class="bg-info"></b>
                        </i>                       
                        <span>News</span>                       
                      </a>                    
                    </li>
                    <li>
                      <a href= "notes.html"  >
                        <i class="fa fa-pencil-square icon">
                          <b class="bg-success"></b>
                        </i>                       
                        <span>Notes</span>
                      </a>                     
                    </li>
                    <li class="active"  >
                      <a href="classes.html"  class="active"  >
                        <i class="fa fa-book icon">
                          <b class="bg-warning"></b>
                        </i>                      
                        <span>Classes</span>
                      </a>                      
                    </li>                    
                    <li >
                      <a href="queries.html"  >
                        <b class="badge bg-danger pull-right"></b>
                        <i class="fa fa-question-circle icon">
                          <b class="bg-primary dker"></b>
                        </i>
                        <span>Queries</span>
                      </a>
                    </li>
                    <li >
                      <a href="notices.html"  >
                        <i class="fa fa-files-o icon">
                          <b class="bg-info"></b>
                        </i>
                        <span>Notices</span>
                      </a>
                    </li>
                    <li >
                        <a href="notifications.html"  >
                          <i class="fa fa-bell icon">
                            <b class="bg-danger"></b>
                          </i>
                          <span>Notifications</span>
                        </a>
                      </li>
                      <li >
                          <a href="assignments.html"  >
                            <i class="fa fa-pencil icon">
                              <b class="bg-primary"></b>
                            </i>
                            <span>Assignments</span>
                          </a>
                        </li>                        
                  </ul>
                </nav>
                <!-- / nav -->
              </div>
            </section>
            <footer class="footer lt hidden-xs b-t b-dark">        
               <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon">
                <i class="fa fa-angle-left text"></i>
                <i class="fa fa-angle-right text-active"></i>
              </a>             
            </footer>
          </section>
        </aside>
        <!-- /.aside -->
        <section id="content">
          <section class="vbox">          
            <section class="scrollable padder">
              <div class="m-b-md"></div>
              <div class="row">
                <div class="col-md-12">
                  <h4 class="m-t-none">Classes</h4>
                  <div class="m-b-md"></div>
              <section class="panel panel-default">
                <div class="row m-l-none m-r-none bg-light lter">
                  <div class="col-sm-6 col-md-3 padder-v b-r b-light">
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                      <i class="fa fa-circle fa-stack-2x text-info"></i>
                      <i class="fa fa-users fa-stack-1x text-white"></i>
                    </span>
                    <a class="clear" href="view_batch.php">
                      <span class="h3 block m-t-xs"><strong>Batch 1</strong></span>
                      <small class="text-muted text-uc">23</small>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-3 padder-v b-r b-light lt">
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                      <i class="fa fa-circle fa-stack-2x text-warning"></i>
                      <i class="fa fa-users fa-stack-1x text-white"></i>
                    </span>
                    <a class="clear" href="batch2.html">
                      <span class="h3 block m-t-xs"><strong id="bugs">Batch2</strong></span>
                      <small class="text-muted text-uc">45 students</small>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-3 padder-v b-r b-light">                     
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                      <i class="fa fa-circle fa-stack-2x text-danger"></i>
                      <i class="fa fa-users fa-stack-1x text-white"></i>
                    </span>
                    <a class="clear" href="batch3.html">
                      <span class="h3 block m-t-xs"><strong id="firers">Batch 3</strong></span>
                      <small class="text-muted text-uc">155 students</small>
                    </a>
                  </div>
                  <div class="col-sm-6 col-md-3 padder-v b-r b-light lt">
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                      <i class="fa fa-circle fa-stack-2x icon-muted"></i>
                      <i class="fa fa-users fa-stack-1x text-white"></i>
                    </span>
                    <a class="clear" href="batch4.html">
                      <span class="h3 block m-t-xs"><strong>Batch 4</strong></span>
                      <small class="text-muted text-uc">745 students</small>
                    </a>
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