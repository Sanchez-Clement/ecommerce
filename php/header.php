<header id="entete">


<nav class="lime ">
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo"><img src="img/logo.png" alt="" id="logoimage"></a>
<a href="#" data-activates="mobile-demo" class="button-collapse" ><i class="material-icons">menu</i></a>
    <ul id="nav-mobile" class="right hide-on-med-and-down">
      <li><a href=""><i class="material-icons">search</i></a></li>
      <li><a href=""><i class="material-icons">view_module</i></a></li>

      <li><a href="php/admin.php"><i class="material-icons">account_circle</i></a></li>

      <?php if (isset($_SESSION['pseudo'])) { ?>
      <li><a href="php/logout.php" ><i class="material-icons">cancel</i></a></li>
      <?php } ?>
    </ul>
    <ul class="side-nav" id="mobile-demo">
      <li><a href=""><i class="material-icons">search</i></a></li>
      <li><a href=""><i class="material-icons">view_module</i></a></li>

      <li><a href="php/admin.php"><i class="material-icons">account_circle</i></a></li>
      <li><a href="php/logout.php" ><i class="material-icons">cancel</i></a></li>
    </ul>

  </div>
</nav>
</header>
