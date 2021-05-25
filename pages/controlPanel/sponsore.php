<?php 
    require '../../dbconnect.php';
    $id=$_GET['id'];
    $response = $_GET['sponsored'];
    $query = "UPDATE jobsoffering SET sponsored=1 WHERE id='$id'" ;
    $result = mysqli_query($conn, $query);
    if ($result){
        header("location:manageOffers.php");
    } else {
        echo "There was a problem";
    }

?>