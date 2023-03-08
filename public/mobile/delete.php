<?php
global $ID_ELEVE;

if (isset($_POST["id_client"]) and isset($_POST["id_eleve"])) {
    global $ID_ELEVE;
    $ID_ELEVE = $_POST["id_eleve"];

    include_once("../../db/connection_sql.php");
    $conn = connection_sql();

    $sql = "DELETE FROM client WHERE id_client = ".$_POST['id_client'].";"; 
    $state = pg_query($conn, $sql);

    echo(json_encode(array( "state" => $state)));

} else {
    http_response_code(401);
    exit();
}

?>