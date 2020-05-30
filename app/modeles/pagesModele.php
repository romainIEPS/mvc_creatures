<?php
/*
  ./app/modeles/pagesModele.php
*/

  function findOneById(PDO $connexion, int $id) {
    $sql = "SELECT *
            FROM pages
            WHERE id = :id;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(':id', $id, PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(PDO::FETCH_ASSOC);
  }
