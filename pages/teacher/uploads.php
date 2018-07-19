<?php
require_once '../../connections/db.php';
$query = mysqli_query($con, "SELECT * FROM batch");
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
<link rel="stylesheet" href="js/select2/select2.css" type="text/css" />
<link rel="stylesheet" href="js/select2/theme.css" type="text/css" />
<link rel="stylesheet" href="js/fuelux/fuelux.css" type="text/css" />
<link rel="stylesheet" href="js/datepicker/datepicker.css" type="text/css" />
<link rel="stylesheet" href="js/slider/slider.css" type="text/css" />

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
                <div class="col-md-8">
                  <section class="panel panel-success">
                    <header class="panel-heading font-default">Upload</header>
                    <div class="panel-body">
                      <form class="bs-example form-horizontal" action="../../actions/assign.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                          <label class="col-lg-2 control-label" >Category</label>
                          <div class="col-lg-10">
                            <select class="form-control" name="category" id="selectCategory">
                            <option>Choose a category</option>
                            <option value="notice">Notice</option>
                            <option value="note">Note</option>
                            <option value="assignment">Assignment</option>
                          </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label"id ="showBatch">Batch</label>
                          <div class="col-lg-10">
                             <select class="form-control" name="cmbBatch">
                                <?php
                                while($row = mysqli_fetch_assoc($query)) { ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['batch']; ?></option>
                                <?php } ?>
                            </select>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Subject</label>
                          <div class="col-lg-10">
                              <input type="text" class="form-control" placeholder="Title" name="title">
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Description</label>
                          <div class="col-lg-10">
                              <input type="text" class="form-control" name="description"></input>
                            </div>
                        </div>
                        <div class="form-group">
                         <label class="col-sm-2 control-label">File</label>
                          <div class="col-sm-10">
                            <input type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline input-s" name="file">
                          </div>
                        </div>                         
                        <div class="form-group" id="showDate">
                         <label class="col-sm-2 control-label">Due Date</label>
                          <div class="col-sm-10">                         
                            <input class="input-sm input-s datepicker-input form-control" size="16" name="due_date" type="date" data-date-format="dd-mm-yyyy" >
                          </div>
                        </div>                  
                        <div class="form-group">
                          <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" class="btn btn-sm btn-success" name="done">Submit</button>
                          </div>
                        </div>
                      </form>
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
   <!-- Form -->
  <script src="js/fuelux/fuelux.js"></script>
 
  <script src="js/datepicker/bootstrap-datepicker.js"></script>

  <script src="js/slider/bootstrap-slider.js"></script>
 
  <script src="js/file-input/bootstrap-filestyle.min.js"></script>

  <script src="js/libs/moment.min.js"></script>
  <script src="js/combodate/combodate.js"></script>

  <script src="js/select2/select2.min.js"></script>

  <script src="js/wysiwyg/jquery.hotkeys.js"></script>
  <script src="js/wysiwyg/bootstrap-wysiwyg.js"></script>
  <script src="js/wysiwyg/demo.js"></script>

  <script src="js/markdown/epiceditor.min.js"></script>
  <script src="js/markdown/demo.js"></script>
  <script type="text/javascript">
		$('#selectCategory').change(function() {
			var type = $(this).val();
			if (type == 'assignment') {
				$('#showDate').fadeIn('slow');
			} else {
				$('#showDate').hide();
			}
		});
	</script>

 </body>
</html>