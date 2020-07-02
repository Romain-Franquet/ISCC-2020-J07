<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <?php
$historique_commandes = array("5.49", "9.99", "5.49", "15.99", "25");
function afficher_commandes($historique_commandes){
foreach($historique_commandes as $value){

    echo "Une commande de $value euros a été reçus.". "<br/>";

}
echo "Le total des commandes est de". array_sum($historique_commandes)."<br/>";
}
afficher_commandes($historique_commandes)
?>
</html>