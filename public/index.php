<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/login.css">    

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="./js/script.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.1.0/anime.min.js"></script>

    <title>Document</title>
</head>

<body>
    <!-- <h1>Click the burger menu to see the magic.</h1> -->
    <input type="checkbox" id="burger-toggle" onclick="init()">
    <label for="burger-toggle" class="burger-menu">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </label>
    <div class="menu">
        <div class="menu-inner">
            <ul class="menu-nav">
                <li class="menu-nav-item"><a class="menu-nav-link" href="#" onclick="switch_img('appiculteur')"><span>
                            <div>Nos Apiculteurs</div>
                        </span></a></li>
                <li class="menu-nav-item"><a class="menu-nav-link" href="#" onclick="switch_img('miel')"><span>
                            <div>Nos Miels</div>
                        </span></a></li>
                <li class="menu-nav-item"><a class="menu-nav-link btn_projet" href="#" onclick="transi_rond(event, this)"><span>
                            <div>Notre Projet</div>
                        </span></a></li>
                <li class="menu-nav-item"><a class="menu-nav-link btn_login" href="#" onclick="transi_rond(event, this)"><span>
                            <div>Connexion</div>
                        </span></a></li>
            </ul>
            <div id="start" class="gallery focus">
                <div class="title">
                    <p class="show">miel o max</p>
                </div>
                <div class="images">
                    <div class="image-link">
                        <a href="#" onclick="switch_img('appiculteur')">
                            <div class="image" data-label="Appiculteur"><img class="show" src="./images/apiculteur.jpg"></div>
                        </a>
                    </div>
                    <div class="image-link" >
                        <a href="#" onclick="switch_img('miel')">
                            <div class="image" data-label="Miel"><img class="show" src="./images/miel.jpg"></div>
                        </a>
                    </div>
                    <div class="image-link" >
                        <a class="btn_projet" href="#" onclick="transi_rond(event, this)">
                            <div class="image" data-label="Projet"><img class="show" src="./images/projet.jpg"></div>
                        </a>
                    </div>
                    <div class="image-link" >
                        <a class="btn_login" href="#" onclick="transi_rond(event, this)">
                            <div class="image" data-label="Connexion"><img class="show" src="./images/connexion.jpg"></div>
                        </a>
                    </div>
                </div>
            </div>

            <div id="appiculteur" class="gallery abso">
                <div class="title">
                    <p>Appiculteur</p>
                </div>
                <div class="images">
                    <div class="image-link" >
                        <a href="#" style="display: none;">
                            <div class="image" data-label="Appiculteur"><img class="show" src="./images/apiculteur.jpg"></div>
                        </a>
                    </div>
                    <div class="image-link" >
                        <a href="#" style="display: none;">
                            <div class="image" data-label="Appiculteur"><img class="show" src="./images/apiculteur.jpg"></div>
                        </a>
                    </div>
                </div>
            </div>

            <div id="miel" class="gallery abso">
                <div class="title">
                    <p>Miel</p>
                </div>
                <div class="images">
                    <div class="image-link" >
                        <a href="#" style="display: none;">
                            <div class="image" data-label="Miel"><img class="show" src="./images/miel.jpg"></div>
                        </a>
                    </div>
                    <div class="image-link" >
                        <a href="#" style="display: none;" onclick="miel_click()">
                            <div class="image" data-label="Miel"><img class="show" src="./images/miel.jpg"></div>
                        </a>
                    </div>
                    <div class="image-link" >
                        <a href="#" style="display: none;">
                            <div class="image" data-label="Miel"><img class="show" src="./images/miel.jpg"></div>
                        </a>
                    </div>
                    <div class="image-link" >
                        <a href="#" style="display: none;">
                            <div class="image" data-label="Miel"><img class="show" src="./images/miel.jpg"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="login" style="height: 100vh; width: 100vw; background-image: url('./images/background_miel.jpg'); background-size: cover;">
        <?php include("./login.php"); ?>
    </div>

    <div id="projet" style="height: 100vh; width: 100vw; background-color: yellow;">
        <?php include("./projet.php"); ?>
    </div>

    <div id="accueil" style="height: 100vh; width: 100vw; background-color: white;">
        <?php include("./accueil.php"); ?>
    </div>
</body>

</html>