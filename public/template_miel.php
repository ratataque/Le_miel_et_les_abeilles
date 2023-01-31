<?php
    // $conn = pg_connect("host=db dbname=miel user=miel password=miel");

    // $sql = "SELECT * FROM miel;";
    // $miel = pg_fetch_all(pg_query($conn, $sql));

    for ($i = 0; $i < count($miel); $i++) {
        // echo "<pre>";
        // var_dump($miel[$i]);
        // echo "</pre>";

        echo "
            <div class='miel_".$miel[$i]["id_miel"]."'>
                <div class='space_titre'>
                    <div class='titre_miel cacher'>
                        ".$miel[$i]["nom_miel"]."
                    </div>
                </div>
                <div class='pancarte cacher_pancarte'>
                        <img src='./images/pancarte.png' alt=''>
                        <div class='prix'>". $miel[$i]["prix_miel"] ."$</div>
                </div>
                <div class='space_description'>
                    <div class='description cacher_bas'>
                        ". $miel[$i]["description_miel"] ."
                    </div>
                </div>
            </div>";
    }
?>
    <!-- 
<div class="space_titre">
    <div class="titre_miel cacher">
        Miel de Sapin tah les fous
    </div>
</div>
<div class="pancarte cacher_pancarte">
    <img src="./images/pancarte.png" alt="">
    <div class="prix">100$</div>
</div>
<div class="space_description">
    <div class="description cacher_bas">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui libero laboriosam deserunt similique. Repellat, vitae obcaecati excepturi a repudiandae quas porro aliquid expedita ipsam consequuntur ratione exercitationem quasi similique eligendi.
    </div>
</div> -->