<?php
/*
  ./app/vues/templates/partials/nav.php
*/
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
  <div class="container">
    <a class="navbar-brand js-scroll-trigger" href="#page-top">Vintage Sci-Fi Creatures</a>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <?php
        include_once '../app/controleurs/pagesControleur.php';
        menuAction($connexion);
      ?>
</div>
  </div>
</nav>
