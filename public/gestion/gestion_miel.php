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
                           $unencodedData = base64_decode($value);
                           $fp = fopen("image.png", "wb");
                           fwrite($fp, $unencodedData);
                           fclose($fp);
                           // affichage de l'image
                           echo '<img src="image.png" alt="Image">';
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
                           echo ("<td>" . $value . "</td>");
                           break;
                        case "description_apiculteur":

                           break;
                        default:
                           echo ("<td>" . $value . "</td>");
                           break;
                     }
                     //echo($champ);
                     echo ("<td>" . $value . "</td>");
                  }
                  echo ("</tr>");
               }
               echo ('</tbody>');
               echo ('</table>');
               echo ('</div>');
               echo ('</div>');
}


affichTable_apiculteur($table_apiculteur);
?>