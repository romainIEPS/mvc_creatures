<?php
/*
  ./app/routeur.php
*/
// ROUTEUR PRINCIPAL DE L'APPLICATION

// DETAIL D'UNE PAGE
// PATTERN: /?pageId=xx
// CTRL: pagesControleur
// ACTION: showAction
  if (isset($_GET['pageId'])):
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
