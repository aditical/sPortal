<html>
    <head></head>
    <title>Notes</title>
    <body>
      
        <form action="notes.php" method="POST" enctype="multipart/form-data">	
                            <div>
                            <label>Batch</label>
                            <select name="batch">                                                              
                                <option value="1">Batch1</option>
                                <option value="2">Batch2</option>
                                <option value="3">Batch3</option>
                            </select> 
                            </div>		
							<div >
								<label>Subject</label>
								<input type="text" class="form-control" placeholder="Subject" name="subject">
							</div>    					
							<div >
								<label>Author</label>
								<input type="text" class="form-control" placeholder="Author" name="author">
							</div>
                            <div>
                                <label>Select file to upload</label>
                                <input type="file" class="form-control" name="file">
                            </div>							
							<div >
								<label>Description</label>
								<input type="text" class="form-control" name="description"></textarea>
							</div>				
							<div class="modal-footer">        
								<button type="submit" class="btn" value="Submit Note" name="done">Done</button>
							</div>
						</form>
    </body>
</html>
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
                        echo "Your file is too big";
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