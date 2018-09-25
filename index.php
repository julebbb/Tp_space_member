<?php
if (isset($_GET['action'])) {
  if ($_GET['action'] == "index") {

    require('controller/index_control.php');

  } elseif ($_GET['action'] == "inscription") {

    require('controller/inscription_control.php');

  } elseif ($_GET['action'] == "connexion") {

    require('controller/connexion_control.php');
  }

} else {
  require('controller/index_control.php');
}

?>
