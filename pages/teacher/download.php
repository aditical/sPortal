    <?php
            $connect = mysqli_connect("localhost", "root", "", "sagarmatha");      

            if(isset($_GET['id']))
            {
            // connect to the database
            $id = $_GET['id'];
            $query = "SELECT filePath, fileType, fileSize FROM notes WHERE id = '$id'";
           $result = mysqli_query($connect,$query);
            list($filePath,$fileType, $fileSize )= mysqli_fetch_array($result);
            header("Content-length: $fileSize");
            header("Content-type: $fileType");
            header("Content-disposition: attachment; filename=$filePath");        
            echo $content;
            exit;
            }
            else{
            die("No file ID given...");
            }
    ?> 
