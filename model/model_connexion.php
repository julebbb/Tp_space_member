<?php

function check_password($pseudo) {

  require('config.php');

  $check = $db->prepare('SELECT id, password FROM member WHERE pseudo= :pseudo ');
  $check->execute( array(
    'pseudo' => $pseudo
  ));

  $result = $check->fetch();
  return $result;
}

function connect($pseudo) {

  require('config.php');

  $table = $db->prepare('UPDATE member SET connect = 1 WHERE pseudo = :pseudo');
  $result = $table->execute( array (
    'pseudo' => $pseudo
  ));
  return $result;
}


 ?>
