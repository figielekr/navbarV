<?php

function invalidUsername($username){
    if (preg_match("/^[a-zA-Z0-9]*$", $username)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}
function usernameTaken($conn, $username){
    $sql = "SELECT * FROM users WHERE username = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.html?error=stmtfaileduserTaken");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($result)){
        return $row;
    } else {
        return false;
    }
}
function emailTaken($conn, $email){
    $sql = "SELECT * FROM users WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.html?error=stmtfailedemailTaken");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "s",$email);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($result)){
        return $row;
    } else {
        return false;
    }
}
function createUser($conn, $username, $password, $mail, $create_date){
    $sql = "INSERT INTO users (username, pwd, email, create_date) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.html?error=stmtfailescreateUser");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ssss", $username, $password, $mail, $create_date);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../signup.html?error=none");
    exit();
}

function loginUser($conn, $name, $password){

}