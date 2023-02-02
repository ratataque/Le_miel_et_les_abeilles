<?php
    // $conn = pg_connect("host=db dbname=miel user=miel password=miel");

    // $sql = "SELECT * FROM miel;";
    // $miel = pg_fetch_all(pg_query($conn, $sql));

    for ($i = 0; $i < count($apiculteur); $i++) {
        // echo "<pre>";
        // var_dump($miel[$i]);
        // echo "</pre>";

        echo "
            <div class='apiculteur_".$apiculteur[$i]["id_apiculteur"]."'>
                <div class='space_titre'>
                    <div class='titre_miel cacher'>
                        ".$apiculteur[$i]["nom_apiculteur"]."
                        ".$apiculteur[$i]["prenom_apiculteur"]."
                    </div>
                    
                </div>
                <div class='pancarte cacher_pancarte'>
                        <img src='./images/pancarte.png' alt=''>
                        <div class='prix'>". $apiculteur[$i]["nom_societe"] ."$</div>
                </div>
                <div class='space_description'>
                    <div class='description cacher_bas'>
                        ". $apiculteur[$i]["description_apiculteur"] ."
                    </div>
                </div>
            </div>";
    }
?>
