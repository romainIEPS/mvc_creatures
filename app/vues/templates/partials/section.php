<?php
/*
  ./app/vues/templates/partials/section.php
*/
?>
<section id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <?php echo $content; ?>
      </div>
      <div class="col-lg-4 mx-auto">
        <?php
          include_once '../app/controleurs/creaturesControleur.php';
          \Controleurs\Creatures\indexAction($connexion);
        ?>
      </div>
    </div>
  </div>
</section>
