<?php
    session_start();
    $email = $_POST['email'];
    $password = $_POST['password'];
    if ($email === "john.doe@gmail.com" && $password === "123") {
        $_SESSION['user'] = ["name" => "John Doe"];
        header("location: ../profile.php");
    }
    else {
        header("location: ../index.php?incorrect=1");
    }