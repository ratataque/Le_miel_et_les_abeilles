<?php
include_once("../connexion.php");

function expertConnect($login, $mdp){
    global $id;
    $conn = connection_sql();
    $sql = "table eleve;"; 
    
    $table = pg_fetch_all(pg_query($conn, $sql));

    $login_valid = false;

    foreach ($table as $line) {
        if ($line["nom_eleve"] == $login and $line["password_eleve"] == $mdp){
            $login_valid = true;
            $id = $line["id"];
            break;
        }
    }
    return $login_valid;
}

function getExpert($id){
    $tabCondition = array('id' => $id);
    $listeData = ['nom','prenom'];
    $data = selectSql("expert",$tabCondition,$listeData);
    $tableau = array (  
                        "nom" => $data["nom"],
                        "prenom" => $data["prenom"],
                    );

    // $json_data = json_encode($tableau);
    return $tableau;
}

if (isset($_POST["login"]) and isset($_POST["password"])) {
    
    $connection_valide = expertConnect($_POST["login"], $_POST["password"]);

    if($connection_valide){
        echo(json_encode(array( "login" => getExpert($id))));
    } else {
        echo(json_encode(array( "login" => "False")));
    }
}

