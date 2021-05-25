<?php
    require '../dbconnect.php';
    session_start();
    //from checkLogin Page
	if(isset($_SESSION['id'])) {
        $userType = $_SESSION['type'];
		if($userType == 1){
		    header("location:homeOwner.php");
        } elseif($userType == 0) {
            header("location:homeSeeker.php");
        }
	}
    else{
	    header("location:admin.php");
    }
?>