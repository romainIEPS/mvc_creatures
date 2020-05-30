<?php
/*
  ../app/vues/pages/menu.php
  Liste des pages
  Variables disponible:
  $pages ARRAY(ARRAY(id, titre,...))
*/
?>

<ul class="navbar-nav">
  <?php foreach ($pages as $page): ?>
    <li class="nav-item active">
      <a class="nav-link" href="?pageId=<?php echo $page['id']; ?>"><?php echo $page['titre']; ?><span class="sr-only">(current)</span></a>
    </li>
  <?php endforeach; ?>
</ul>
