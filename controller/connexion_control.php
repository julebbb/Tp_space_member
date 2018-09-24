<?php
require('model/model_connexion.php');
$title = 'Connexion';
$descript = 'Bienvenue sur mon site';

if (isset($_POST['pseudo']) AND isset($_POST['password'])) {

  if ( ! empty($_POST['pseudo']) AND empty( ! $_POST['password'])) {
    $pseudo = $_POST['pseudo'];
    $password = $_POST['password'];

    $result = check_password($pseudo);

    if (password_verify($_POST['password'], $result['password'])) {

      session_start();
      $_SESSION['id'] = $result['id'];
      $_SESSION['pseudo'] = $pseudo;
      header('Location: index.php');

      connect($pseudo);
    }

    else {
      echo "Identifiant ou mot de passe incorrect !";
    }

  }
}
?>
