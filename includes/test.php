<?php


if (isset($_SESSION['username'])) {
    echo '<img class="avatar" src="./uploads/default.jpg">';
    echo '<a href="./profile.html" class="log log-in">Profile </a>';
    echo '<a href="./includes/logout.inc.php" class="log sign-in">Logout </a>';
} else {
    echo '<a href="./login.html" class="log log-in">Log in</a>';
    echo '<a href="./signup.html" class="log sign-in">Sign up</a>';
}


if (isset($_SESSION['username'])) {
    echo '<img class="avatar" src="./uploads/default.jpg">';
    echo '<a href="./profile.html" class="log log-in">Profile </a>';
    echo '<a href="./includes/logout.inc.php" class="log sign-in">Logout </a>';
} else {
    echo '<a href="./login.html" class="log log-in">Log in</a>';
    echo '<a href="./signup.html" class="log sign-in">Sign up</a>';
}


