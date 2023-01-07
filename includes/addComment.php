
    <div class="comment_container input_comment_container">
        <div style='width:0;height:0'>&nbsp;</div>
        <div class="comment_header add_comment ">
            <span>Więcej niż 3 znaki</span>
        </div>
        <div style='width:0;height:0'>&nbsp;</div>
        <form action="./includes/addComment.inc.php" method="POST">
            <div class="comment input_container">
                <!--<input class="comment_input" type="text">-->
                <textarea style="resize: none" class="text_comment_field" cols="100" rows="8" name="comment_content"></textarea>
            </div>
            <button class="button_comment" name="addCommentButton" value="<?php echo $row['articleID']; ?>">Zatwierdź komentarz</button>
        </form>
    </div>
