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

    require '../models/adsDB.php';
    $db = new adsDB();
    $ads = $db -> getAds();
    echo"<h1>Ads</h1>";
    echo"<a type='button' class='btn btn-outline-dark' href='addAdform.php'>Add Ad</a>";
    echo "<table class='table'>";
    echo " <thead class='thead-light'>";
    echo "<th>ID</th><th>Link</th><th>Show</th><th>Delete</th><th>Update </th></thead>";
    foreach($ads as $row){
        $id = $row['id'];
        $shows = $row['shows'];
        echo "<td >" . $row['id'] . "</td>";
        echo "<td >" . $row['link'] . "</td>";
        echo "<td >" . $row['shows'] . "</td>";
        echo "<td ><a href='../controller/deleteAd.php?id=$id'> delete </a></td>";
        echo "<td><a href='../controller/updateAd.php?id=$id&shows=$shows'> Update Show </a></td>";
        echo "</tr>";
    }
    echo "</table>";

   ?>
</div>
</body>
</html>