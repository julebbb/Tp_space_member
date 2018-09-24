  <header>
    <?php if (isset($_SESSION['pseudo'])) { ?>
    <p>Hello <?php echo $_SESSION['pseudo'] ?> !</p>

    <a href="deconnexion.php">Se déconnecter</a>
    <?php } ?>

    <?php if (!isset($_SESSION['pseudo'])) {
      ?>

      <a href="connexion.php">Se connecter</a>
      <?php
    } ?>
  </header>
