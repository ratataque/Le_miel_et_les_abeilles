<?php
include('fonction.php');
echo ("<pre>");
var_dump($_POST);
echo ("</pre>");
echo ("<pre>");
var_dump($_GET);
echo ("</pre>");
if(isset($_GET["id_apiculteur"])){
    $id = $_GET["id_apiculteur"];
    $conn = pg_connect("host=db dbname=miel user=miel password=miel");
    $sql = "select * from miel where id_apiculteur=".$id.";";
    $table_miel = pg_fetch_all(pg_query($conn, $sql));
    affich_Table_miel($table_miel, $id);
}

if ($_POST["demande_supp"]) {
    demande_validation_suppression($_POST, 'detail_miel');

}