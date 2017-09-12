

      <?php
$reponse = $bdd->query('SELECT * FROM informatique');
while ($value = $reponse->fetch())
{
?>



    <section class="col s12 m6 l4">
      <div class="card">
        <div class="card-image">
          <img src="<?php echo $value["source"]?>">

          <form  action="index.php" method="post">
            <input type="hidden" name="id" value="<?php echo $value["id"]?>">
            <button type="submit" class="btn-floating btn-large halfway-fab waves-effect waves-light light-blue darken-4" ><i   class="material-icons">add</i></button>
          </form>


        </div>

        <div class="card-content lime lighten-3">
          <h3 class="card-title"><?php echo $value["name"]?></h3>
          <p><?php echo substr($value["accroche"], 0, 250) . "..."; ?></p>
        </div>
      </div>
    </section>



<?php
}
?>

<?php
// $reponse->closeCursor();
 // Termine le traitement de la requête
?>
