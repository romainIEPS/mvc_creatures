<?php
/*
  ../app/vues/creatures/index.php
  Liste des créatures
  Variables disponible:
  $creatures ARRAY(ARRAY(id, titre,...))
*/
?>
<h2>Les Créatures</h2>
<ul>
  <?php foreach ($creatures as $creature): ?>
    <li>
      <a href="#"><?php echo $creature['nom']; ?></a>
    </li>
  <?php endforeach; ?>
</ul>
