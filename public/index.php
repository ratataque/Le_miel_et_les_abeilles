<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">
    <title>Document</title>
</head>

<body>
    <header class="nav">
        <section>
            <a href="" id="logo" target="_blank">HELLINE SUPERVISOR</a>

            <label for="toggle-1" class="toggle-menu">
                <ul>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </label>
            <input type="checkbox" id="toggle-1">

            <nav>
                <ul>
                    <li><a href="/index.php?content=accueil"><i class="icon-home"></i>Acceuil</a></li>
                    <li><a href="/index.php?content=login"><i class="icon-user"></i>Connexion</a></li>
                    <!-- <li><a href="#portfolio"><i class="icon-thumbs-up-alt"></i>portfolio</a></li>
                    <li><a href="#services"><i class="icon-gear"></i>services</a></li>
                    <li><a href="#gallery"><i class="icon-picture"></i>gallery</a></li>
                    <li><a href="#contact"><i class="icon-phone"></i>contact</a></li> -->
                </ul>
            </nav>
        </section>
    </header>

    <section class="body">
        <?php
            if (isset($_GET["content"])) {
                include $_GET["content"] . ".php";
            } else {
                include "accueil.php";
            }
        ?>
    </section>

    <footer>
        <ul class="social">
            <li><a href="" target="_blank"><i class="icon-twitter"></i></a></li>
            <li><a href="" target="_blank"><i class="icon-facebook"></i></a></li>
            <li><a href="" target="_blank"><i class="icon-linkedin"></i></a></li>
            <li><a href="" target="_blank"><i class="icon-pinterest"></i></a></li>
            <li><a href="" target="_blank"><i class="icon-instagram"></i></a></li>
        </ul>
    </footer>
</body>

</html>