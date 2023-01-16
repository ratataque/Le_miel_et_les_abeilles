<?php
include "connection_sql.php";
$conn = connection_sql();



$sql = "CREATE TABLE IF NOT EXISTS apiculteur(
    id_apiculteur SERIAL,
    nom_societe VARCHAR(50),
    nom VARCHAR(50),
    prenom VARCHAR(50),
    PRIMARY KEY(id_apiculteur)
);
";

$sql .= "CREATE TABLE IF NOT EXISTS miel(
    id_miel SERIAL,
    nom_miel VARCHAR(50),
    origine_miel VARCHAR(50),
    prix_miel INT,
    id_apiculteur INT NOT NULL,
    PRIMARY KEY(id_miel),
    FOREIGN KEY(id_apiculteur) REFERENCES Apiculteur(id_apiculteur) ON DELETE CASCADE
);
";     

$sql .= "CREATE TABLE IF NOT EXISTS classe_eleve(
    id_classe SERIAL,
    nom_classe VARCHAR(50),
    PRIMARY KEY(id_classe)
);
";     

$sql .= "CREATE TABLE IF NOT EXISTS eleve(
    id_eleve SERIAL,
    nom_eleve VARCHAR(50),
    prenom_eleve VARCHAR(50),
    id_classe INT NOT NULL,
    PRIMARY KEY(id_eleve),
    FOREIGN KEY(id_classe) REFERENCES Classe_eleve(id_classe) ON DELETE CASCADE
); 
";     

$sql .= "CREATE TABLE IF NOT EXISTS gestion(
    id_gestion SERIAL,
    nom_gestion VARCHAR(50),
    prenom_gestion VARCHAR(50),
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
    FOREIGN KEY(id_client) REFERENCES Client(id_client),
    FOREIGN KEY(id_eleve) REFERENCES Eleve(id_eleve)
);
";     

$sql .= "CREATE TABLE IF NOT EXISTS produit_commande(
    id_produit_commande SERIAL,
    quantite_produit_commande INT,
    total_produit_commande INT,
    id_miel INT NOT NULL,
    id_commande INT NOT NULL,
    PRIMARY KEY(id_produit_commande),
    FOREIGN KEY(id_miel) REFERENCES Miel(id_miel),
    FOREIGN KEY(id_commande) REFERENCES Commande(id_commande)
);
";     
pg_query($conn, $sql);
