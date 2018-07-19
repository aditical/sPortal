<?php
require_once '../connections/db.php';
session_start();
$loggedUser_name= $_SESSION['loggedUser_name'];
$loggeduser = $_SESSION['loggedUser'];
$query = mysqli_query($con, "SELECT * FROM batch");
$query2 = mysqli_query($con, "SELECT * FROM submission AS s JOIN users ON s.student_id = users.id JOIN batch ON users.batch_id = batch.id WHERE s.teacher_id = $loggeduser");
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Teacher Dashboard</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
        
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 class="text-center">Submitted Assignment</h1>
                    <h6 class="float-left"><?php echo $loggedUser_name; ?> </h6>
                    <a href="../actions/logout.php" class="float-right">Logout</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Batch</th>
                                <th>Action</th>
                                <th>Submitted Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row2 = mysqli_fetch_assoc($query2)) { ?>
                                <tr>
                                    <td><?php echo $row2['name']; ?></td>
                                    <td><?php echo $row2['batch']; ?></td>
                                    <td><a href="../<?php echo $row2['file']; ?>">View</a> | <a href="send_feedback.php?id=<?php echo $row2['sub_id']; ?>">send Feedback</a></td>
                                    <td><?php echo $row2['submitted_date']; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4">
                    <h1>Assign Assignment</h1>
                    <form action="../actions/assign.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <input type="text" name="txtName" class="form-control" placeholder="Assignment Name">
                        </div>
                       <!--  <div class="form-group">
                            <label class="control-label" for="teacher">Teacher</label>
                            <div class="form-group">
                                <input type="text" name="teacher" class="form-control">
                            </div>
                        </div> -->
                        <div class="form-group">
                            <select class="form-control" name="cmbBatch">
                                <?php
                                while($row = mysqli_fetch_assoc($query)) { ?>
                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['batch']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="name">Due date</label>
                            <div class="form-group">
                                <input type="date" name="due_date" placeholder="MM/DD/YYYY">
                            </div>
                        <div class="form-group">
                            <input type="file" name="flAssignment" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
