<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Send Feedback</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">Send Feedback</h1>
            <form action="../actions/feedback.php" method="post">
                <div class="form-group">
                    <input type="hidden" name="hdStudent_id" value="<?php echo $_GET['id']; ?>">
                    <textarea name="txtFeedback" rows="8" class="form-control" placeholder="Feedback"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </body>
</html>
