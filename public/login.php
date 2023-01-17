
<?php
echo("<pre>");
var_dump($_SESSION);
echo "</pre>";
echo("a = ".$a);
//unset($_SESSION['faux']);
//unset($_SESSION['utilisateur']);
//unset($_SESSION);

if (isset($_POST["email"])) {
    $conn = connection_sql();
    $sql = "SELECT * FROM gestion WHERE email_gestion = '".$_POST['email']."' and password_gestion = '".$_POST['password']."';";
    $verification = pg_fetch_assoc(pg_query($conn, $sql));

    if($verification){
        $utilisateur = array("email" => $verification["email_gestion"],
                            "poste" => $verification["poste_gestion"]);
        $_SESSION["utilisateur"] = $utilisateur;

    }else{
        $a = 1;
    }

}

?>

<div id="div_formulaire">
    <form action="index.php" method="post" id="connexion_login">
        <h1>Se connecter</h1>
        <?php
        if(!empty($a)){
            ?>  
            <div id="texte_centrer"> 
                <p id = "texte_rouge"> Email ou mot de passe incorrect <br><br></p>
            </div>
            <?php
        }else{
            ?>  
            <div id="texte_cacher"> 
                <p id = "texte_rouge"> Email ou mot de passe incorrect <br><br></p>
            </div>
            <?php
        }
        ?>  
        <div class="inputs">
            <input type="email" placeholder="Email" name="email" />
            <input type="password" placeholder="Mot de passe" name="password">
        </div>

        <div align="center">
            <button type="submit" form="connexion_login">Se connecter</button>
        </div>
    </form>
</div>

