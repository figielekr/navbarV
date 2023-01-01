<?php

/*$create_date = date("d-m-Y" ." ". "H:i:s");
echo $create_date;*/
include_once "dbLoginSandbox.php";

$name = 'Katarzyna';

if(usernameTaken($conn, $name)){
    echo 'bangla';
    print_r(usernameTaken($conn, $name));
} else {
    echo 'buba';
}

//print_r(usernameTaken($conn, $name));

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






/*$username = "abecadlo";
$email = "pepefff@wp.pl";

print_r(usernameTaken($conn, $username));

if (usernameTaken($conn, $username) !== false){
    echo "username talen";
} else {
    echo "smialo";
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
        $result = false;
        return $result;
    }
}*/