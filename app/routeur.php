<?php
/*
  ./app/routeur.php
*/
// ROUTEUR PRINCIPAL DE L'APPLICATION

// DETAIL D'UNE CREATURES
// PATTERN: /?creatureId=xx
// CTRL: creaturesControleur
// ACTION: showAction
  if (isset($_GET['creatureId'])):
    include_once '../app/controleurs/creaturesControleur.php';
    \Controleurs\Creatures\showAction($connexion, $_GET['creatureId']);

// DETAIL D'UNE PAGE
// PATTERN: /?pageId=xx
// CTRL: pagesControleur
// ACTION: showAction
  elseif (isset($_GET['pageId'])):
    include_once '../app/controleurs/pagesControleur.php';
    \Controleurs\Pages\showAction($connexion, $_GET['pageId']);


// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: pagesControleur
// ACTION: showAction
  else:
    include_once '../app/controleurs/pagesControleur.php';
    \Controleurs\Pages\showAction($connexion);
  endif;
