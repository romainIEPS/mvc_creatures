<?php
/*
  ./app/controleurs/xxxControleur.php
*/

  function showAction(PDO $connexion, int $id = 1) {
    // Je demande la page au modèle
      include_once '../app/modeles/pagesModele.php';
      $page = findOneById($connexion, $id);
    // et je charge la vue show dans $content
    GLOBAL $content;
    ob_start();
      include_once '../app/vues/pages/show.php';
    $content = ob_get_clean();
  }
