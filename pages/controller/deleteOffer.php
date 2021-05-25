<?php
    require '../models/jobsDB.php';
    $db = new jobsDB();
    $result = $db -> deleteJob($_GET['id']);
    if ($result){
        header("location:../controlPanel/manageOffers.php");
    } else{
        echo "there was a problem";
    }
?>