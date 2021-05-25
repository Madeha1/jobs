<html>

<head>
    <title>update user form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body style="background:#f2f2f2">
    <h2>UPDATE USER FORM</h2>

    <?php
     require '../models/usersDB.php';
     $db = new usersDB();
     $user = $db -> getUserById($_GET['id']);
	?>
        <form class="container" action="../controller/updateUser.php" method="post">
            <input type="hidden" name="id" value="<?php echo $user['id'] ?>" /> <br>
            <div class="form-group">
                <label class="container">User Name</label>
                <input type="text" class="form-control container" name="username" value="<?php echo $user['username'] ?>" placeholder="Enter user name">
            </div>
        
            <div class="form-group">
                <label>Email address</label>
                <input type="email" name="email" class="form-control" value="<?php echo $user['email'] ?>" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label>Address</label>
                <input type="text" value="<?php echo $user['address'] ?>" name="address" class="form-control" placeholder="enter your address">
            </div>

            <div class="form-group">
                <label >Telephone number</label>
                <input type="number" value="<?php echo $user['telNo'] ?>" name="telNo" class="form-control" placeholder="TelNo">
            </div>

            <!-- <input type="submit" name="submit" value="Update User" /> -->
            <button type="submit" class="btn btn-primary">update user information</button>
        </form>

</body>

</html>