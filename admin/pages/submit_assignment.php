<?php
require_once '../connections/db.php';
$query = mysqli_query($con, "SELECT * FROM users WHERE type='teacher'");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Submit Assignment</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <h1 class="text-center">Submit Assignment</h1>
            <form action="../actions/submission.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" name="hdassignment_id" value="<?php echo $_GET['id']; ?>">
                    <input type="file" name="flFile" class="form-control">
                </div>
                <div class="form-group">
                    <select class="form-control" name="cmbSelectTeacher" id="cmbSelectTeacher">
                    <?php
                    while($row = mysqli_fetch_assoc($query)) { ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                    <?php } ?>
                </select>
                </div>
                <div class="form-group"><input type="date" name="dtSubmitted" class="form-control"></div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </body>
</html>
