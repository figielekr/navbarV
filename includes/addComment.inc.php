<?php
session_start();

require_once 'dbLoginSandbox.php';

if(isset($_POST['addCommentButton'])){
    $comment_content = $_POST['comment_content'];
    if (strlen($comment_content) < 3){
        echo 'komentarz nie może mieć mniej niż 10 znaków';
        header('location: ../index.html?error=lessThan10');
        exit();
    }
    $add_time = date("Y-m-d" ." ". "H:i:s");
    $articleID = $_POST['addCommentButton'];
    $author = $_SESSION['username'];
    $sql = "INSERT INTO comments (article_id, author_comment, content, add_time) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("location: ../index.html?error=addCommentSTMTfailed");
        exit();
    }
    mysqli_stmt_bind_param($stmt, "isss", $articleID, $author, $comment_content, $add_time);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../index.html?error=none");
}