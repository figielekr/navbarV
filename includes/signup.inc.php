<?php

    include_once 'dbLoginSandbox.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
    $mail = $_POST['mail'];




    $dbServerName = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName = "sandbox";
    $create_date = date("Y-m-d" ." ". "H:i:s");

    $sql = "INSERT INTO users (username, pwd,email, create_date) VALUES ('$username', '$password', '$mail', '$create_date')";

    $conn = mysqli_connect( $dbServerName, $dbUserName, $dbPassword, $dbName, );
    mysqli_query($conn, $sql);

    header("Location: ../afterlogin.html?signup=success");