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
function createUser($conn, $username, $password, $mail, $sex, $create_date){
    $sql = "INSERT INTO users (username, pwd, email, create_date, sex ,photo_path) VALUES (?, ?, ?, ?, ?, ?);";
    $photo = $sex . '.jpg';
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.html?error=stmtfailescreateUser");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ssssss", $username, $password, $mail, $create_date, $sex, $photo);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    loginUser($conn, $username, $password);
    header("location: ../profile.html?error=none");
    exit();
}

function loginUser($conn, $name, $password){
    if(usernameTaken($conn, $name)){
        //login
        $user_data = usernameTaken($conn, $name);
        $pwd_db = $user_data['pwd'];
        if($password === $pwd_db){
            session_start();
            $_SESSION['userID'] = $user_data['id'];
            $_SESSION['username'] = $user_data['username'];
            $_SESSION['avatar_path'] = $user_data['photo_path'];

            header("location: ../index.html?loginsuccesful");
        } /*else {
            header("location: ../login.html?error=invalidpassword");
            exit();
        }*/
    } elseif (emailTaken($conn, $name)) {
        //login
        $user_data = emailTaken($conn, $name);
        $pwd_db = $user_data['pwd'];
        if($password === $pwd_db){
            session_start();
            $_SESSION['userID'] = $user_data['id'];
            $_SESSION['username'] = $user_data['username'];
            $_SESSION['avatar_path'] = $user_data['photo_path'];

            header("location: ../index.html?loginsuccesful");
        } else {
            header("location: ../login.html?error=invalidpassword");
            exit();
        }
    } else {
        header("location: ../login.html?error=invalidusername");
        exit();
    }
}
function loginPwdVerify($conn, $name, $password){

}