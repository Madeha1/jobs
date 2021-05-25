<?php 
	session_start();
	if(!isset($_SESSION['id'])){
		header("location:login.php?msg=error");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Jobs</title>
</head>
<body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="homeOwner.php">
        Our<span>Jobs</span>
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="homeOwner.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="jobsForm.php"><i class="fa fa-arrow-alt-circle-down" aria-hidden="true"></i>Add Job</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="myJobs.php"><i class="fa fa-address-card" aria-hidden="true"></i>My Jobs</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href=""><i class="fa fa-users" aria-hidden="true"></i>About Us</a>
        </li>
        </ul>

        <?php
        if(isset($_SESSION['type'])){
        $type=$_SESSION ['type'];
        if($type==1){

            echo"<form action='logout.php' style='display: inline;'>
            <button type='submit' class='btn btn-light mx-2'>Logout</button>
        </form>";}
        else

        if($type==0){
            echo"<form action='logout.php' style='display: inline;'>
            <button type='submit' class='btn btn-light mx-2'>Logout</button>
            </form>";}

        }
        else
        { echo"<div>
            <form action='reg.html' style='display: inline;'>
                <button type='submit' class='btn btn-light'>Sign Up</button>
            </form>

            <form action='login.php' style='display: inline;'>
                <button type='submit' class='btn btn-light'>Login</button>
            </form>
        </div>";}
        ?>

        <!-- search field -->
        <form action='search.php' method='post' class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" name="search" type="text" placeholder="What are you looking for?" />
            <!-- <input type="submit" value="search"> -->
            <button class="btn-search btn btn-outline-light my-2 my-sm-0 " type="submit" name="submit" value="search">Search</button>
        </form>

    </div>
</nav>  
<!-- end navbar -->
<div class="container-fluid">

<?php 

$id=$_SESSION ['id'];
require '../dbconnect.php';
$sql = "SELECT * FROM jobsoffering WHERE user_id=$id";
$result = mysqli_query($conn,$sql);
 

echo "<h3 class='m-3'>The List Of Your All Job Offers </h3>";
	while($row = mysqli_fetch_assoc($result))
	{
	    echo"<div class='col-lg-6'>";
        echo"<div class='my-3 p-3 rounded box-shadow'>";
        echo"<div class='media text-muted pt-3'>";
        echo"<div class='media-body pb-3 mb-0 small lh-125 border-bottom border-gray'>";
        echo"<div class='d-flex justify-content-between align-items-center w-100'>";
        echo"<strong class='text-gray-dark'>Job Title : ".$row['job_title']."</strong>";
        echo"<a href='./details.php?jobId=".$row['id']."' class='btn btn-light'>Show Details</a>";
        echo"</div>";
        echo"</div>";
        echo"</div>";
        echo"</div>";
        echo"</div>";
	}
?>
</div>


    <!-- footer -->
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-xs-12 part">
                    <h2>Our Jobs</h2>
                    <p>Welcome all to our website, We deliver to all over the world, Be near from us</p>
                </div>

                <div class="col-lg-3 col-sm-6 col-xs-12 part-two">
                    <h2>Quick links</h2>
                    <ul>
                    <li><a href="jobs.php">Home</a></li>
                    <li><a href="jobsForm.php">Add Job</a></li>
                    <li><a href="myJobs.php">My Jobs</a></li>
                    <li><a href="">About Us</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-sm-6 col-xs-12 part">
                    <h2>Follow Us</h2>
                    <p>Pleas Follow us on our social Media profile in order to keep updated.</p>
                    <a href=""><i class="fab fa-facebook"></i></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href=""><i class="fab fa-pinterest"></i></a>
                    <a href=""><i class="fab fa-linkedin"></i></a>
                </div>

                <div class="col-lg-3 col-sm-6 col-xs-12 part">
                    <h2>Rate </h2>
                    <p>Give us your opinion to help us develop the site</p>
                    <form action="shahd.php" method="POST">
                    <input type="text">
                    <input type="submit" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <p class="footer-bottom">
    All Right reserved by &copy;Our Store
    </p>
    </footer>
<!-- end footer -->

</body>
</html>