<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/index.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>

<body>
    <h1>Click the burger menu to see the magic.</h1>
    <input type="checkbox" id="burger-toggle">
    <label for="burger-toggle" class="burger-menu">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </label>
    <div class="menu">
        <div class="menu-inner">
            <ul class="menu-nav">
                <li class="menu-nav-item"><a class="menu-nav-link" href="#"><span>
                            <div>Nos Apiculteurs</div>
                        </span></a></li>
                <li class="menu-nav-item"><a class="menu-nav-link" href="#"><span>
                            <div>Nos Miels</div>
                        </span></a></li>
                <li class="menu-nav-item"><a class="menu-nav-link" href="./projet.php"><span>
                            <div>Notre Projet</div>
                        </span></a></li>
                <li class="menu-nav-item"><a class="menu-nav-link" href="./login.php"><span>
                            <div>Connexion</div>
                        </span></a></li>
            </ul>
            <div class="gallery">
                <div class="title">
                    <p>miel o max</p>
                </div>
                <div class="images">
                    <a class="image-link" href="#">
                        <div class="image" data-label="Appiculteur"><img src="./images/apiculteur.jpg" ></div>
                    </a>
                    <a class="image-link" href="#">
                        <div class="image" data-label="Miel"><img src="./images/miel.jpg" ></div>
                    </a>
                    <a class="image-link" href="./projet.php">
                        <div class="image" data-label="Projet"><img src="./images/projet.jpg" ></div>
                    </a>
                    <a class="image-link" href="./login.php">
                        <div class="image" data-label="Connexion"><img src="./images/connexion.jpg" ></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>