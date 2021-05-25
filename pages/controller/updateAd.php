<?php
    require '../models/adsDB.php';
    $db = new adsDB();

    $id=$_GET['id'];
    $shows = $_GET['shows'];
    if ($shows==0) {
        $result = $db -> updateAd($id,1);
        if ($result) {

            header("location:../controlPanel/manageAds.php");
        } else {
                echo "there was a problem";
            }
    } else {
        $result = $db -> updateAd($id,0);
        if ($result) {
            header("location:../controlPanel/manageAds.php");
        } else {
                echo "there was a problem";
            }
    }
?>