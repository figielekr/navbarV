<?php
include_once 'dbLoginSandbox.php';
$sql = "SELECT * FROM articles ORDER BY articleID DESC;";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);


if(strlen('fdsfdsfds') < 10){
    echo 'lol';
} else {
    echo "nielol";
}
