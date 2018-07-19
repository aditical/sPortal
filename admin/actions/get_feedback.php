<?php
// require connection
require_once '../connections/db.php';
//get post data
if(isset($_POST['assignment_id'])){
	$aid=$_POST['assignment_id'];
	$aid = (int)$aid;
	$id = $_POST['student_id'];
	$id=(int)$id;

	$query = mysqli_query($con, "SELECT * FROM submission WHERE aid= $aid and student_id = $id");

	if (mysqli_num_rows($query) > 0) {
	    $row = mysqli_fetch_assoc($query);
	    echo $row['feedback'];
	} else {
	    echo 'false';
	}
}
?>
