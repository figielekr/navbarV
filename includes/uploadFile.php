<?php
session_start();
include_once 'dbLoginSandbox.php';

    if (isset($_POST['submit'])){
        $file = $_FILES['file'];
        $fileFullPath = $_FILES['file']['full_path'];
        $fileName = $_FILES['file']['name'];          //first file mowi, ktory plik chcemy operowac, a druga wartosc mowi, ktora informacje chcemy wyciagnac
        //$fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $fileName);    //break string into array (rfigielek.jpg) => Array ( [0] => rfigielek [1] => jpeg )
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg', 'jpeg', 'png', 'pdf');
        if (in_array($fileActualExt, $allowed)){
            if ($fileError === 0) {
                if ($fileSize < 1_000_000){
                    echo 'lol';
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDest = "../uploads/".$fileNameNew;
                    $sql = "UPDATE users SET photo_path = ?  WHERE id = ?;";
                    $stmt = mysqli_stmt_init($conn);
                    if(!mysqli_stmt_prepare($stmt, $sql)){
                        header("location: ../afterlogin.html?error=stmterror");
                    }
                    mysqli_stmt_bind_param($stmt, "si", $fileNameNew,  $userID);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_close($stmt);
                    //$_SESSION['img_path'] = $fileNameNew;
                    //print_r ($fileDest);
                    //echo '<pre></pre>';
                    //print_r ($fileNameNew);
                    move_uploaded_file($_FILES['file']['tmp_name'], $fileDest);
                    $_SESSION['photo_path'] = $fileNameNew;
                    header("Location: ../profile.html?uploadsucces");

                } else {
                echo "Your file is too big.";
                }
            } else {
            echo "There was an uploading file error.";
            }
        } else{
            echo 'Wrong filetype.';
            header("Location: ../index.html");

        }

        //print_r ($fileExt);
    }


/*$id_photo_path = $_SESSION['userID'];
$sql = "UPDATE users SET photo_path = '$fileNameNew' WHERE id = '$id_photo_path';";
if(!($conn->query($sql))){
    echo $fileNameNew;
    echo '<pre>';
    print_r($_SESSION) ;
    echo 'lol';
    echo '</pre>';
}*/
