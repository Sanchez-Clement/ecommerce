<?php
session_start();
$extension =["image/jpg","image/jpeg","image/png", "image/svg" ];
if (!in_array($_FILES['image']['type'], $extension)) {
  # code...


// if ($_FILES['image']['type'] != "image/jpg" AND $_FILES['image']['type'] != "image/jpeg" AND $_FILES['image']['type'] != "image/png" ) {

$_SESSION['errorproduct'] = "type de fichier non accepté";
header('Location: admin.php');
} elseif ($_FILES['image']['size'] >= 1000000 ) {
$_SESSION['errorproduct'] = "Poids > 1 MO";
header('Location: admin.php');
} else {
$_SESSION['errorproduct']=NULL;
$nom = htmlspecialchars($_POST['titre']);
$accroche = htmlspecialchars($_POST['accroche']);
$prix = htmlspecialchars($_POST['prix']);
$description= htmlspecialchars($_POST['description']);

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Produits;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

$req = $bdd->prepare('INSERT INTO informatique (description, name, accroche, prix,auteur) VALUES(:description, :name, :accroche, :prix, :auteur)');
$req->execute(array(
'description' => $description,
'name' => $nom,
'accroche' => $accroche ,
'prix' => $prix,
'auteur' => $_SESSION["pseudo"]

));
$idLastProduct = $bdd ->  lastInsertId();

$req = $bdd->prepare('INSERT INTO images (nom, id_produits, type, size) VALUES(:name, :id_produits, :type, :size)');
$req->execute(array(
'name' => $_FILES['image']['name'],
'id_produits' => $idLastProduct,
'type' => $_FILES['image']['type'] ,
'size' => $_FILES['image']['size']


));
$target_file = "../img/produits/" .$_FILES['image']['name'] ;

move_uploaded_file($_FILES['image']['tmp_name'],$target_file);
header('Location: admin.php');
}



 ?>
