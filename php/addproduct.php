



  <form action="addproduct_post.php" method="post" enctype="multipart/form-data">
    <div class="input-field ">


    <label for="titre"  >Titre</label>
    <input id="titre" type="text" name="titre" value="" required>
  </div>
    <div class="input-field ">
    <label for="accroche">Accroche</label>
    <input id="accroche" type="text" name="accroche" value="" required>
      </div>
      <div class="input-field ">
    <label for="prix">Prix</label>
    <input type="text" id="prix" name="prix" value="" required>
      </div>
      <div class="input-field ">
    <label for="desc">Desciption</label>
    <textarea class="materialize-textarea" id="desc" name="description" required></textarea>
      </div>

    <input id="image" type="file" name="image" required>
    <label for="image">Formats acceptés : JPG , PNG , SVG</label>

    <input type="submit" name="" value="Ajouter" class="btn lime">
    <p><?php echo $_SESSION['errorproduct']; ?></p>

  </form>
