<?php
global $ID_ELEVE;

if (isset($_POST["payload"]) and isset($_POST["id_eleve"])) {
    global $ID_ELEVE;
    $commande = json_decode($_POST["payload"], true);
    // print_r($commande);

    $ID_ELEVE = $_POST["id_eleve"];

    include_once("../../db/connection_sql.php");
    $conn = connection_sql();

    $sql = "INSERT INTO client (nom_client, prenom_client, adresse_client) VALUES (
                                                                    '".$commande['nom_client']."',
                                                                    '".$commande['prenom_client']."', 
                                                                    '".$commande['adresse_client']."') RETURNING id_client;"; 
    $id_client = pg_fetch_all(pg_query($conn, $sql));
    // print_r($id_client);

    if($id_client !== false){
        $id_client = $id_client[0]["id_client"];

        $sql = "INSERT INTO commande (prix_total_commande, id_client, id_eleve) VALUES (
                                                                    ".$commande['prix_total_commande'].", 
                                                                    ".$id_client.", ".$ID_ELEVE.") RETURNING id_commande;"; 
        // print_r($sql);
        $id_commande = pg_fetch_all(pg_query($conn, $sql));

        $state = true;
        if ($id_commande !== false) {
            $id_commande = $id_commande[0]["id_commande"];

            foreach ($commande['liste_article'] as $article) {
                $sql = "INSERT INTO produit_commande (quantite_produit_commande, total_produit_commande, id_miel, id_commande) VALUES (
                                                                    ".$article["quantite_produit_commande"].", 
                                                                    ".$article["total_produit_commande"].", 
                                                                    ".$article["id_miel"].", 
                                                                    ".$id_commande.");"; 
                $test = pg_fetch_all(pg_query($conn, $sql));

                $state = (!$test) ? false : $state;
            }
            
            echo(json_encode(array( "state" => $state, "id_commande" => $id_commande, "id_client" => $id_client)));

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