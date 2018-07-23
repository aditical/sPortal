<!DOCTYPE html>
<html lang="en" class="bg-dark">
<head>
    <meta charset="utf-8" />
  <title>sPORTAL</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" /> 
  <link rel="stylesheet" href="pages/teacher/css/bootstrap.css" type="text/css" />
  <link rel="stylesheet" href="pages/teacher/css/animate.css" type="text/css" />
  <link rel="stylesheet" href="pages/teacher/css/font-awesome.min.css" type="text/css" />
  <link rel="stylesheet" href="pages/teacher/css/font.css" type="text/css" />
    <link rel="stylesheet" href="pages/teacher/css/app.css" type="text/css" />
    
    </head>
<body>

  <section id="content" class="m-t-lg wrapper-md animated fadeInUp">    
    <div class="container aside-xxl">
      <a class="navbar-brand block" href="#">sPORTAL</a>
	  <?php if(!empty($_GET['msg']) and ($_GET['msg']=='error')){ echo "Invalid Username or password"; }?>
      <section class="panel panel-default bg-white m-t-lg">
        <header class="panel-heading text-center">
          <strong>Login</strong>
        </header>
        <form action="actions/login.php" class="panel-body wrapper-lg" method="post">
          <div class="form-group">
            <label class="control-label">Username</label>
            <input type="Email" name="txtUsername" placeholder="Email" class="form-control input-lg" required>
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <input type="password" name="txtPassword" id="inputPassword" placeholder="Password" class="form-control input-lg" required>
          </div>
          <a href="actions/forgetpwd.php" class="pull-right m-t-xs"><small>Forgot password?</small></a>
                  <button type="submit" class="btn btn-primary">Login</button>
         
           </form>
      </section>
       <script src="pages/teacher/js/jquery.min.js"></script>
         <script src="pages/teacher/js/bootstrap.js"></script>
          <script src="pages/teacher/js/app.js"></script>
  <script src="pages/teacher/js/app.plugin.js"></script>
  <script src="pages/teacher/js/slimscroll/jquery.slimscroll.min.js"></script>
  
</body>
</html>
