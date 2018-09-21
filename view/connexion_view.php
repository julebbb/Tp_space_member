<?php ob_start(); ?>

<main>
  <section>
    <form class="" action="connexion.php" method="post">
      <label for="pseudo">Pseudo</label>
      <input type="text" name="pseudo" value="Miaou">

      <label for="password">Mot de passe</label>
      <input type="password" name="password" value="debug">

      <input type="checkbox" name="connexion_auto" value="">

      <input type="submit" name="send" value="Envoyer">
    </form>
  </section>
</main>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
