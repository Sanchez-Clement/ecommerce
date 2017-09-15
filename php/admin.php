<?php
session_start();

 include "infoSite.php";
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



<header id="entete">


<nav class="lime">
  <div class="nav-wrapper">
    <a href="../index.php" class="brand-logo"><img src="../img/logo.png" alt="" id="logoimage"></a>

    <ul class="right hide-on-med-and-down">
      <li><a href=""><i class="material-icons">search</i></a></li>
      <li><a href=""><i class="material-icons">view_module</i></a></li>
      <li><a href="admin.php"><i class="material-icons">account_circle</i></a></li>
      <li><a href="logout.php" ><i class="material-icons">cancel</i></a></li>
    </ul>

  </div>
</nav>
</header>
<main class="row">


<?php


// verif post
//securise
// requete clause where pseudo mdp

// si reponse existe redirige





  if (isset($_SESSION["pseudo"])) {?>

<h6 class="col s12">  <?php   echo "Connecté en tant que  " . $_SESSION["pseudo"];?></h6>
  <section id="addproduct" class="col s12 m6">
    <?php include "addproduct.php" ?>
  </section>
  <section id="showproduct">
    <?php include "showproduct.php" ?>
  </section>
  <section id="adduser">
    <?php include "adduser.php" ?>
  </section>
  <?php
} else {
  $_SESSION['errorproduct'] =NULL;


    if (!isset($_POST['password_user'])) {
        include "connexion.php";
    } else {

      $pseudo = htmlspecialchars($_POST["pseudo"]);
      $passwords = sha1($_POST["password_user"]);

$bdd = new PDO('mysql:host=localhost;dbname=Produits;charset=utf8', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
$reponse = $bdd->prepare('SELECT pseudo, passwords FROM administration WHERE pseudo = :pseudo AND passwords = :passwords'  );
$reponse->execute(array(
'pseudo' => $pseudo ,
'passwords' => $passwords

));
$value = $reponse->fetch();

if (!$value) {
  include "connexion.php";
  echo "Connexion impossible";
}


    else {
    $_SESSION["pseudo"]= htmlspecialchars($_POST['pseudo']);


  header('Location: admin.php');
    }
    }
}


 ?>


</main>
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
