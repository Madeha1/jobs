<?php
require '../models/adsDB.php';
$adsDB = new adsDB();

$target_dir = "../assests/img/adImage/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
// Select file type

if (isset($_POST['link'])) {
    $link = $_POST['link'];

    $result = $adsDB->addAd($target_file, $link);
    if ($result) {
        echo "add successfully";
        header("location:manageAds.php");
    } else {
        echo "Error";
    }

} else {
    //header("location:manageAds.php");
	echo "No data";
}

?>
