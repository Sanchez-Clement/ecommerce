



<?php

$bdd = new PDO('mysql:host=localhost;dbname=Produits;charset=utf8', 'root','root');

$bdd->exec("INSERT INTO informatique( description, name, accroche, source, prix)
 VALUES('Battlefield 1942', 'Patrick', 'PC', 'img/produit3.jpg', '50€' )");

 echo "vous avez ajouté produoit";
?>
