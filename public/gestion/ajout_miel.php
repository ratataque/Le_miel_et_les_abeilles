<?php
echo ("<pre>");
var_dump($_POST);
echo ("</pre>");





?>

<br>
<form action="/gestion/administration.php?content=ajout_miel" method="post" id="form_ajout_miel">
    <div class="container">
        <div class="row">
            <div class="col-3 text-center text-sm ">
                <img id="preview-image" src="#" alt="Preview Image" width="150" height="200" />


                <input id="file-upload" type="file" accept="image/*" class="btn-sm" name="photo" onChange="readURL(this);" required />
            </div>
            <div class="col-8  row">
                <div class="col-2">
                </div>
                <div class=" col-8 text-center ">
                    <label for="nom_miel">Nom du miel</label>
                    <input type="text" class="form-control" placeholder="Miel de sapin" name="nom_miel" required>
                    <br>
                    <label for="apiculteur">provient de l'apiculteur: </label>
                    <select class="form-control" id="" name="apiculteur">
                        <option disabled selected value>-- Apiculteur -- </option>
                        <?php
                        $conn = pg_connect("host=db dbname=miel user=miel password=miel");
                        $requete_apiculteur = "SELECT * FROM apiculteur;";
                        $table_apiculteur = pg_fetch_all(pg_query($conn, $requete_apiculteur));
                        foreach ($table_apiculteur as $champ => $data) {
                            echo ("<option>" . $data['nom_societe'] . "</option>");
                        }
                        ?>
                    </select>
                </div>
                <div class="col-2">
                </div>
            </div>
            <div class="col-1 ">

            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-2  row">
                <div class="text-center ">
                    <label for="prix_miel">prix €</label>
                    <input type="number" class="form-control" placeholder="15" name="prix_miel" required>
                </div>
            </div>
            <div class="col-9  row">
                <div class="col-1">
                </div>
                <div class=" col-10 text-center ">
                    <label for="description_miel">description du miel</label>
                    <!-- <input type="text" class="form-control" placeholder="Miel de sapin" name="description_miel" required> -->
                    <textarea class="form-control" id="description_miel" name="description_miel" rows="10" required></textarea>
                </div>
                <div class="col-1">
                </div>
            </div>
            <div class="col-1 ">

            </div>
        </div>

        <div class="row ">
            <div class="text-center">
                <button class="btn btn-secondary btn-lg" type="submit" form="form_ajout_miel" value="Submit">Envoyer</button>
            </div>
        </div>

    </div>
</form>