<?php
    require '../dbconnect.php';
    session_start();
    //check if he's loged in and is on owner
	if(isset($_SESSION['id']) && $_SESSION['type'] == 1 ) {
        $id = $_SESSION['id'];
        $query = "SELECT * FROM jobsoffering where user_id=$id";
        $result = mysqli_query($conn, $query);
        if(mysqli_error($conn)){
            echo "<script type='text/javascript'>alert('Something Went Wrong!')</script>";
            echo mysqli_error($conn);
        }
        while ($row = mysqli_fetch_array($result)){
            ?>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="../assests/img/<?php echo isset($row)?$row['image']:user.png?>" alt="Job Image">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row['job_title']?></h5>
                    <h6 class="card-title"><?php echo $row['company_name']?></h6>
                    <p class="card-text"><?php echo $row['job_description']?></p>
                    <a href="./details.php?jobId=<?php echo $row['id']?>" class="btn btn-primary">Show Details</a> 
                </div>
            </div>
            <?php
        }
    } else {
        header("location:login.php");
    }
?>