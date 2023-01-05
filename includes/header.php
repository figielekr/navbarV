<?php
    session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/afterlogin.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="stylesheet" href="./css/article.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100&family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/28be9a9148.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>navbarV</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="logo-container">
                <a href="./index.html"><h3 class="logo">Logo<span>Brand</span></h3></a>
            </div>
            <div class="menu">
                <div class="links">
                    <ul>
                        <li class="nav-link"><a class="dropdown-test" href="#">Products<i class="fa-solid fa-caret-up"></i></a>
                            <div class="submenu">
                                <ul>
                                    <li class="submenu-link"><a href="./addArticle.html">Add meme</a></li>
                                    <li class="submenu-link"><a href="#">Link 2</a></li>
                                    <li class="submenu-link"><a class="deep-link" href="#">Link 3<i class="fa-solid fa-caret-up"></i></a>
                                        <div class="submenu second">
                                            <ul>

                                                <li class="submenu-link"><a href="#">Link 1</a></li>
                                                <li class="submenu-link"><a class="deep-link" href="#">Link 2<i class="fa-solid fa-caret-up"></i></a>
                                                    <div class="submenu second">
                                                        <ul>
                                                            <li class="submenu-link"><a href="#">Link 1</a></li>
                                                            <li class="submenu-link"><a href="#">Link 2</a></li>
                                                            <li class="submenu-link"><a href="#">Link 3</a></li>
                                                            <li class="submenu-link"><a href="#">Link 4</a></li>
                                                            <div class="arrow"></div>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="submenu-link"><a href="#">Link 3</a></li>
                                                <li class="submenu-link"><a href="#">Link 4</a></li>
                                                <div class="arrow"></div>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="submenu-link"><a href="#">Link 4</a></li>
                                    <div class="arrow"></div>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-link"><a href="./includes/test.php">PHP Testing</a></li>
                        <li class="nav-link"><a class="dropdown-test" href="#">Info<i class="fa-solid fa-caret-up"></i></a>
                            <div class="submenu">
                                <ul>
                                    <li class="submenu-link"><a href="#">Link 1</a></li>
                                    <li class="submenu-link"><a href="#">Link 2</a></li>
                                    <li class="submenu-link"><a class="deep-link" href="#">Link 3<i class="fa-solid fa-caret-up"></i></a>
                                        <div class="submenu second">
                                            <ul>
                                                <li class="submenu-link"><a href="#">Link 1</a></li>
                                                <li class="submenu-link"><a class="deep-link" href="#">Link 2<i class="fa-solid fa-caret-up"></i></a>
                                                    <div class="submenu second">
                                                        <ul>
                                                            <li class="submenu-link"><a href="#">Link 1</a></li>
                                                            <li class="submenu-link"><a href="#">Link 2</a></li>
                                                            <li class="submenu-link"><a href="#">Link 3</a></li>
                                                            <li class="submenu-link"><a href="#">Link 4</a></li>
                                                            <div class="arrow"></div>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="submenu-link"><a href="#">Link 3</a></li>
                                                <li class="submenu-link"><a href="#">Link 4</a></li>
                                                <div class="arrow"></div>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="submenu-link"><a href="#">Link 4</a></li>
                                    <div class="arrow"></div>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-link"><a href="#">Contact</a></li>
                    </ul>
                </div>
                <!--<div class="login logout">
                    <a href="./login.html" class="log log-in">Log in</a>
                    <a href="./signup.html" class="log sign-in">Sign up</a>
                </div>-->

                <div class="login logout">

                    <?php
                    if (isset($_SESSION['username'])) {
                        echo '<img class="avatar" src="./uploads/' .  $_SESSION['photo_path'] .'">';
                        echo '<a href="./profile.html" class="log log-in">Profile </a>';
                        echo '<a href="./includes/logout.inc.php" class="log sign-in">Logout </a>';
                        } else {
                        echo '<a href="./login.html" class="log log-in">Log in</a>';
                        echo '<a href="./signup.html" class="log sign-in">Sign up</a>';

                    }
                    ?>
                </div>

            </div>
            <div class="hamburger-container">
                <div class="hamburger-menu">
                    <div></div>
                </div>
            </div>
        </div>
    </header>