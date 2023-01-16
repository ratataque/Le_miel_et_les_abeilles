<?php
    function connection_sql(){
        // Connection à la base de données
        $conn = pg_connect("host=db dbname=miel user=miel password=miel");
        //print_r(pg_version($conn));
        return $conn;
    }
?>