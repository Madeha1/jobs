<?php
    require 'models/adsDB.php';
    $db = new adsDB();
    $ads = $db -> getShownAds();
    // foreach($ads as $ad)
    //    echo $ad['img'];
       
    echo json_encode($ads);
?>