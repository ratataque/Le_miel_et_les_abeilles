<?php
echo ("<pre>");
var_dump($_POST);
echo ("</pre>");
?>

<!-- vérification si creation_classe -->
<?php
if (isset($_POST["creation_classe"])) {
    echo ('
        <form action="/gestion/administration.php?content=creation_classe" id="creation_classe">
            <div class="row">
                <label for="nom_miel">Nom du miel</label>
                <input type="v" class="form-control" placeholder="Miel de sapin" name="nom_miel" required>
            <br>
            </div>
        </form>

');
}
?>
<!-- Verification si création niveau -->
<?php
if (isset($_POST["creation_niveau"])) {

}
?>

<div class="row">
    <div class="text-center">
        <br>
        <section>
            <div class="row">
                <h1>Outil pour la création de classe : </h1>
                <div class="col-6">
                    <h2>Créer une classe</h2>
                    <form action="/gestion/administration.php?content=creation_classe" id="creation_classe"
                        method="post">
                        <input hidden value=1 name="creation_classe" id="creation_classe">
                        <button type="submit" class="btn btn-outline-warning btn-lg" form="creation_classe"
                            value="Submit">Créer
                            nouvelle classe</button>
                    </form>
                </div>
                <div class="col-6">
                    <h2>Créer un niveau</h2>
                    <form action="/gestion/administration.php?content=creation_classe" id="creation_niveau"
                        method="post">
                        <input hidden value=1 name="creation_niveau" id="creation_niveau">
                        <button type="submit" class="btn btn-outline-warning btn-lg" form="creation_niveau"
                            value="Submit">Créer
                            Nouveau niveau</button>
                    </form>
                </div>
            </div>
        </section>
        <br>
        <section>
            <h1>Gestion des différentes classes : </h1>
            <h2>fdef</h2>
            <p>

            </p>

        </section>
    </div>
</div>
