<?php
$error = $_FILES['photo']['error'];
$tmp = $_FILES['photo']['tmp_name'];
$type = $_FILES['photo']['type'];

if ($error) {
    header("location: ../profile.php?error=file");
    exit();
}

if ($type === "image/jpeg" or $type === "image/jpg" or $type === "image/gif" or $type === "image/png") {
    mkdir("photos");
    move_uploaded_file($tmp, "photos/profile.jpg");
    header("location: ../profile.php");
} else {
    header("location: ../profile.php?error=type");
}
