<?php
    if (isset($_POST['submit'])){
        $file = $_FILES['file'];
        //print_r($fileFullPath);
        //echo '<pre></pre>';

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
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDest = "../uploads/".$fileNameNew;
                    //print_r ($fileDest);
                    //echo '<pre></pre>';
                    //print_r ($fileNameNew);
                    move_uploaded_file($_FILES['file']['tmp_name'], $fileDest);
                    header("Location: ../index.html?uploadsucces");

                } else {
                echo "Your file is too big.";
                }
            } else {
            echo "There was an uploading file error.";
            }
        } else{
            echo 'Wrong filetype.';
        }

        //print_r ($fileExt);
    }
    ?>

