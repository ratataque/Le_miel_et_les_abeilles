<?php
echo ("<pre>");
var_dump($_SESSION);
echo ("</pre>");
// echo ("<pre>");
// var_dump($_POST);
// echo ("</pre>");


$conn = pg_connect("host=db dbname=miel user=miel password=miel");
$sql = "table apiculteur;";
$table_apiculteur = pg_fetch_all(pg_query($conn, $sql));
$sql = "table miel;";
$table_miel = pg_fetch_all(pg_query($conn, $sql));


function affichTable_apiculteur($tableData)
{


   ?>

   <div class="row text-center  h3">
      <b style="margin-top:5vh;">Liste des Apiculteurs</b>
   </div>
   <div class="row">
      <div>
         <form>
            <table class="table table-striped table-dark h5">

               <thead class="thead-dark">
                  <tr>
                     <?php
                     foreach ($tableData as $ligne) {
                        if (next($tableData)) {
                        } else {
                           foreach ($ligne as $champ => $value) {
                              switch ($champ) {
                                 case "lien_photo_apiculteur":
                                    echo ("<th scope='col'>Logo de la Société</th>");
                                    break;
                                 case "nom_societe":
                                    echo ("<th scope='col'>Nom de la Société</th>");
                                    break;
                                 case "nom_apiculteur":
                                    echo ("<th scope='col'>Nom de l'apiculteur</th>");
                                    break;
                                 case "prenom_apiculteur":
                                    echo ("<th scope='col'>Prénom de l'apiculteur</th>");
                                    break;
                                 case "id_apiculteur":
                                    echo ("<th scope='col'>Nombre de miel</th>");
                                    break;
                                 case "description_apiculteur":
                                    echo ("<th scope='col'>Supprimer ?</th>");
                                    break;
                                 default:
                                    echo ("<th scope='col'>" . $champ . "</th>");
                                    break;
                              }
                           }
                        }
                     } ?>
                  </tr>
               </thead>

               <tbody>

                  <?php

                  echo ('<div class="row">');
                  foreach ($tableData as $ligne) {
                     echo ("<tr>");
                     foreach ($ligne as $champ => $value) {
                        switch ($champ) {
                           case "lien_photo_apiculteur":
                              echo ("<td>");
                              // affichage de l'image
                              echo ("<img class='show' src='data:image/png;base64, " . $value . "'>");
                              echo ("</td>");
                              break;
                           case "nom_societe":
                              echo ("<td>" . $value . "</td>");
                              break;
                           case "nom_apiculteur":
                              echo ("<td>" . $value . "</td>");
                              break;
                           case "prenom_apiculteur":
                              echo ("<td>" . $value . "</td>");
                              break;
                           case "id_apiculteur":
                              // echo ("<td>" . $value . "</td>");
                              $conn = pg_connect("host=db dbname=miel user=miel password=miel");
                              $sql = "select * from miel where id_apiculteur = " . intval($value) . ";";
                              $miel_api = pg_fetch_all(pg_query($conn, $sql));
                              echo ("<td>
                                    <div class ='text-center h2'>
                                       <a href='administration.php?content=detail_miel&id_apiculteur=" . $value . "'>" . count($miel_api) . "</a>
                                    </div>
                                 </td>");
                              break;
                           case "description_apiculteur":
                              echo('
                              <input type="checkbox" class="btn-check" id="btn-check-2-outlined" checked autocomplete="off">
                              <label class="btn btn-outline-secondary" for="btn-check-2-outlined">Checked</label>
                              ');

                              break;
                           default:
                              echo ("<td>" . $value . "</td>");
                              break;
                        }
                     }
                  echo ("</tr>");
                  }
               echo ('</tbody>');
            echo ('</table>');
            echo ('<div class="text-center">');
            echo ('<button class="btn btn-secondary btn-lg" type="submit" form="form_ajout_miel" value="Submit">Supprimer</button>');
            echo ('</div>');
            echo ('</form>');
      echo ('</div>');
   echo ('</div>');
}


affichTable_apiculteur($table_apiculteur);
?>