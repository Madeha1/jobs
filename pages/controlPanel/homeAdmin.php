<?php
    session_start();
    if(isset($_SESSION['id'])){
        require '../../dbconnect.php';
    } else {
        header("location:cPanelLogin.php");    
    }
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
<nav class="navbar navbar-expand-lg">

    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="homeAdmin.php" class="nav-link">dashboard</a>
        </li>
        <li class="nav-item">
            <a href="manageOffers.php" class="nav-link">Manage Offers</a>
        </li>
        
        <li class="nav-item">
            <a href="manageUsers.php" class="nav-link">Manage Users</a>
        </li>
        <li class="nav-item">
            <a href="manageAds.php" class="nav-link">Manage Ads</a>
        </li>
        <li class="nav-item">
            <a href="adminlogout.php" class="nav-link">Log Out</a>
        </li>
    </ul>
</nav>   

<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <a href="manageOffers.php" class="fas fa-tasks icon"> Manage Offers</a>
        </div>
        <div class="col-sm-4">
            <a href="manageAds.php" class="fas fa-ad icon"> Manage Ads</a>
        </div>
        <div class="col-sm-4">
            <a href="manageUsers.php" class="fas fa-users icon"> Manage Users</a>
        </div>
    </div> 
</div>
</body>
</html>
