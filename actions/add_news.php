<?php
require_once '../connections/db.php';
session_start();
//$loggedUser_name= $_SESSION['loggedUser_name'];
//$loggeduser = $_SESSION['loggedUser'];
?>
<?php
	if(isset($_POST['submit'])){
		if ($_POST['title']=='' or $_POST['content']=='' or $_POST['author']==''){
			echo ("<script>alert('FILL All THE FIELDS')</script>");
			exit();
		}
		else{
			$title=$_POST['title'];
			$author=$_POST['author'];
			$content=$_POST['content'];
			$image_name=$_FILES['image']['name'];
			$image_type=$_FILES['image']['type'];
			$image_size=$_FILES['image']['size'];
			$image_tmp=$_FILES['image']['tmp_name'];
			$path="../storage/$image_name";
			$date=date('y.m.d');
			if ($image_type=="image/jpeg" or $image_type=="image/jpg" or $image_type=="image/png" or $image_type=="image/PNG" or $image_type=="image/JPG" or $image_type=="image/JPEG"  ) {
				if ($image_size>=1) {			
					move_uploaded_file($image_tmp,$path);
				}
				else{
					echo ("<script>alert('Invalid file size, use higher size')</script>");
					exit();
				}

			}
			else{
				echo "<script>alert('Inavlid file type')</script>";
				exit();
			}

			$query="insert into events(title,author,image,content,date) values ('$title','$author','$image_name','$content','$date')";
			
			if (mysqli_query($con,$query)){
				echo ("<script>alert('Data has been inserted.')</script>");				
				echo ("<script>window.open('../pages/admin/index.php?view=view','_self')</script>");
			}
		}	
	}	
?>
