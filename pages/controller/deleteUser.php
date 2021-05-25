<?php
    require '../models/usersDB.php';
    $db = new usersDB();
    $result = $db -> deleteUser( $_GET['id']);
    if ($result){
        header("location:../controlPanel/manageUsers.php");
    }
    else{
        echo "there was a problem";
    }
?>