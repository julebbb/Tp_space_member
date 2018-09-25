<?php
require('config.php');
session_start();

$table = $db->prepare('UPDATE member SET connect = 0 WHERE pseudo = :pseudo');
$result = $table->execute( array (
  'pseudo' => $_SESSION['pseudo']
));

setcookie('pseudo', '', time(), null, null, false, true);
setcookie('id', '', time(), null, null, false, true);

$_SESSION = array();
session_destroy();

header('Location: index.php');




 ?>
