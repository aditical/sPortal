<?php
// require connection
require_once '../connections/db.php';
//get post data
session_start();
$aid=$_GET['id'];
$aid = (int)$aid;
$id = $_SESSION['loggedUser'];
$id=(int)$id;

$query = mysqli_query($con, "SELECT * FROM submission WHERE aid= $aid and student_id = $id");

if (mysqli_num_rows($query) > 0) {
    $row = mysqli_fetch_assoc($query);
    echo ($row['feedback']);
} else {
    echo 'NO FEEDBACK YET';
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="../pages/new.php">Back</a>
</body>
</html>
