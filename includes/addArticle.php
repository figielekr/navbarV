

<div class="title">
          <p>Dodaj zdjęcie.</p>
      </div>
      <div class="addArticle">
          <form action="includes/uploadArticle.php" method='POST' enctype="multipart/form-data">
          <div class="addArticle_info">
            <b><p>Tytuł:</p></b>
            <input name="title" type="text">
            <b><p>Wybierz zdjęcie:</p></b>
            <input class="input_file choose_photo" name="file" type="file">
            <p></p>
            <input class="input_file_dalej" type="submit" name="submit" value=" Dalej ">
          </div>
          </form>
      </div>