<?php


function check_pseudo($pseudo) {
  
  require('config.php');

  $bdd = $db->prepare('SELECT id FROM member WHERE pseudo=?');
  $bdd->execute(array($pseudo));
  $search = $bdd->fetch();

  return $search;

}

function check_email($email) {

  require('config.php');

  $check_email = $db->prepare('SELECT id FROM member WHERE email=?');
  $check_email->execute(array($email));
  $search_email = $check_email->fetch();

  return $search_email;
}

function add_member($pseudo, $pass_hash, $email) {

  require('config.php');

  $req = $db->prepare('INSERT INTO member(pseudo, password, email, date_entry)
                  VALUES(:pseudo, :password, :email, NOW())');

  $req->execute(array(
    'pseudo' => $pseudo,
    'password' => $pass_hash,
    'email' => $email
  ));

  return $req;

}





 ?>
