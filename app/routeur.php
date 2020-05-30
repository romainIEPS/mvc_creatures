<?php
/*
  ./app/routeur.php
*/
// ROUTEUR PRINCIPAL DE L'APPLICATION


// ROUTE PAR DEFAUT
// PATTERN: /
// CTRL: pagesControleur
// ACTION: showAction
    include_once '../app/controleurs/pagesControleur.php';
    showAction($connexion);
