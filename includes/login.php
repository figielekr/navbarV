<?php
include_once './dbLoginSandbox.php';
include_once './functions.php';


if(isset($_POST['submit_login'])){
    $name = $_POST['username'];
    $password = $_POST['password'];
    if(usernameTaken($conn, $name)){
        $status = true;
    } else {
        $usernameStatus = false;
    }
    if(emailTaken($conn, $name)){
        $status = true;
    } else {
        $emailStatus = false;
    }
    if ($emailStatus === false && $usernameStatus === false){
        header("location: ../login.html?error=invalidusername");
    } elseif ($emailStatus === false && $usernameStatus === false)


    //loginUser($conn, $name, $password);
    //header("location: ../login.html?error=invalidusername");


}
