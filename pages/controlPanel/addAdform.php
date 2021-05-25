<html>

<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../styles/adminStyle.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>
<nav class="navbar navbar-expand-lg">

    <ul class="navbar-nav">
        <li class="nav-item">
            <a href="homeAdmin.php" class="nav-link">dashboard</a>
        </li>
        <li class="nav-item">
            <a href="manageOffers.php" class="nav-link">Manage Offers</a>
        </li>
        
        <li class="nav-item">
            <a href="manageUsers.php" class="nav-link">Manage Users</a>
        </li>
        <li class="nav-item">
            <a href="manageAds.php" class="nav-link">Manage Ads</a>
        </li>
        <li class="nav-item">
            <a href="adminlogout.php" class="nav-link">Log Out</a>
        </li>
    </ul>
</nav>   
    <div class="container">
        <h2 class="text-center">Add Ad</h2>
        <form action="addAd.php" method="post" enctype="multipart/form-data">
            <div class="form-group col-md-6">
                <label>Link</label>
                <input type="text" class="form-control" name="link" placeholder="Enter the link" required>
            </div>

            <div class="form-group col-md-6">
                <label>Photo</label>
                <input type="file" class="form-control" placeholder="image" name="image" required>
            </div>
            <button type="submit" class="btn btn-outline-dark">Add Ad</button>
        </form>
    </div>
</body>

</html>