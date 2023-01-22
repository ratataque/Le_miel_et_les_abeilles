<?php
echo ("<pre>");
var_dump($_POST);
echo ("</pre>");





?>

<br>
<form action="/gestion/administration.php?content=ajout_apiculteur" method="post" id="form_ajout_apiculteur">
    <div class="container">
        <div class="row">
            <div class="col-2 text-center">

                <img id="preview-image" src="#" alt="Preview Image" width="150" height="200" />
                <input id="file-upload" type="file" accept="image/*" name="photo" onChange="readURL(this);" required />
            </div>
            <div class="col-9  row">
                <div class="col-2">
                </div>
                <div class=" col-8 text-center ">
                    <label for="nom_apiculteur">Nom de l'apiculteur</label>
                    <input type="text" class="form-control" placeholder="apiculteur de sapin" name="nom_apiculteur" required>

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
                    <label for="prix_apiculteur">prix €</label>
                    <input type="number" class="form-control" placeholder="15" name="prix_apiculteur" required>
                </div>
            </div>
            <div class="col-9  row">
                <div class="col-1">
                </div>
                <div class=" col-10 text-center ">
                    <label for="description_apiculteur">description du apiculteur</label>
                    <!-- <input type="text" class="form-control" placeholder="apiculteur de sapin" name="description_apiculteur" required> -->
                    <textarea class="form-control" id="description_apiculteur" name="description_apiculteur" rows="10" required></textarea>
                </div>
                <div class="col-1">
                </div>
            </div>
            <div class="col-1 ">

            </div>
        </div>

        <div class="row ">
            <div class="text-center">
                <button class="btn btn-secondary btn-lg" type="submit" form="form_ajout_apiculteur" value="Submit">Envoyer</button>
            </div>
        </div>

    </div>
</form>