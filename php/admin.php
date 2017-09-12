<?php include "infoSite.php"
?>

<!doctype html>

<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $title; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="../css/normalize.css">

        <link rel="stylesheet" href="../css/materialize.min.css">
        <link rel="stylesheet" href="../css/main.css">

<script src="https://use.fontawesome.com/88840399dd.js"></script>

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>


<?php
include "header.php";
$bdd = new PDO('mysql:host=localhost;dbname=Produits;charset=utf8', 'root', 'root');
$reponse = $bdd->query('SELECT * FROM administration');
while ($value = $reponse->fetch()) {
    if (!isset($_POST['password_user'])) {
        include "connexion.php";
    } elseif ($_POST['password_user'] =="") {
        include "connexion.php";
        echo "merci de renseigner un mot de passe";
    } elseif ($_POST['pseudo'] =="") {
        include "connexion.php";
        echo "merci de renseigner un pseudo";
    } elseif ($value['pseudo'] != $_POST['pseudo'] and $value['password'] != $_POST['password_user']) {
        include "connexion.php";
        echo "pseudo et mot de passe inconnu";
    } elseif ($value['pseudo'] != $_POST['pseudo']) {
        include "connexion.php";
        echo "pseudo inconnu";
    } elseif ($value['password'] != $_POST['password_user']) {
        include "connexion.php";
        echo "password inconnu";
    } else {
        var_dump($_POST['password_user']);
        var_dump($_POST['pseudo']);
    }
}
 ?>



<!-- <form class="" action="addProduct.php" method="post">
<input type="text" name="titre" value="">
<input type="text" name="accroche" value="">
<input type="text" name="descrption" value="">
<input type="text" name="prix" value="">
<input type="submit" name="" value="">
</form> -->



<?php
include "footer.php";
 ?>
 <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
 <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
 <script src="../js/plugins.js"></script>
 <script src="../js/main.js"></script>
 <script type="text/javascript" src="../js/materialize.min.js"></script>

 <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
 <script>
     (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
     function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
     e=o.createElement(i);r=o.getElementsByTagName(i)[0];
     e.src='https://www.google-analytics.com/analytics.js';
     r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
     ga('create','UA-XXXXX-X','auto');ga('send','pageview');
 </script>
 </body>
 </html>
