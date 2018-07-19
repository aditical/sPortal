<?php
// require connection
require_once '../connections/db.php';
// get post data
$name = $_POST['txtName'];
$batch = $_POST['cmbBatch'];
$file = $_FILES['flAssignment'];
$date = $_POST['due_date'];

session_start();
$loggedUser_name= $_SESSION['loggedUser_name'];

// die($file['tmp_name']);
$destination = 'storage/'.$file['name'];

$query = mysqli_query($con, "INSERT INTO assignment(name, batch_id, file,due_date,teacher_name) VALUES('$name', '$batch', '$destination','$date','$loggedUser_name')");

if (move_uploaded_file($file['tmp_name'], '../'.$destination)) {
    echo 'Assignment Uploaded';
    header('Location: ../pages/teacher_dashboard.php');
}

 ?>
