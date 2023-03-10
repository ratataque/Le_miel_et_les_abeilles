<?php
include "connection_sql.php";
$conn = connection_sql();



$sql = "CREATE TABLE IF NOT EXISTS apiculteur(
    id_apiculteur SERIAL,
    lien_photo_apiculteur text,
    nom_societe VARCHAR(50),
    nom_apiculteur VARCHAR(50),
    prenom_apiculteur VARCHAR(50),
    description_apiculteur text,
    PRIMARY KEY(id_apiculteur)
);
";

$sql .= "CREATE TABLE IF NOT EXISTS miel(
    id_miel SERIAL,
    nom_miel VARCHAR(50),
    origine_miel VARCHAR(50),
    description_miel text,
    lien_photo_miel text,
    prix_miel INT,
    id_apiculteur INT NOT NULL,
    PRIMARY KEY(id_miel),
    FOREIGN KEY(id_apiculteur) REFERENCES apiculteur(id_apiculteur) ON DELETE CASCADE
);
";     

$sql .= "CREATE TABLE IF NOT EXISTS niveau(
    id_niveau SERIAL,
    nom_niveau VARCHAR(50),
    PRIMARY KEY(id_niveau)
);
";   

$sql .= "CREATE TABLE IF NOT EXISTS classe_eleve(
    id_classe SERIAL,
    nom_classe VARCHAR(50),
    id_niveau INT NOT NULL,
    PRIMARY KEY(id_classe),
    FOREIGN KEY(id_niveau) REFERENCES niveau(id_niveau) ON DELETE CASCADE
);
";

$sql .= "CREATE TABLE IF NOT EXISTS eleve(
    id_eleve SERIAL,
    nom_eleve VARCHAR(50),
    prenom_eleve VARCHAR(50),
    password_eleve VARCHAR(50),
    id_classe INT NOT NULL,
    PRIMARY KEY(id_eleve),
    FOREIGN KEY(id_classe) REFERENCES classe_eleve(id_classe) ON DELETE CASCADE
); 
";     

$sql .= "CREATE TABLE IF NOT EXISTS gestion(
    id_gestion SERIAL,
    nom_gestion VARCHAR(50),
    prenom_gestion VARCHAR(50),
    email_gestion VARCHAR(50),
    password_gestion VARCHAR(50),
    poste_gestion VARCHAR(50),
    PRIMARY KEY(id_gestion)
);
";     

$sql .= "CREATE TABLE IF NOT EXISTS client(
    id_client SERIAL,
    nom_client VARCHAR(50),
    prenom_client VARCHAR(50),
    adresse_client VARCHAR(50),
    PRIMARY KEY(id_client)
);
";     

$sql .= "CREATE TABLE IF NOT EXISTS commande(
    id_commande SERIAL,
    prix_total_commande INT,
    id_client INT NOT NULL,
    id_eleve INT NOT NULL,
    PRIMARY KEY(id_commande),
    FOREIGN KEY(id_client) REFERENCES client(id_client) ON DELETE CASCADE,
    FOREIGN KEY(id_eleve) REFERENCES eleve(id_eleve) ON DELETE CASCADE
);
";     

$sql .= "CREATE TABLE IF NOT EXISTS produit_commande(
    id_produit_commande SERIAL,
    quantite_produit_commande INT,
    total_produit_commande INT,
    id_miel INT NOT NULL,
    id_commande INT NOT NULL,
    PRIMARY KEY(id_produit_commande),
    FOREIGN KEY(id_miel) REFERENCES miel(id_miel),
    FOREIGN KEY(id_commande) REFERENCES commande(id_commande) ON DELETE CASCADE
);
";     
pg_query($conn, $sql);
