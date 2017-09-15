


<div id="addproduct" class="blue">
  <form  action="addproduct_post.php" method="post" enctype="multipart/form-data">
    <label for="titre">Titre</label>
    <input id="titre" type="text" name="titre" value="" required>
    <label for="accroche">Accroche</label>
    <input id="accroche" type="text" name="accroche" value="" required>
    <label for="prix">Prix</label>
    <input type="text" id="prix" name="prix" value="" required>
    <label for="desc">Desciption</label>
    <textarea id="desc" name="description" required></textarea>
    <label for="image">Formats acceptés : </label>
    <input id="image" type="file" name="image" required>
    <input type="submit" name="" value="Ajouter">
    <p><?php echo $_SESSION['errorproduct']; ?></p>
    <?php var_dump($_SESSION['errorproduct']) ?>
  </form>
</div>
