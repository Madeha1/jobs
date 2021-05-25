<?php 
    require '../../dbconnect.php';
    $id=$_GET['id'];
    $approve = $_GET['approve'];
    $query = "UPDATE jobsoffering SET approve=1 WHERE id='$id'" ;
    $result = mysqli_query($conn, $query);
    if ($result){
        header("location:manageOffers.php");
    } else {
        echo "there was a problem";
    }
?>