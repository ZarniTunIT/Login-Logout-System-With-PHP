<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        header("location: index.php?login=false");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Profile Page</title>
    <style>
        .container {
            max-width: 700px;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1 class="h3 mb-3">John Doe (Manager)</h1>
        <ul class="list-group mb-3">
            <li class="list-group-item">
                <b>Email: </b> john.doe@gmail.com
            </li>
            <li class="list-group-item">
                <b>Phone: </b> (09) 243 867 645
            </li>
            <li class="list-group-item">
                <b>Address: </b> No. 321, Main Street, West City
            </li>
        </ul>
        <a href="actions/logout.php">Logout</a>
    </div>
</body>
</html>