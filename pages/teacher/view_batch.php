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
              <p><big>Batch1</big></p>
            </header>
          <section class="hbox stretch">
            <!-- .aside -->
                        <!-- /.aside -->
            <!-- .aside -->
            <aside class="bg-white">
                  <section class="vbox">                    
                    <section class="scrollable">
                    <section class="panel panel-default">
                        <header class="panel-heading bg-danger lt no-border">
                          <div class="clearfix">
                            
                            <div class="clear">
                              <div class="h3 m-t-xs m-b-xs text-white">
                             Notice
                                <i class="fa fa-circle text-white pull-right text-xs m-t-sm"></i>                                             
                          </div>
                        </header>
                        <div class="list-group no-radius alt">
                         
                        </div>
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
                <section class="scrollable bg-white">
                  <div class="list-group list-group-alt no-radius no-borders">
                    <a class="list-group-item" href="#">
                        <i class="fa fa-circle text-success text-xs"></i>
                        <span>Cris Labiso</span>
                    </a>
                    <a class="list-group-item" href="#">
                        <i class="fa fa-circle text-success text-xs"></i>
                        <span>Cris Labiso</span>
                    </a>
                    <a class="list-group-item" href="#">
                        <i class="fa fa-circle text-success text-xs"></i>
                        <span>Cris Labiso</span>
                    </a>
                    
                    <a class="list-group-item" href="#">
                        <i class="fa fa-circle text-muted text-xs"></i>
                        <span>Daniel Sandvid</span>
                    </a>
                    <a class="list-group-item" href="#">
                        <i class="fa fa-circle text-danger text-xs"></i>
                        <span>Helder Oliveira</span>
                    </a>
                    <a class="list-group-item" href="#">
                        <i class="fa fa-circle text-muted text-xs"></i>
                        <span>Jeff Broderik</span>
                    </a>
                    <a class="list-group-item" href="#">
                        <i class="fa fa-circle text-muted text-xs"></i>
                        <span>Jonathan Morina</span>
                    </a>
                    <a class="list-group-item" href="#">
                        <i class="fa fa-circle text-success text-xs"></i>
                        <span>Mason Yarnell</span>
                    </a>
                    <a class="list-group-item" href="#">
                        <i class="fa fa-circle text-danger text-xs"></i>
                        <span>Mike Mcalidek</span>
                    </a>
                  </div>
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