<?php
	require_once '../../connections/db.php';
	session_start();
	$delete_id = $_GET['deln'];
    $sql = "DELETE FROM posts WHERE aid = '$delete_id'";
    if ($con->query($sql)=== TRUE){
        echo "<script>alert('Event has been deleted.')</script>";
		echo "<script>window.open('view_posts.php','_self')</script>";
    }else{
        echo "Error: " . $sql . "<br>" . $con->error;
    }
 
?>
