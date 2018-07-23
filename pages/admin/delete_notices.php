<?php
	require_once '../../connections/db.php';
	session_start();
	$delete_id = $_GET['del'];
	$query = "DELETE FROM anotice WHERE id = '$delete_id'";
	if (mysqli_query($con,$query)) {
		echo "<script>alert('Event has been deleted.')</script>";
		echo "<script>window.open('view_notices.php','_self')</script>";
	} 
?>
