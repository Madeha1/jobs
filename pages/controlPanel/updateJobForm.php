<!DOCTYPE html>
<html>
<head >
	<title> update offers form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h2> UPDATE JOB OFFER FORM</h2>
	<?php
        require '../models/jobsDB.php';
        // session_start();
        // if(!isset($_SESSION['auth'])){
        // 	header("location:cPpanel.php?msg=error");
        // }
        $id = $_GET['id'];
        $db = new JobsDB();
        $offer = $db -> getJobById($_GET['id']);
	?>
	<form action="../controller/updateOffer.php" class="container" method="post">
        <input type="hidden" class="form-control" name="id" value="<?php echo $offer['id'] ?>"> 
		<div class="form-group">
            <label>Job Title</label>
            <input type="text" class="form-control" name="job_title" value="<?php echo $offer['job_title'] ?>"> 
        </div>

	    <div class="form-group">
            <label>Company Name</label>
            <input type="text" name="company_name"  class="form-control" value="<?php echo $offer['company_name'] ?>"> 
        </div>

		<div class="form-group">
            <label>Street</label>
            <input type="text" name="street" class="form-control"  value="<?php echo $offer['street'] ?>"> 
        </div>
				
        <div class="form-group">
            <label>City</label>
            <input type="text" name="city" class="form-control" value="<?php echo $offer['city'] ?>">
        </div> 

	    <div class="form-group">
            <label>Job Description</label>
            <input type="text"  class="form-control" name="job_des" value="<?php echo $offer['job_description'] ?>">
        </div> 
	
		<div class="form-group">
            <label>Job Requirements</label>
            <input type="text" class="form-control"  name="job_req" value="<?php echo $offer['job_requirements'] ?>"> 
        </div>   
		
		<div class="form-group">
            <label>Salary</label>
            <input type="text"  class="form-control" name="salary" value="<?php echo $offer['salary'] ?>"> 
        </div>  

		<div class="form-group">
            <label>Telephone Number</label>
            <input type="text" class="form-control" name="teleNo" value="<?php echo $offer['teleNo'] ?>"> 
        </div> 
		
		<div class="form-group">
            <label>Email</label>
	        <input type="email" class="form-control" name="email" value="<?php echo $offer['email'] ?>"> 
        </div> 
		<!-- <input type="submit" name="submit" value="Update Offer" /> -->
		<button type="submit" class="btn btn-primary">UPDATE OFFER FORM</button>
	</form>
</body>
</html>