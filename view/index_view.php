<?php ob_start(); ?>
<h2>Bienvenue sur le site <?php echo $_SESSION['pseudo']; ?> !</h2>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
