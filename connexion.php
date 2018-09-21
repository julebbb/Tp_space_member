<?php

require('config.php');

if (isset($_POST['pseudo']) AND isset($_POST['password'])) {

  if ( ! empty($_POST['pseudo']) AND empty( ! $_POST['password'])) {
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];


    $check = $db->prepare('SELECT id, password FROM member WHERE pseudo= :pseudo ');
    $check->execute( array(
      'pseudo' => $pseudo
    ));

    $result = $check->fetch();

    if (password_verify($_POST['password'], $result['password'])) {

      session_start();
      $_SESSION['id'] = $result['id'];
      $_SESSION['pseudo'] = $pseudo;
      header('Location: index.php');
    }

    else {
      echo "Identifiant ou mot de passe incorrect !";
    }

  }
}
 ?>

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
