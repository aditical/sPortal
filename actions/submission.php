<?php
// require connection
require_once '../connections/db.php';
// get post data
$aid=$_POST['hdassignment_id'];
$file = $_FILES['flFile'];
$teacher = $_POST['cmbSelectTeacher'];
$date = $_POST['dtSubmitted'];
$destination = 'storage/'.$file['name'];

// get logged in user
session_start();
$id = $_SESSION['loggedUser'];

$query = mysqli_query($con, "INSERT INTO submission(aid,student_id, teacher_id, file, feedback,submitted_date) values($aid, $id, $teacher, '$destination', 'No feedback yet', '$date')");
if ($query) {
    if (move_uploaded_file($file['tmp_name'], '../'.$destination)) {
        header('Location: ../pages/student_dashboard.php');
    }
}
 ?>
