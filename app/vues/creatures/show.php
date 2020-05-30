<?php
/*
  ../app/vues/creatures/show.php
  Détail d'une créature
  Variables disponible:
  $creature ARRAY(id, nom,...)
*/
?>
<h1><?php echo $creature['nom']; ?></h1>
<figure>
  <img src="images/<?php echo $creature['image']; ?>" alt="<?php echo $creature['nom']; ?>">
  <figcaption><?php echo $creature['slug']; ?></figcaption>
</figure>
<div><?php echo $creature['texteLead']; ?></div>
<div><?php echo $creature['texteSuite']; ?></div>
