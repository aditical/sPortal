<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8"/>
    <title>Teacher Dashboard</title>
    <meta name="description"
          content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css"/>
    <link rel="stylesheet" href="css/font.css" type="text/css"/>
    <link rel="stylesheet" href="js/calendar/bootstrap_calendar.css" type="text/css"/>
    <link rel="stylesheet" href="css/app.css" type="text/css"/>
</head>
<body>
<section class="vbox">
	<?php include 'includes/header.php' ?>
    <section>
        <section class="hbox stretch">
			<?php include 'includes/aside.php' ?>
            <section id="content">
                <section class="vbox">
                    <section class="scrollable padder">
                        <div class="m-b-md"></div>
                        <section class="panel panel-default">
                            <div class="row m-l-none m-r-none bg-light lter">
                                <div class="col-sm-6 col-md-3 padder-v b-r b-light">
                    <span class="fa-stack fa-2x pull-left m-r-sm">
                      <i class="fa fa-circle fa-stack-2x text-info"></i>
                      <i class="fa fa-users fa-stack-1x text-white"></i>
                    </span>
                                    <a class="clear" href="batch1.html">
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
                        <div class="row">
                            <div class="col-sm-7">
                                <section class="panel panel-info">
                                    <header class="panel-heading">
                                        <ul class="nav nav-pills pull-right">
                                            <li>
                                                <a href="#" class="panel-toggle text-muted"><i                                           class="fa fa-caret-down text-active"></i><i class="fa fa-caret-up text"></i></a>
                                            </li>
                                        </ul>
                                        News <span class="badge bg-info"></span>
                                    </header>
                                    <section class="panel-body">
										<?php
										$connect = mysqli_connect( "localhost", "root", "", "sagarmatha" );
										$i       = 1;
										$query   = "SELECT * FROM events ORDER BY 1 DESC LIMIT 3";
										$result  = mysqli_query( $connect, $query );
										while ( $row = mysqli_fetch_array( $result ) ) {
											$id      = $row['id'];
											$title   = $row['title'];
											$image   = $row['image'];
											$fullcontent = $row['content'];
											$content = substr( $row['content'], 0, 400 );
											$author  = $row['author'];
											$date    = $row['date'];
											?>
                                            <article class="media">
                                                <div class="media-body">
                                                    <a href="#" class="h4"  data-toggle="modal" data-target="#popup<?php echo $i; ?>"><?php echo $title; ?></a>
                                                    <p><?php echo $content; ?>...<a href="#" data-toggle="modal" data-target="#popup<?php echo $i; ?>">Read More</a></p>
                                                    <div class="publish-block">
                                                        <em class="text-xs">Posted by <span
                                                                    class="text-danger"><?php echo $author; ?></span></em>
                                                        <em class="text-xs">on <span
                                                                    class="text-danger"><?php echo $date; ?></span></em>
                                                    </div>
                                                </div>
                                            </article>
                                            <div class="modal fade" id="popup<?php echo $i; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
											  <div class="modal-dialog" role="document">
											    <div class="modal-content">
											      <div class="modal-header">
											        <h5 class="modal-title" id="exampleModalLabel"><?php echo $title; ?></h5>
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											          <span aria-hidden="true">&times;</span>
											        </button>
											      </div>
											      <div class="modal-body">
											        <?php echo $fullcontent; ?>
											      </div>
											      <div class="modal-footer">
											        <div class="publish-block">
                                                        <em class="text-xs">Posted by <span
                                                                    class="text-danger"><?php echo $author; ?></span></em>
                                                        <em class="text-xs">on <span
                                                                    class="text-danger"><?php echo $date; ?></span></em>
                                                    </div>
											      </div>
											    </div>
											  </div>
											</div>
											<?php
										$i++; }
										?>
                                    </section>
                            </div>
                            <div class="col-md-5">
                                <section class="panel b-light">
                                    <header class="panel-heading bg-primary dker no-border"><strong>Calendar</strong>
                                    </header>
                                    <div id="calendar" class="bg-primary m-l-n-xxs m-r-n-xxs"></div>
                                    <div class="list-group">
                                        <a href="#" class="list-group-item text-ellipsis">
                                            <span class="badge bg-danger">7:30</span>
                                            Meet a friend
                                        </a>
                                        <a href="#" class="list-group-item text-ellipsis">
                                            <span class="badge bg-success">9:30</span>
                                            Have a kick off meeting with .inc company
                                        </a>
                                        <a href="#" class="list-group-item text-ellipsis">
                                            <span class="badge bg-light">19:30</span>
                                            Milestone release
                                        </a>
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
            <script src="js/slimscroll/jquery.slimscroll.min.js"></script>
            <script src="js/charts/easypiechart/jquery.easy-pie-chart.js"></script>
            <script src="js/charts/sparkline/jquery.sparkline.min.js"></script>
            <script src="js/charts/flot/jquery.flot.min.js"></script>
            <script src="js/charts/flot/jquery.flot.tooltip.min.js"></script>
            <script src="js/charts/flot/jquery.flot.resize.js"></script>
            <script src="js/charts/flot/jquery.flot.grow.js"></script>
            <script src="js/charts/flot/demo.js"></script>

            <script src="js/calendar/bootstrap_calendar.js"></script>
            <script src="js/calendar/demo.js"></script>

            <script src="js/sortable/jquery.sortable.js"></script>

</body>
</html>