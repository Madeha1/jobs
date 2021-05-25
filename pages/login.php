<?php
    require '../dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Login</title>
</head>
<body id="body">
    <div id="login-card">
        <h2 class="text-center">Login form</h2><br>
        <form action="checkLogin.php" method="post">
            <div class="form-group">
                <input required type="text" name="username" class="form-control" id="inputData" placeholder="Enter username">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" id="inputData" placeholder="Enter password" name="password">
            </div>
            <button type="submit" id="button" class="btn btn-primary deep-purple btn-block ">Submit</button>
            <small id="emailHelp" class="form-text text-muted">OR <a href="reg.html">SIGN UP</a>  if you have't account</small>
        </form><br>
        All Right reserved by &copy;OurJobs
    <div>

    <?php
        if (isset($_GET['error'])){
            ?>
            <div class="alert alert-danger" role="alert">
            Invalid Username or Password!
            </div>
            <?php
        }
    ?>
    
</body>
</html>
