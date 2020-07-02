<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <?php
$panier= array(
array("T-shirt rouge",'15.50',"5"),
array("T-shirt vert",'15.50',"6"),
array("T-shirt argent",'15.50',"8"),
array("short bleu",'16.50',"5"),
array("short vert",'19.99',"5"),
array("Veste argent",'19.99',"10"),
array("Veste argent",'35',"3")
);
function calculer_total_panier($panier){
    $total = array_sum($panier)
    return array_sum($panier)
    foreach ($panier as $valeur => $total);
     
}
function afficher_panier($panier){
    echo "<p>$total</p>"
}



?>
</html>
