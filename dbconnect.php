<?php
$servername = "127.0.0.1";
$username = "job_user";
$password = "job_user123";
$dbname = "jobs-project";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

?>
