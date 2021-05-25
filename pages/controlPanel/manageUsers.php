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
    <title>Manage Users</title>
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
   <!-- end navbar -->
    <div class="container-fluid">


<?php
    // Add them after finishing the whole project AND SHOULD TEST IT
    // session_start();
    // if(isset($_SESSION['id']){

    // } else {
    //     header("location:cPanelLogin.php");
    // }

    require '../models/usersDB.php';
    $db = new usersDB();
    $users = $db -> getUsers();
    echo"<h1>Users</h1>";
    echo "<table class='table'>";
    echo " <thead class='thead-light'>";
    echo "<th>User Name</th><th>Password</th><th>Address</th><th>Email</th><th>Telephone Number</th><th>Delete</th><th>Update </th>   </thead>";
    foreach($users as $row){
        $id = $row['id'];
        echo "<td >" . $row['username'] . "</td>";
        echo "<td >" . $row['password'] . "</td>";
        echo "<td >" . $row['address'] . "</td>";
        echo "<td >" . $row['email'] . "</td>";
        echo "<td >" . $row['telNo'] . "</td>";
        echo "<td ><a href='../controller/deleteUser.php?id=$id'> delete </a></td>";
        echo "<td ><a href='updateUserForm.php?id=$id'> Update </a></td>";
        echo "</tr>";
    }
    echo "</table>";

   ?>
</div>
</body>
</html>