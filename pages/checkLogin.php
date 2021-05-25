<?php
    require '../dbconnect.php';
    //post values are from login page
    if (isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) > 0){
            session_start();
            $row = mysqli_fetch_array($result);
            $_SESSION['id'] = $row['id'];
            $_SESSION['type'] = $row['type'];
            header("location:redirect.php");     
        
        } else {
            echo "Invalid username or password!";
            header("location:login.php?error=1");
        }
    }
?>