<?php


if (isset($_GET["error"])) {
    if ($_GET["error"] == 'invalidusername'){
        echo "<p>Błędna nazwa użytkownika.</p>";
    }
    elseif ($_GET["error"] == 'usernametaken'){
        echo "<p>Nazwa użytkownika zajęta.</p>";
    }
    elseif ($_GET["error"] == 'emailTaken'){
        echo "<p>Adres email zajęty.</p>";
    }
    elseif ($_GET["error"] == 'invalidpassword'){
        echo "<p>Niepoprawne hasło.</p>";
    }
} else {
    echo '<p class="return"><a href="./index.html">Powrót na stronę główną.</a></p>';
}
