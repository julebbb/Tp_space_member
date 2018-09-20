<?php
  if (isset($_POST['pseudo']) AND isset($_POST['password']) AND isset($_POST['pass_retry']) AND isset($_POST['email'])) {
    if (empty($_POST['pseudo']) AND empty($_POST['password']) AND empty($_POST['pass_retry']) AND empty($_POST['email'])) {
      echo "Les champs ne sont pas toute remplis !";
    } else {
      $pseudo = strip_tags($_POST['pseudo']);
      $password = strip_tags($_POST['password']);
      $pass_retry= strip_tags($_POST['pass_retry']);
      $email = strip_tags($_POST['email']);
      $pass_hash = password_hash($password, PASSWORD_DEFAULT);

      $bdd = $db->prepare('SELECT id FROM member WHERE pseudo=?');
      $bdd->execute(array($pseudo));
      $search = $bdd->fetch();

      if ($search['id'] == 0) {
        $check_email = $db->prepare('SELECT id FROM member WHERE email=?');
        $check_email->execute(array($email));
        $search_email = $check_email->fetch();

        if ($search_email['id'] == 0 AND preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']) == true) {
          if ($password == $pass_retry) {
            $req = $db->prepare('INSERT INTO member(pseudo, password, email, date_entry)
                            VALUES(:pseudo, :password, :email, NOW())');

            $req->execute(array(
              'pseudo' => $pseudo,
              'password' => $pass_hash,
              'email' => $email
            ));
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
