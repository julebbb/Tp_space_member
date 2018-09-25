<?php

require('model/model_connexion.php');
$title = 'Connexion';
$descript = 'Bienvenue sur mon site';

//View connexion
require('view/connexion_view.php');

if (isset($_COOKIE['pseudo']) AND isset($_COOKIE['password'])) {

  $check = check_password($_COOKIE['pseudo']);

  if ($_COOKIE['password'] == $check['password']) {
    session_start();
    $_SESSION['id'] = $check['id'];
    $_SESSION['pseudo'] = $_COOKIE['pseudo'];
    header('Location: index.php');

  } 


}


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

      if (isset($_POST['connexion_auto'])) {
        echo $_POST['connexion_auto'];
      }
      setcookie('password', $result['password'], time() + 365*24*3600, null, null, false, true);
      setcookie('pseudo', $pseudo, time() + 365*24*3600, null, null, false, true);

      connect($pseudo);
    }

    else {
      echo "Identifiant ou mot de passe incorrect !";
    }

  }
}

?>
