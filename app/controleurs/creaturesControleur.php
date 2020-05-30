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
