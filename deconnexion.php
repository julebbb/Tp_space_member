<?php
require('config.php');
session_start();

$table = $db->prepare('UPDATE member SET connect = 0 WHERE pseudo = :pseudo');
$result = $table->execute( array (
  'pseudo' => $_SESSION['pseudo']
));


$_SESSION = array();
session_destroy();

header('Location: index.php');




 ?>
