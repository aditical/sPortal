<?php
// require connection
require_once '../connections/db.php';

// get post data
$id = $_POST['hdStudent_id'];
$id=(int)$id;

$feedback = $_POST['txtFeedback'];
//die($feedback);
$query = mysqli_query($con, "UPDATE submission SET feedback='$feedback' WHERE sub_id = $id");

if ($query)
    header('Location: ../pages/teacher_dashboard.php');

 ?>
