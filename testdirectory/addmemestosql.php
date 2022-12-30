<?php
    //https://www.youtube.com/watch?v=QAPZUNHQoNo
    include_once './includes/dbLoginSandbox.php';

    $local_dir = './meme';

    /* $files = scandir($local_dir);
    $files = array_diff($files,array('.','..')); //usuwanie (.) i (.. )
    //pre_r($files);
    $files = array_values($files);   //numerowanie od zera
    pre_r($files); */
    //one liner
    $files = array_values(array_diff(scandir($local_dir), array('.','..')));

    //echo sizeof($files);

    //pre_r (file_list($local_dir));

    function pre_r($array){
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    }


    function file_list($dir){
        return $files = array_values(array_diff(scandir($dir), array('.','..')));
    }
    //concatenation


    /* for($i = 0; $i < sizeof($files); $i++){
    $b = $i+1;
    echo substr($files[$i],14, strpos($files[$i],'_', 16)).' ';
    } */

    //echo cut_word($files[1]);



    function cut_word($word){
    $const = 14;
    $second = strpos($word, '_',16);
    $third = $second - $const;
    return substr($word, 14, $third); //od ktorego miejsca ma ile miejsc drukowac
    }

echo '<pre></pre>';


     for ($i =0; $i<sizeof($files); $i++){
    //echo $files[$i];
    //echo '<pre></pre>';
    $author = cut_word($files[$i]);
    //echo $author;
    //echo '<pre></pre>';
    $likes = 0;
    $dislikes =0;
    $path = $files[$i];
    //echo ' ',$i;
    //echo '<pre></pre>'. ' '. $i;
    //$sql = "INSERT INTO articles ( author, likes, dislikes, path ) VALUES ( '$author', '$likes', '$dislikes', '$path')";
    //mysqli_query($conn, $sql);
    }





    //$sql = "INSERT INTO users (username, pwd,email) VALUES ('$username', '$password', '$mail')";
    //mysqli_query($conn, $sql);


?>