<?php
include_once("../../db/connection_sql.php");
$conn = connection_sql();

$sql = "table miel;"; 
$list_miel = pg_fetch_all(pg_query($conn, $sql));

// $connection_valide = eleve_login("test", "passtest");
// echo(json_encode(array( "login" => $connection_valide)));
echo "<pre>";
// var_dump(get_list_commande(4));
get_list_commande(4);
echo "</pre>";

global $ID_ELEVE;

function eleve_login($login, $mdp){
    global $conn;
    global $ID_ELEVE;

    $sql = "table eleve;"; 
    $table = pg_fetch_all(pg_query($conn, $sql));

    $login_valid = false;

    foreach ($table as $line) {
        if ($line["nom_eleve"] == $login and $line["password_eleve"] == $mdp){
            $login_valid = true;
            $ID_ELEVE = $line["id_eleve"];
            break;
        }
    }
    return $login_valid;
}

function get_list_commande($id_eleve){
    global $conn;

    // $sql = "SELECT * FROM commande WHERE id_eleve=$id_eleve;"; 
    $sql = "SELECT
            *, commande.id_commande 
            FROM commande
            LEFT JOIN client
            ON  commande.id_client = client.id_client
            LEFT JOIN produit_commande
            ON  commande.id_commande = produit_commande.id_commande
            WHERE commande.id_eleve = $id_eleve;";

    $list_commandes = pg_fetch_all(pg_query($conn, $sql));

    $last_command = "-1";
    foreach ($list_commandes as $commande) {
        if ($commande['id_commande'] === ("2")) {
            
        };
    }

    return $list_commandes;
}

if (isset($_POST["login"]) and isset($_POST["password"])) {
    
    $connection_valide = eleve_login($_POST["login"], $_POST["password"]);

    if($connection_valide){
        $list_commandes = get_list_commande($ID_ELEVE);
        echo(json_encode(array( "state" => $connection_valide, "commandes" => array("list_commandes" => $commandes))));
    } else {
        echo(json_encode(array( "state" => $connection_valide)));
    }
}

