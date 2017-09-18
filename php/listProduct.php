

<<<<<<< HEAD

      <?php
// $bdd = new PDO('mysql:host=localhost;dbname=Produits;charset=utf8', 'root','root');
// $reponse = $bdd->query('SELECT * FROM informatique');
//
// while ($value = $reponse->fetch())
include "php/arrayProduct.php";
foreach ($produits as $key => $value)


=======
      <?php
$reponse = $bdd->query('
SELECT i.id id_article, i.name nom_article, i.accroche accroche_artcile, img.nom nom_image
FROM informatique i
INNER JOIN images img
ON i.id = img.id_produits

 ');
while ($value = $reponse->fetch())
>>>>>>> database
{
?>



    <section class="col s12 m6 l4">
      <div class="card">
        <div class="card-image">
          <img src="img/produits/<?php echo $value["nom_image"]?>">

          <form  action="index.php" method="post">
<<<<<<< HEAD
            <input type="hidden" name="nom" value="<?php echo $key?>">
=======
            <input type="hidden" name="id" value="<?php echo $value["id_article"]?>">
>>>>>>> database
            <button type="submit" class="btn-floating btn-large halfway-fab waves-effect waves-light light-blue darken-4" ><i   class="material-icons">add</i></button>
          </form>


        </div>

        <div class="card-content lime lighten-3">
          <h3 class="card-title"><?php echo $value["nom_article"]?></h3>
          <p><?php echo substr($value["accroche_artcile"], 0, 250) . "..."; ?></p>
        </div>
      </div>
    </section>



<?php
};
$reponse->closeCursor();
?>

<?php
// $reponse->closeCursor();
 // Termine le traitement de la requête
?>

<?php


// $reponse->closeCursor();
 // Termine le traitement de la requête

?>
