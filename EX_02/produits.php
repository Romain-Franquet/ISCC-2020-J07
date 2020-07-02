<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <?php
$produits= array (
    "T-shirt rouge" => "15.50",
    "T-shirt vert" => "15.50",
    "T-shirt argent" => "16.50",
    "short bleu" => "19.99",
    "short vert" => "19.99",
    "short argent" => "35");

    function afficher_produits($produits){
    foreach ($produits as $cle => $valeur);
    echo "Produits: ". $cle . ", Prix : ". $valeur . "<br/ >\n";


}
    afficher_produits($produits)
?>
</html>
