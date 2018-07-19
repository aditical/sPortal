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
               <div class="col-md-4 pull-right">
                 <section class="panel panel-default">
                   <div class="row m-l-none m-r-none padder-v bg-light lter">
                  <span class="fa-stack fa-2x pull-left m-r-sm">
                      <i class="fa fa-square fa-stack-2x text-info"></i>
                      <i class="fa fa-files-o fa-stack-1x text-white"></i>
                    </span>
                     <a class="clear" href="noticeform.html">
                      <span class="h3 block m-t-xs"><strong>Create Notices</strong></span>
                    </a>
                 </div>
                </section>
                </div>  
              <div class="row">
                <div class="col-sm-10 pull-left">
                  <section class="panel panel-info">
                   <header class="panel-heading">
                     <ul class="nav nav-pills pull-right">
                       <li>
                         <a href="#"></a>
                        </li>
                      </ul>
                      View Notices                     
                    </header>
                 <section class="panel-body">
                  <article class="media">
                    <div class="pull-left">
                      <span class="fa-stack fa-lg"></span>
                    </div>
                    <div class="media-body">                        
                      <a href="#" class="h4"></a>
                      <small class="block m-t-xs"></small>
                      <em class="text-xs"><span class="text-danger"></span></em>
                    </div>
                  </article>
                  <div class="line pull-in"></div>
                  <article class="media">
                    <div class="pull-left">
                      <span class="fa-stack fa-lg"></span>
                    </div>
                    <div class="media-body">
                      <a href="#" class="h4"></a>
                      <small class="block m-t-xs"></small>
                      <em class="text-xs"><span class="text-danger"></span></em>
                    </div>
                  </article>
                  <div class="line pull-in"></div>
                  <article class="media">
                    <div class="pull-left">
                      <span class="fa-stack fa-lg"></span>
                    </div>
                    <div class="media-body">
                      <a href="#" class="h4 text-success"></a>
                      <small class="block m-t-xs"></small>
                      <em class="text-xs"><span class="text-danger"></span></em>
                    </div>
                  </article>
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