<?php
//$row = mysqli_fetch_assoc($result);
//print_r($row = mysqli_fetch_assoc($result));
$row = mysqli_fetch_assoc($result);
$sql_comment = "SELECT * FROM comments WHERE article_id = " . $row['articleID'] . ";";

$result_comment = mysqli_query($conn, $sql_comment);

//SELECT * FROM comments WHERE article_id = '1486'
?>

<div class="article-container" id="meme-id">
    <div class="article_header" id="article_header">
        <div class="user_avatar">
            <img class="avatar_img" src="uploads/<?php echo $row['avatar_article_path']; ?>" alt="avatar">
        </div>
        <div id="titleID_span" class="something">
            <span id="titleID" class="titleClass"><?php echo $row['title']; ?></span>
        </div>
        <div id="article_info" class="article_info">
            <span id="article_info_span"><?php echo $row['author']; ?> • <?php echo $row['add_date']; ?> <a href="#">[zgłoś duplikat]</a></span>
        </div>
        <div class="votes">
            <span id="votes_span" class="vote_count"><?php
                $likes = $row['likes'] - $row['dislikes'];
                echo $likes;
                ?></span>
            <a href="#"><img src="img/toppng.com-youtube-like-icon-200x160.png" alt=""></a>
        </div>
    </div>
    <div class="image">
        <img src="uploads/articles/<?php echo $row['path']; ?>" alt="">
    </div>
    <div class="footer">
        <div class="star">
            <a href="#" class="add_favourite"><i class="fa-solid fa-star"></i></a>
        </div>
        <div class="social">
            <a href="#" class="add_favourite"><i class="fa-brands fa-facebook"></i></a>
            <a href="#" class="add_favourite"><i class="fa-brands fa-facebook-messenger"></i></a>
            <a href="#" class="add_favourite"><i class="fas fa-link copy-link"></i></a>
        </div>
        <div class="votes">
            <span class="vote_count"><?php echo $likes; ?></span>
            <a href="#"><img src="img/toppng.com-youtube-like-icon-200x160.png" alt=""></a>
        </div>
        <div class="comments_icon">
            <a href="#" class="comments_icon"><i class="fa-solid fa-comments"></i></a>
            <a href="#" class="comments_icon"><i class="fas fa-angle-double-up"></i></a>
        </div>
    </div>
    <?php
    while($row_comment = mysqli_fetch_assoc($result_comment)){
        include 'includes/comment.php';
    }




    if(isset($_SESSION['username'])){
        include 'addComment.php';
    } else {
        echo '<div class="not_logged">';
        echo '<p>Zaloguj się, aby dodać komentarz.</p>';
        echo '</div>';
    }


    ?>
</div>