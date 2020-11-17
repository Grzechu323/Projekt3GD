<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kącik szachisty</title>
    <script src="js/jquery.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-grid.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.css">
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/styles.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">MENU</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="?pokaz=">Strona główna
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?pokaz=2">Zasady gry</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?pokaz=3">Historia</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?pokaz=4">Galeria</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Słynni szachiści</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="https://pl.wikipedia.org/wiki/Garri_Kasparow" target="_blank">Garri Kasparow</a>
                    <a class="dropdown-item" href="https://pl.wikipedia.org/wiki/Michai%C5%82_Tal" target="_blank">Michaił Tal</a>
                    <a class="dropdown-item" href="https://pl.wikipedia.org/wiki/Bobby_Fischer" target="_blank">Bobby Fischer</a>
                    <a class="dropdown-item" href="https://pl.wikipedia.org/wiki/Aleksandr_Alechin" target="_blank">Aleksandr Alechin</a>
                    <a class="dropdown-item" href="https://pl.wikipedia.org/wiki/Jan-Krzysztof_Duda" target="_blank">Jan-Krzysztof Duda</a>
                    <a class="dropdown-item" href="?pokaz=5">Też nim jesteś? Kilknij tutaj!</a>
                </div>
            </li>
        </ul>
    </div>
</nav>
<section>
        <?php
            if($_GET['pokaz'] == ""){
                include("index.php");
            }
            if($_GET['pokaz'] == "2"){
                include("rules.php");
            }
            if($_GET['pokaz'] == "3"){
                include("history.php");
            }
            if($_GET['pokaz'] == "4"){
                include("gallery.php");
            }
            if($_GET['pokaz'] == "5"){
                include("formularz.php");
            }
            if($_GET['pokaz'] == "6"){
                include("ciekawostka.php");
            }
        ?>
</section>
<footer>Copyright by Grzegorz Dorożko A.D. 2020</footer>
</body>
</html>