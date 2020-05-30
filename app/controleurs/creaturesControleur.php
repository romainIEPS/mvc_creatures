<?php
/*
  ./app/controleurs/creaturesControleur.php
*/

namespace Controleurs\Creatures;
use Modeles\Creatures;

  function indexAction(\PDO $connexion) {
    // Je demande la liste des créatures au modèle
      include_once '../app/modeles/creaturesModele.php';
      $creatures = Creatures\findAll($connexion);
    // Je charge la vue index directement
      include_once '../app/vues/creatures/index.php';
  }

  function showAction(\PDO $connexion, int $id) {
    // Je demande le détail d'une créature au modèle
      include_once '../app/modeles/creaturesModele.php';
      $creature = Creatures\findOneById($connexion, $id);
    // Je charge la vue show dans $content
      GLOBAL $content;
      ob_start();
        include_once '../app/vues/creatures/show.php';
      $content = ob_get_clean();
  }
