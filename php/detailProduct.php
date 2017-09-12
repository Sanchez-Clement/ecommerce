<?php

$resq = $bdd->prepare('SELECT * FROM informatique WHERE id=?');
$resq->execute([$_POST['id']]);

while ($donnes = $resq->fetch()) {
//
//
//
// {

?>



<?php


// echo $_POST['nom'];
// $index_produit = $_POST['nom'];

 ?>

<section id="detail" class="col s12  m8">

    <h2 class="header"><?php  echo $donnes['name'] ; ?></h2>
    <div class="card ">
      <div class="card-image">
        <img src="<?php  echo $donnes['source'] ; ?>">
      </div>

        <div class="card-content lime lighten-3">
          <p><?php  echo $donnes['description'] ; ?></p>
        </div>
        <div class="card-action">
          <a href="index.php">Home</a>
          <a href="php/addProduct.php">Ajouter produit</a>
        </div>

    </div>


</section>
<?php }; ?>
