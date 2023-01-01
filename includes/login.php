<?php
include_once './dbLoginSandbox.php';
include_once './functions.php';


if(isset($_POST['submit_login'])){
    $name = $_POST['username'];
    $password = $_POST['password'];

    loginUser($conn, $name, $password);



    //loginUser($conn, $name, $password);
    //header("location: ../login.html?error=invalidusername");


}
