<?php
    require '../models/adsDB.php';
    $db = new adsDB();
    $result = $db -> deleteAd($_GET['id']);
    if ($result){
        header("location:../controlPanel/manageAds.php");
    } else{
        echo "there was a problem";
    }
?>