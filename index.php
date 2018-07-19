<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Assignment Management</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <div class="col-md-6">
                <h1 class="text-center">Login</h1>
                <form action="actions/login.php" method="post">
                    <div class="form-group">
                        <input type="text" name="txtUsername" class="form-control" placeholder="Username" />
                    </div>
                    <div class="form-group">
                        <input type="password" name="txtPassword" class="form-control" placeholder="Password" />
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                     
                </form>
            </div>
        </div>
    </body>
</html>
