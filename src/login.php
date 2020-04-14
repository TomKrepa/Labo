<?php
$erreur = null;
if (!empty($_POST['pseudo']) && !empty($_POST['motdepasse'])) {
    if ($_POST['pseudo'] === 'admin' && $_POST['motdepasse'] === 'ydays') {
        session_start();
        $_SESSION['connecte'] = 1;
        header('Location: ../src/formulaire.php');
        exit();
    } else {
        $erreur = "Identifiants incorrects";
    }
}

require_once 'functions/auth.php';
if (est_connecte()) {
    header('Location: ../src/formulaire.php');
    exit();
}
?>

<?php if ($erreur): ?>
<div class="alert alert-danger">
    <?= $erreur ?>
</div>
<?php endif ?>

<link href="css/formulaire.css" rel="stylesheet">

<div class="alert"><p>Pour pouvoir ajouter une note, vous devez vous connecter</p></div>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <form method="post">
        <h2>Connexion</h2>
      <input type="text" class="fadeIn second" name="pseudo" placeholder="Identifiant">
      <input type="text" class="fadeIn third" name="motdepasse" placeholder="Mot de passe">
      <input type="submit" name="envoyer" class="fadeIn fourth" value="Se connecter">
    </form>
  </div>
</div>

<?php 
require_once 'footer.php';
?>