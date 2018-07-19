<?php
require_once '../connections/db.php';
$query = mysqli_query($con, "SELECT * FROM batch");
?>
<?php include '../actions/server.php'; ?>  

<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
	
		
    <!-- Bootstrap core CSS -->

    <!-- Custom styles for this template -->
    <link href="../css/blog-home.css" rel="stylesheet">
    <script src="../js/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

	<script src="../bootstrap/js/bootstrap.min.js"></script>
	<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>

 <body class="body">

    
<div class="Container" style="max-width:600px;margin:60px auto;" >
	<h3>Signup Before Continuing</h3><br><br>
	<form name="signup" action="signup.php" onsubmit="return validateForm()" method="post">
		<?php include '../actions/errors.php'; ?>
		<div class="form-group">
			<label class="control-label" for="name">Name</label>
				<div class="form-row">
    				<div class="col">
     			 		<input type="text" name="fname" class="form-control" placeholder="Name" required >
     			 		<span id= "err" style="color:red;"></span>
    				</div>
    				<div class="col">
      					<input type="text" name="lname" class="form-control" placeholder="Last name" required>
      					<span id= "err2" style="color:red;"></span>
    				</div>
				</div>
		</div>
			<div class="form-group">
			<label for="email" class="control-label">Email</label>
			<div class="form-group">
				<input type="email" name="email" id="email" class="form-control" placeholder="someone@something.com" required email>
				<span id='err3' style="color:red;"></span>
			</div>
		</div>
		<div class="form-group">
			<label class="control-label" for="pwd">Password</label>
			<div class="form-group">
				<input class="form-control" type="password" name="password" id="pwd" placeholder="Password" required>
				<span id='err4' style="color:red;"></span>
			</div>
		</div>	
		<div class="form-group">
			<label class="control-label" for="type">Type</label>
			<div class="form-group">
				<select class="form-control" name="type" id="cmbSelectType">
					<option>Choose a value</option>
					<option value="student">Student</option>
					<option value="teacher">Teacher</option>
					<option value="admin">Admin</option>
				</select>
				
				<span id='err4' style="color:red;"></span>
			</div>
		</div>	
		<div class="form-group" style="display: none;" id="showBatch">
			<label class="control-label" for="pwd">Batch</label>
			<div class="form-group">
				<select class="form-control" name="cmbBatch">
                    <?php
                    while($row = mysqli_fetch_assoc($query)) { ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['batch']; ?></option>
                    <?php } ?>
                </select>
				<span id='err4' style="color:red;"></span>
			</div>
		</div>	
		<div style="text-align: center;">
 			<button type="submit" name="signup" class="btn btn-info">Sign up</button>
 		</div>
 		<p>
  		Already a member? <a href="../index.php">Sign in</a>
  		</p>
 	</form>
</div>
	<script type="text/javascript">

		function validateForm() {
			var fname = document.forms["signup"]["fname"].value;
		    var lname = document.forms["signup"]["lname"].value;
		    var email= document.forms["signup"]["email"].value;
			var password=document.forms["signup"]["password"].value;
		    var c=0;

		    var pat_name=/^[a-zA-Z]+$/;
		    
		    var pat_email= /^[a-zA-Z]+[a-zA-Z0-9._-]+@[a-zA-Z.-]+\.[a-zA-Z]{2,4}$/;

		    var pat_num=/^[0-9]{10}$/;

		    if (!pat_name.test(fname)){
		    	
				document.getElementById('err').innerHTML="This is invalid firstname";
				c=1;
			}

			//Checking last name
			if (!pat_name.test(lname)){
				document.getElementById('err2').innerHTML="This is invalid Lastname";
				c=1;
    		}
    		
    		if(!pat_email.test(email)){
    			document.getElementById('err3').innerHTML="Invalid Email";
    			c=1;
    		}

    		if (password.length<8){
				document.getElementById('err4').innerHTML="This is invalid Password";
				c=1;
    		}

    		if(!pat_num.test(number)){
    			document.getElementById('err5').innerHTML="This is invalid number";
    			c=1;
    		}


    		if (c==1){
    			return false;
    		}
    		else{
    			return true;
    		}


    	}

    	function Errhandle(){
    		alert("Working");
    	}
	</script>
	
	<script type="text/javascript">
		$('#cmbSelectType').change(function() {
			var type = $(this).val();
			if (type == 'student') {
				$('#showBatch').fadeIn('slow');
			} else {
				$('#showBatch').hide();
			}
		});
	</script>
</body>
</html>
