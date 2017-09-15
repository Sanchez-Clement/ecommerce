<?php
session_start();



if ($_FILES['image']['type'] != "image/jpg" AND $_FILES['image']['type'] != "image/jpeg" AND $_FILES['image']['type'] != "image/png" ) {

$_SESSION['errorproduct'] = "type de fichier non accepté";
header('Location: admin.php');
} elseif ($_FILES['image']['size'] >= 1000000 ) {
$_SESSION['errorproduct'] = "Poids > 1 MO";
header('Location: admin.php');
}
 ?>
