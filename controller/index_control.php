<?php

session_start();

if (isset($_COOKIE['pseudo']) AND isset($_COOKIE['id'])) {
  require('model/model_index.php');
  connect_on($_COOKIE['pseudo']);

  $_SESSION['id'] = $_COOKIE['id'];
  $_SESSION['pseudo'] = $_COOKIE['pseudo'];

} else if (!isset($_SESSION["pseudo"]) AND !isset($_SESSION["id"])) {
  header('Location: index.php?action=connexion');
}

$title = 'Index';
$descript = 'Bienvenue sur mon site';

require('view/index_view.php');

 ?>
