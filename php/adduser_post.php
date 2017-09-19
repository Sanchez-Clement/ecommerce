<?php
$userName = htmlspecialchars($_POST['userName']);
$userPassword = htmlspecialchars($_POST['userPassword']);

// ajoute le nouvel admin à la table administration 
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=Produits;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
$req = $bdd->prepare('INSERT INTO administration (pseudo, passwords) VALUES(:pseudo, :passwords)');
$req->execute(array(
'pseudo' => $userName,
'passwords' => sha1($userPassword)


));
header('Location: admin.php');
 ?>
