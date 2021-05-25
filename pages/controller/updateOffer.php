<?php
    require '../models/jobsDB.php';
    $db = new jobsDB();
    //
    //$company, $address, $city, $street,$job_desc,$job_req,$salary,$teleNo,$email){
    $jobtitle =$_POST['job_title'];
    $companyname =$_POST['company_name'];
    $street = $_POST['street'];
    $city =$_POST['city'];
    $jobdes= $_POST['job_des'];
    $jobreq =$_POST['job_req'];
    $salary = $_POST['salary'];
    $teleNo =$_POST['teleNo'];
    $email = $_POST['email'];
    $id=$_POST['id'];
    $result = $db -> updateJob($id,$jobtitle,$companyname,$city,$street,$jobdes,$jobreq,$salary,$teleNo,$email);
    if ($result){
        header("location:../controlPanel/manageOffers.php");
    }
    else{
        echo "there was a problem";
    }
?>