<?php
/*
  ./app/modeles/creaturesModele.php
*/

namespace Modeles\Creatures;

  function findAll(\PDO $connexion) {
    $sql = "SELECT *
            FROM creatures
            ORDER BY nom ASC
            LIMIT 5;";
    $rs = $connexion->query($sql);
    return $rs->fetchALL(\PDO::FETCH_ASSOC);
  }
