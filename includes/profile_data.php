<div class="profile_info">
    <div class="profile_info_avatar">
        <div class="profile_avatar">
            <img src="uploads/<?php echo $_SESSION['photo_path']; ?>" alt="">
        </div>
    </div>


    <div class="profile_info_data">
        <p></p>
        <p></p>
        <p>Nazwa użytkownika</p>
        <b><p><?php echo $_SESSION['username']; ?></p></b>
        <p>Ostatnia wizyta:</p>
        <b><p><?php echo $_SESSION['last_visit']; ?></p></b>
        <p>E-mail</p>
        <b><p><?php echo $_SESSION['email']; ?></p></b>
        <p>Komentarzy</p>
        <p></p>
        <p>Płeć</p>
        <b><p><?php echo $_SESSION['sex']; ?></p></b>
        <p>Data dołączenia</p>
        <b><p><?php echo $_SESSION['create_date']; ?></p></b>
        <p>Zmien zdjecie</p>
        <form action="includes/uploadFile.php" method='POST' enctype="multipart/form-data">
            <input type="file" name="file"/>
            <input type="submit" name="submit" value=" Dalej ">
        </form>
    </div>
</div>