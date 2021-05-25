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
    <title>Manage Offers</title>
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
   <!-- end navbar  -->
    <div class="container-fluid">
<?php
    session_start();
    if(isset($_SESSION['id'])){
    require '../models/jobsDB.php';
    $db = new jobsDB();
    $jobs = $db -> getJobs();
    echo"<h1>Jobs</h1>";
    echo "<table class='table'>";
    echo " <thead class='thead-light'>";
    echo "<th>Job Title</th><th>Company Name</th><th>city</th><th>Telephone No</th><th>Email</th><th>Category</th><th>Sponsored</th>";
    echo "<th>Approved</th><th>Delete</th><th>Update</th>";
    echo "<th>Change Category</th><th>Approval</th><th>Sponsored</th></thead>";
    foreach($jobs as $row){
        $id = $row['id'];
        echo "<td >" . $row['job_title'] . "</td>";
        echo "<td >" . $row['company_name'] . "</td>";
        echo "<td >" . $row['city'] . "</td>";
        echo "<td >" . $row['teleNo'] . "</td>";
        echo "<td >" . $row['email'] . "</td>";
        echo "<td >" . $row['category'] . "</td>";
        echo "<td >" . $row['sponsored'] . "</td>";
        echo "<td >" . $row['approve'] . "</td>";
        echo "<td ><a href='../controller/deleteOffer.php?id=$id'> delete </a></td>";
        echo "<td ><a href='updateJobForm.php?id=$id'> Update </a></td>";
        //variables for url routing
        $category = $row['category'];
        $approve = $row['approve'];
        $sponsored = $row['sponsored'];
        echo "<td><a href='changeCategory.php?id=$id&category=$category'>Change</a></td>";
        echo "<td><a href='approveOffer.php?id=$id&approve=$approve'>Approve</a></td>";
        echo "<td><a href='sponsore.php?id=$id&sponsored=$sponsored'> Sponsored </a></td>";
        echo "</tr>";
    }
    echo "</table>";
    } else {
        header("location:cPanelLogin.php");
    }
   ?>
</div>
</body>
</html>