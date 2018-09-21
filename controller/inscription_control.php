<?php
require('model/model.php');

  if (isset($_POST['pseudo']) AND isset($_POST['password']) AND isset($_POST['pass_retry']) AND isset($_POST['email'])) {

    if (empty($_POST['pseudo']) AND empty($_POST['password']) AND empty($_POST['pass_retry']) AND empty($_POST['email'])) {

      echo "Les champs ne sont pas toute remplis !";
    } else {

      $pseudo = strip_tags($_POST['pseudo']);
      $password = strip_tags($_POST['password']);
      $pass_retry= strip_tags($_POST['pass_retry']);
      $email = strip_tags($_POST['email']);
      $pass_hash = password_hash($password, PASSWORD_DEFAULT);

      //Come in model.php for research if id pseudo exist or not
      $search = check_pseudo($pseudo);


      if ($search['id'] == 0) {
        
        //Come in model.php for research if id email exist or not
        $search_email = check_email($email);

        if ($search_email['id'] == 0 AND preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']) == true) {
          if ($password == $pass_retry) {
            add_member($pseudo, $pass_hash, $email);
          } else {
            echo "mot de passe ne concorde pas !";
          }

        } else {
          echo "email déjà utilisé";
        }


      } else {

        echo  'pseudo déjà pris';
      }



    }
  } ?>
