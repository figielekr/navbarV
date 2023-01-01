<?php

    include_once 'dbLoginSandbox.php';
    include_once 'functions.php';

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $mail = $_POST['mail'];
        $create_date = date("Y-m-d" ." ". "H:i:s");

        if (invalidUsername( $username)){
            header("location: ../signup.html?error=invalidusername");
            exit();
        }
        if (usernameTaken($conn, $username) !== false){
            header("location: ../signup.html?error=usernametaken");
            exit();
        }
        if (emailTaken($conn, $mail) !== false){
            header("location: ../signup.html?error=emailTaken");
            exit();
        }
        createUser($conn, $username, $password, $mail, $create_date);
    } else {
        header("location ../signup.html?errorcreatingaccount");
    }








    /*$dbServerName = "localhost";
    $dbUserName = "root";
    $dbPassword = "";
    $dbName = "sandbox";
    $create_date = date("Y-m-d" ." ". "H:i:s");*/

 /*   $sql = "INSERT INTO users (username, pwd,email, create_date) VALUES ('$username', '$password', '$mail', '$create_date')";

    $conn = mysqli_connect( $dbServerName, $dbUserName, $dbPassword, $dbName, );
    mysqli_query($conn, $sql);

    header("Location: ../afterlogin.html?signup=success");*/