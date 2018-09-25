<?php

session_start();

if (!isset($_SESSION["pseudo"]) AND !isset($_SESSION["id"])) {
  header('Location: index.php?action=connexion');
}

$title = 'Index';
$descript = 'Bienvenue sur mon site';

require('view/index_view.php');

 ?>
