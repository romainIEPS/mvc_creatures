<?php
/*
  ./app/vues/pages/show.php
  Detail de la page
  Variable disponible:
  $page ARRAY(id, titre,...)
*/
?>
<h2><?php echo $page['titre']; ?></h2>
<div>
  <p><?php echo $page['texte']; ?></p>
</div>
