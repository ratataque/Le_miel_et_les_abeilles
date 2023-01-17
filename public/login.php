
<?php
echo("<pre>");
var_dump($_SESSION);
echo "</pre>";

if (isset($_POST["email"])) {
    $conn = connection_sql();
    $sql = "SELECT * FROM gestion WHERE email_gestion = '".$_POST['email']."';";
    $verification = pg_fetch_assoc(pg_query($conn, $sql));

    if($verification){
        $_SESSION["utilisateur"] = [];
        $utilisateur = array("email" => $verification["email_gestion"],
                            "poste" => $verification["poste_gestion"]);
        array_push($utilisateur, $_SESSION["utilisateur"]);
    }else{
        ?>  
        <div class="texte_centrer"> 
            <h1 class = "texte_rouge"> 
                Email ou mot de passe incorrect <br> la requete précédente n'as pas abouti.
            </h1>
        </div>
        <?php
    }

}

?>

<div id="div_formulaire">
    <form action="index.php" method="post" id="connexion_login">
        <h1>Se connecter</h1>

        <div class="inputs">
            <input type="email" placeholder="Email" name="email" />
            <input type="password" placeholder="Mot de passe" name="password">
        </div>

        <div align="center">
            <button type="submit" form="connexion_login">Se connecter</button>
        </div>
    </form>
</div>

