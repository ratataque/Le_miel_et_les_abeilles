<!-- insert into gestion (nom_gestion, prenom_gestion, email_gestion, password_gestion, poste_gestion) values ('nom', 'prenom', 'mail@mail.com', 'a', 'poste');
insert into apiculteur (nom_societe, nom_apiculteur, prenom_apiculteur, description_apiculteur) values ('bite', 'dutrou', 'michel', 'plein de information'); -->

<?php

$conn = pg_connect("host=db dbname=miel user=miel password=miel");

$test = "SELECT * FROM miel;";
$table_apiculteur = pg_fetch_all(pg_query($conn, $test));
//echo ("<pre>");
//var_dump($table_apiculteur);
//echo ("</pre>");

$base64_image = $table_apiculteur[6]["lien_photo_miel"];
$unencodedData = base64_decode($base64_image);

$fp = fopen("image.png", "wb");
fwrite($fp, $unencodedData);
fclose($fp);

// affichage de l'image
echo '<img src="image.png" alt="Image">';


?>