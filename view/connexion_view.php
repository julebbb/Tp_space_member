<?php ob_start(); ?>

<main>
  <section>
    <h2>Se connecter</h2>
    
    <form class="" action="index.php?action=connexion" method="post">
      <label for="pseudo">Pseudo</label>
      <input type="text" name="pseudo" value="">

      <label for="password">Mot de passe</label>
      <input type="password" name="password" value="">

      <label for="connexion_auto">Connexion auto</label>
      <input type="checkbox" name="connexion_auto" value="yes">

      <input type="submit" name="send" value="Envoyer">
    </form>

    <a href="index.php?action=inscription">Vous n'êtes pas membre ? Inscrivez vous !</a>
  </section>
</main>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
