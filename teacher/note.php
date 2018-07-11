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
                    <header class="panel-heading font-default">Upload Notes</header>
                    <div class="panel-body">
                      <form class="bs-example form-horizontal" action="note.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Batch</label>
                          <div class="col-lg-10">
                            <input type="text" class="form-control" placeholder="Batch" name ="batch">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Subject</label>
                          <div class="col-lg-10">
                              <input type="text" class="form-control" placeholder="Subject" name="subject">
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Description</label>
                          <div class="col-lg-10">
                              <input type="text" class="form-control" name="description"></input>
                            </div>
                        </div>
                        <div class="form-group">
                          <label class="col-lg-2 control-label">Author</label>
                          <div class="col-lg-10">
                              <input type="text" class="form-control" placeholder="Author" name="author">
                            </div>
                        </div>
                        <div class="form-group">
                         <label class="col-sm-2 control-label">File</label>
                          <div class="col-sm-10">
                            <input type="file" class="filestyle" data-icon="false" data-classButton="btn btn-default" data-classInput="form-control inline input-s" name="file">
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
  <?php
	$con=mysqli_connect("localhost","root","","sagarmatha");
	if(isset($_POST['done'])){
		if ($_POST['subject']=='' or $_POST['author']==''){
			echo ("<script>alert('FILL All THE FIELDS')</script>");
			exit();
		}
		else{
            $batch=$_POST['batch'];
			$subject=$_POST['subject'];
			$author=$_POST['author'];		
            $file = $_FILES['file'];
            $fileName= $_FILES['file']['name'];
            $fileTmpName= $_FILES['file']['tmp_name'];
            $fileSize= $_FILES['file']['size'];
            $fileError= $_FILES['file']['error'];
            $fileType= $_FILES['file']['type'];
            $fileExt = explode('.', $fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array("jpg", "jpeg", "png", "pdf", "zip");
            if(in_array($fileActualExt, $allowed)===true){
                if($fileError===0) {
                    if($fileSize <1000000){
                        $fileNewName = uniqid('',true).".".$fileActualExt;
                        $fileDestination= 'uploads/'.$fileNewName;
                        move_uploaded_file($fileTmpName, $fileDestination);
                    }else{
                        echo ("<script>alert('Your file is too big.')</script>");
                        exit();
                    }
                }else {
                    echo "There was an error uploading your file";
                }
            } else {
                echo "You cannot upload file of this type";
            }
            $description=$_POST['description'];
			$date=date('y.m.d');
			$query="insert into notes(batch,subject,author,files,description,date,filePath, fileType, fileSize) values ('$batch','$subject','$author','$fileNewName','$description','$date','$fileDestination', ' $fileType', ' $fileSize')";
			
			if (mysqli_query($con,$query)){
				echo ("<script>alert('Data has been inserted.')</script>");				
				echo ("<script>window.open('index.php')</script>");
			}
		}	
	}	
?>
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

 </body>
</html>