<?php
/*
  ./app/controleurs/pagesControleur.php
*/

namespace Controleurs\Pages;
use Modeles\Pages;


  function showAction(\PDO $connexion, int $id = 1) {
    // Je demande la page au modèle
      include_once '../app/modeles/pagesModele.php';
      $page = Pages\findOneById($connexion, $id);
    // et je charge la vue show dans $content
    GLOBAL $content;
    ob_start();
      include_once '../app/vues/pages/show.php';
    $content = ob_get_clean();
  }

  function menuAction(\PDO $connexion) {
    // Je demande les pages au modèle
      include_once '../app/modeles/pagesModele.php';
      $pages = Pages\findAll($connexion);
    // et je charge la vue menu directement
      include_once '../app/vues/pages/menu.php';
  }
