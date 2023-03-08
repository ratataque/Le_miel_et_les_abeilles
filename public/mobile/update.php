<?php
global $ID_ELEVE;

if (isset($_POST["payload"]) and isset($_POST["id_eleve"])) {
    global $ID_ELEVE;
    $commande = json_decode($_POST["payload"], true);
    // print_r($commande);

    $ID_ELEVE = $_POST["id_eleve"];
    $id_client = $commande["id_client"];
    $id_commande = $commande["id_commande"];

    include_once("../../db/connection_sql.php");
    $conn = connection_sql();

    $sql = "UPDATE client SET nom_client = '".$commande['nom_client']."', 
                                    prenom_client = '".$commande['prenom_client']."', 
                                    adresse_client = '".$commande['adresse_client']."'
                                    WHERE id_client = $id_client;"; 

    $test = pg_query($conn, $sql);

    if($test !== false){
        $sql = "UPDATE commande SET prix_total_commande = ".$commande['prix_total_commande'].";"; 

        $test = pg_query($conn, $sql);

        $state = true;
        if ($test !== false) {
            $sql = "DELETE FROM produit_commande WHERE id_commande = $id_commande;"; 
            pg_query($conn, $sql);

            foreach ($commande['liste_article'] as $article) {
                $sql = "INSERT INTO produit_commande (quantite_produit_commande, total_produit_commande, id_miel, id_commande) VALUES (
                                                                    ".$article["quantite_produit_commande"].", 
                                                                    ".$article["total_produit_commande"].", 
                                                                    ".$article["id_miel"].", 
                                                                    ".$id_commande.");"; 
                $test = pg_query($conn, $sql);

                $state = ($test) ? $state : false;
            }
            
            echo(json_encode(array( "state" => $state)));

        } else {
            echo(json_encode(array( "state" => "false")));
        }
    } else {
        echo(json_encode(array( "state" => "false")));
    }
} else {
    http_response_code(401);
    exit();
}

?>