<?php


include "arrayProduct.php";
// echo $_POST['nom'];
$index_produit = $_POST['nom'];

 ?>
<section id="detail">
  <div class="col s12">
    <h2 class="header"><?php  echo $produits[$index_produit]['name'] ; ?></h2>
    <div class="card ">
      <div class="card-image">
        <img src="<?php  echo $produits[$index_produit]['source'] ; ?>">
      </div>

        <div class="card-content">
          <p><?php  echo $produits[$index_produit]['description'] ; ?></p>
        </div>
        <div class="card-action">
          <a href="index.php">Home</a>
        </div>

    </div>
  </div>

</section>
