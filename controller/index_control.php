<?php

session_start();
if (!isset($_SESSION["pseudo"]) AND !isset($_SESSION["id"])) {
  header('Location: inscription.php');
}

$title = 'Index';
$descript = 'Bienvenue sur mon site';


 ?>