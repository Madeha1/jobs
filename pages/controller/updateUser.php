<?php
    require '../models/usersDB.php';
    $db = new usersDB();
    echo $_POST['id'];
    $result = $db -> updateUser($_POST['id'],$_POST['username'],$_POST['email'],$_POST['address'],$_POST['telNo']);
    if ($result){
        header("location:../controlPanel/manageUsers.php");
    }
    else{
        echo "there was a problem";
    }
?>