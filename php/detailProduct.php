
<!-- jointure entre la table informatique et image -->
<?php

$resq = $bdd->prepare('
SELECT i.description description_article, i.name nom_article,  img.nom nom_image
FROM informatique i
INNER JOIN images img
ON i.id = img.id_produits
WHERE i.id = ?

 ');
$resq->execute([$_POST['id']]);
while ($donnes = $resq->fetch()) {

?>



<?php

 ?>

<section id="detail" class="col s12  m8">

    <h2 class="header"><?php  echo $donnes['nom_article'] ; ?></h2>
    <div class="card ">
      <div class="card-image">
        <img src="img/produits/<?php  echo $donnes['nom_image'] ; ?>">
      </div>

        <div class="card-content lime lighten-3">
          <p><?php  echo $donnes['description_article'] ; ?></p>
        </div>
        <div class="card-action">
          <a href="index.php">Home</a>

        </div>

    </div>


</section>
<?php };
// requete pour mettre à jour le nombre de vue +1
$req = $bdd->prepare('UPDATE informatique SET vue = vue + 1 WHERE id = :id');
$req->execute(array(
'id' => $_POST['id'],


));
$resq->closeCursor(); ?>
