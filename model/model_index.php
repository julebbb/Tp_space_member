<?php

function connect_on($pseudo) {
  require('config.php');
  $table = $db->prepare('UPDATE member SET connect = 1 WHERE pseudo = :pseudo');
  $result = $table->execute(array(
    'pseudo' => $pseudo
  ));
}

 ?>
