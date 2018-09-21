  <header>
    <?php if (isset($_SESSION['pseudo'])) { ?>
    <p>Hello <?php echo $_SESSION['pseudo'] ?> !</p>
    <?php } ?>

    <a href="deconnexion.php">Se déconnecter</a>
  </header>
