<?php ob_start(); ?>
<main>
  <section>
    <h2>Inscription</h2>
    <form class="" action="index.php?action=inscription" method="post">

        <label for="pseudo">Pseudo</label>
        <input type="text" name="pseudo" value="Miaou">

        <label for="password">Mot de passe</label>
        <input type="password" name="password" value="debug">

        <label for="pass_retry">Retapez votre mot de passe</label>
        <input type="password" name="pass_retry" value="">

        <label for="email">Email </label>
        <input type="email" name="email" value="">

        <input type="submit" name="send" value="Envoyer">

    </form>

    <a href="index.php?action=connexion">Déja membre ? Se connecter</a>
  </section>
</main>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
