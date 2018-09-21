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


 ?>
