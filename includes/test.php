<?php


/*if (isset($_SESSION['username'])) {
    echo '<img class="avatar" src="./uploads/default.jpg">';
    echo '<a href="./profile.html" class="log log-in">Profile </a>';
    echo '<a href="./includes/logout.inc.php" class="log sign-in">Logout </a>';
} else {
    echo '<a href="./login.html" class="log log-in">Log in</a>';
    echo '<a href="./signup.html" class="log sign-in">Sign up</a>';
}


if (isset($_SESSION['username'])) {
    echo '<img class="avatar" src="./uploads/default.jpg">';
    echo '<a href="./profile.html" class="log log-in">Profile </a>';
    echo '<a href="./includes/logout.inc.php" class="log sign-in">Logout </a>';
} else {
    echo '<a href="./login.html" class="log log-in">Log in</a>';
    echo '<a href="./signup.html" class="log sign-in">Sign up</a>';
}

*/




include_once 'dbLoginSandbox.php';

$name = 'Dorota';
//$last_time = '2023-01-03 11:11:53';
$last_time = date("Y-m-d" ." ". "H:i:s");


lastTimeLogin($conn, $name, $last_time);
$id = 20;

function lastTimeLogin($conn, $name){
    $sql = "UPDATE users SET last_visit = ? WHERE username = ?;";
    $last_time = date("Y-m-d" ." ". "H:i:s");
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../signup.html?error=stmtfailedLastTimeLogin");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "ss", $last_time, $name);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    echo $last_time;
    //echo 'lol';

    //echo $name;
    exit();
}
