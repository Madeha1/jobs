<?php
    require '../dbconnect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Jobs</title>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="home.php">
        Our<span>Jobs</span>
        </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="home.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="home.php"><i class="fa fa-users" aria-hidden="true"></i>About Us</a>
        </li>
        </ul>
        <!-- <form action='logout.php'>
            <button type='submit' class='btn btn-light'>Logout</button>
        </form> -->
        <div>
            <form action="reg.html" style="display: inline;">
                <button type="submit" class="btn btn-light">Sign Up</button>
            </form>

            <form action="login.php" style="display: inline;">
                <button type="submit" class="btn btn-light mx-2">Login</button>
            </form>
        </div>

        <form action='search.php' method='post' class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" name="search" type="text" placeholder="What are you looking for?" />
            <button class="btn-search btn btn-outline-light my-2 my-sm-0 " type="submit" name="submit" value="search">Search</button>
        </form>

    </div>
</nav>    
<!-- end navbar -->


<div class="container-fluid">
    <h2 class='p-2'>Sponsered Jobs</h2>
    <div class="row">

<?php
require 'models/jobsDB.php';
$db = new jobsDB();
$jobs = $db -> getJobs();

//Sponsered Section
$numOfJobs = 0;
foreach ($jobs as $row){
    if($numOfJobs > 6)
        break;
    if($row['sponsored'] == 1 && $row['approve'] == 1){ 
        ?>
        <div class="card col-2 m-2 pt-2 shadow">
             <?php
                $img = $row['image'][0] == '.' ? "" : ".." 
            ?>
            <img class="card-img-top h-50" src="<?php echo $img . $row['image']?>">        
              <div class="card-body">
                <h5 class="card-title"><?php echo  $row['job_title']?></h5>
                <h6 class="card-title"><?php echo $row['company_name']?></h6>
                <p class="card-text"><?php echo $row['job_description']?></p>
                <a href="./details.php?jobId=<?php echo $row['id']?>" class="btn btn-primary">Show Details</a>        
            </div>
        </div>
        <?php
        $numOfJobs++;
    }
}
echo "</div>";

echo "<h2 class='p-2'>Most Viewed Jobs</h2>";
echo "<div class='row'>";
//most viewed jobs (top 5)
$jobs = $db -> getViewdJobs();
foreach ($jobs as $row){
        ?>
        <div class="card col-2 m-2 pt-2 shadow">
            <?php
                $img = $row['image'][0] == '.' ? "" : ".." 
            ?>
            <img class="card-img-top h-50" src="<?php echo $img . $row['image']?>">          
            <div class="card-body">
                <h5 class="card-title"><?php echo $row['job_title']?></h5>
                <h6 class="card-title"><?php echo $row['company_name']?></h6>
                <p class="card-text"><?php echo $row['job_description']?></p>
                <a href="./details.php?jobId=<?php echo $row['id']?>" class="btn btn-primary">Show Details</a>        
            </div>
        </div>
        <?php 
}
echo "</div>";
echo "<h2 class='p-2'>Recently Added Jobs</h2>";
echo "<div class='row'>";
//re-fetch the data so we pick the most recently added jobs
$jobs = $db -> getJobs();

// most recently jobs
foreach ($jobs as $row){
    if($row['sponsored'] == 0){
        ?>
        <div class="card col-2 m-2 pt-2 shadow">
        <?php
            $img = $row['image'][0] == '.' ? "" : "../" 
        ?>
            <img class="card-img-top h-50" src="<?php echo $img . $row['image']?>">          
        <div class="card-body">
            <h5 class="card-title"><?php echo $row['job_title']?></h5>
            <h6 class="card-title"><?php echo $row['company_name']?></h6>
            <p class="card-text"><?php echo $row['job_description']?></p>
            <a href="./details.php?jobId=<?php echo $row['id']?>" class="btn btn-primary">Show Details</a>        
        </div>
        </div>
        <?php 
    }
}
echo "</div>";

?>

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
                <li><a href="home.php">Home</a></li>
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