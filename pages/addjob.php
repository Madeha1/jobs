<?php
require 'models/jobsDB.php';
session_start();
    //check if he's loged in and is on owner
if(isset($_SESSION['id']) && $_SESSION['type'] == 1 ) {

	$user_id = $_POST['user_id'];
	$jobtittle = $_POST['job_title'];
	$companyname = $_POST['company_name'];
	$category = $_POST['category'];
	$street = $_POST['street'];
	$city = $_POST['city'];
	$jobdes= $_POST['job_description'];
	$jobreq = $_POST['job_requirements'];
	$salary = $_POST['salary'];
	$teleNo =$_POST['teleNo'];
	$email = $_POST['email'];
	$job_type = $_POST['job_type'];
	$name = $_FILES['image']['name'];
	$target_dir = "../assests/img/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);

	$db = new jobsDB();
	// Select file type
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	// Valid file extensions
	$extensions_arr = array("jpg","jpeg","png","gif");

	// Check extension
	// if( in_array($imageFileType,$extensions_arr) ){
		$result = $db -> addJob($jobtittle, $companyname, $category, $street, $city, $jobdes, $jobreq, $salary,
		$teleNo, $email, $job_type, $name, $target_dir, $target_file,$user_id);
	// Insert record
		if ($result){
			echo "<script type='text/javascript'>alert('Submitted Successfully!')</script>";
			header("location:jobsForm.php");
		} else{
			echo "<script type='text/javascript'>alert('Failed!')</script>";
			header("location:jobsForm.php");
		}
	// }
} else {
	header("location:login.php");
}

?>


