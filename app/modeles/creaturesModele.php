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

  function findOneById(\PDO $connexion, int $id) {
    $sql = "SELECT *
            FROM creatures
            WHERE id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
  }
