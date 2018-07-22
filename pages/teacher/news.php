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
        <?php include 'includes/aside.php'?>
        <!-- /.aside -->
        <section id="content">
          <section class="vbox">          
            <section class="scrollable padder">
              <div class="m-b-md"></div>
              <div class="row">
                <div class="col-md-10">
                <section class="panel panel-info">
                   <header class="panel-heading">
                     <ul class="nav nav-pills pull-right">
                       <li>
                         <a href="#"></a>
                        </li>
                      </ul>
                      News                     
                    </header>
                 <section class="panel-body">
                 <?php 
                         $connect = mysqli_connect("localhost", "root", "", "sagarmatha");
                         $i=1;
                         $query = "SELECT * FROM events ORDER BY 1 DESC";
                         $result = mysqli_query($connect,$query);
                         while ($row = mysqli_fetch_array($result)) {
                         $id = $row['id'];
                         $title = $row['title'];
                         $image = $row['image'];
                         $content = substr($row['content'],0,350);
                         $author = $row['author'];
                         $date = $row['date'];
                        ?>
                    <article class="media">
                        <div class="pull-left">
                            <span class="fa-stack fa-lg"></span> 
                            <img src="../../storage/<?php echo $image;?>" width="120" height="120"/>                          
                        </div>
                        <div class="media-body">                        
                            <a href="#" class="h4"><?php echo $title; ?></a>
                            <small class="block m-t-xs"><?php echo $content; ?>.....<a class="text-info" href="#">Read More</a></small>
                             <div class="m-b-md"></div> 
                             <div class="pull-right">
                            <em class="text-xs">Posted by <span class="text-default"><strong><?php echo $author;?></strong></span></em>
                            <em class="text-xs">on <span class="text-default"><strong><?php echo $date; ?></strong></span></em>
                        </div>
                       </div> 
                        </article> 
                        <div class="line pull-in"></div>
                    <?php 
						}
                    ?>       
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