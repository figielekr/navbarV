



<?php
    $sql_comment = "SELECT * FROM comments WHERE article_id = " . $row['articleID'] . " ;";
?>


<div class="comment_section">
    <div class="comment_container">
        <div style='width:0;height:0'>&nbsp;</div>
        <div class="comment_header">
            <a href="#"><?php echo $row_comment['author_comment'];  ?></a> <span> • <?php echo $row_comment['add_time'];  ?></span>
            <div class="comment_votes">
                <span><?php echo $row_comment['likes'];  ?> <a href="#"><i class="fa-solid fa-thumbs-up"></i></a></span>
            </div>
        </div>
        <div class="comment">
            <p><?php echo $row_comment['content'];  ?>
            </p>
        </div>
    </div>
</div>

















<?php
/*if(!$_SESSION['username']){
    echo 'not_logged';
}
*/?>