<?php
// require connection
require_once '../connections/db.php';
// get post data
$name = $_POST['title'];
$batch = $_POST['cmbBatch'];
$file = $_FILES['file'];
$category = $_POST['category'];

$due_date= $_POST['due_date'];

session_start();
$loggedUser_name= $_SESSION['loggedUser_name'];
// die($file['tmp_name']);
$destination = 'storage/'.$file['name'];
if($category == 'assignment'){
   
    $query =  "INSERT INTO posts(name, batch_id, file,category,teacher_name, due_date) VALUES('$name', '$batch', '$destination','$category','$loggedUser_name','$due_date')";

}else{
    $query = "INSERT INTO posts(name, batch_id, file,category,teacher_name) VALUES('$name', '$batch', '$destination','$category','$loggedUser_name')";
}
if (mysqli_query($con,$query)){
    echo ("<script>alert('Data has been inserted.')</script>");	
    echo ("<script>window.open('../pages/teacher/teacher_dashboard.php')</script>");			
    
}
?>
