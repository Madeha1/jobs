<?php
    require '../../dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/adminStyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Jobs</title>
</head>
<body>
<div class="container">
        <h2>Login Form</h2>
        <!-- <div class="row">
            <div class="col-md-6">
                <form action="checkAdminLogin.php" method="post">
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input required type="text" name="username" class="form-control" placeholder="Enter username">
                    </div>
                      
                    <div class="form-group">
                        <label>Passowrd</label>
                        <input required type="password" name="password" class="form-control" placeholder="Enter password">
                    </div>
               
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>

            </div>
        </div> -->
        <div class="sidenav">
            <div class="login-main-text">
                <h2>Admin<br> Login Page</h2>
                <p>Login from here to access.</p>
            </div>
        </div>
        <div class="main">
            <div class="col-md-6 col-sm-12">
                <div class="login-form">
                <form action="checkAdminLogin.php" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Name</label>
                        <input required type="text" name="username" class="form-control" placeholder="Enter username">
                    </div>
                      
                    <div class="form-group">
                        <label>Passowrd</label>
                        <input required type="password" name="password" class="form-control" placeholder="Enter password">
                    </div>

                    <button type="submit" class="btn btn-black">Login</button>
                </form><br>
                
                <?php
                    if (isset($_GET['error'])){
                        ?>
                        <div class="alert alert-danger" role="alert">
                        Invalid Username or Password!
                        </div>
                        <?php
                    }
                ?> 
                </div>
            </div>
        </div>       
    </div> 
    
</body>
</html>
