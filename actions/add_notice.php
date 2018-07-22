<?php
require_once '../connections/db.php';
   
 ?>

<?php
	if(isset($_POST['submit'])){
		if ($_POST['title']=='' or $_POST['description']==''){
			echo ("<script>alert('FILL All THE FIELDS')</script>");
			exit();
		}
		else{
			$title=$_POST['title'];
			$category= $_POST['category'];					
			$image_name=$_FILES['image']['name'];
			$image_type=$_FILES['image']['type'];
			$image_size=$_FILES['image']['size'];
			$image_tmp=$_FILES['image']['tmp_name'];
			$path="../storage/$image_name";
			$description=$_POST['description'];
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

			$sql="INSERT into anotice(title,image,description,category,date) values ('$title','$image_name','$description','$category','$date')";
			
			if ($con->query($sql)=== TRUE){
				echo ("<script>alert('Data has been inserted.')</script>");				
				echo ("<script>window.open('../pages/admin/notice.php?view=view','_self')</script>");
			}else{
				echo "Error: " . $sql . "<br>" . $con->error;
			}
		}	
	}	
?>
