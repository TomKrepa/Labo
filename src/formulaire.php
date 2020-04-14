<?php
require 'functions/auth.php';
forcer_utilisateur_connecte();
?>

<link href="css/formulaire.css" rel="stylesheet">

<div class="wrapper fadeInDown">
  <div id="formContent">
    <form method="post">
        <h2>Ajouter une note</h2>
      <input type="text" class="fadeIn second" name="name" placeholder="Nom">
      <input type="text" class="fadeIn third" name="note" placeholder="Note">
      <input type="submit" name="envoyer" class="fadeIn fourth" value="Valider la note">
    </form>
  </div>
</div>

<?php 
//Connexion à la base
try{
  $login = 'root';
  $mdp = '';

  $db=new PDO('mysql:host=localhost;dbname=infra', $login, $mdp);

} catch(PDOException $e) {
  print "Erreur !: " . $e->getMessage() . "<br/>";
}

//Insertion de la note
if(isset($_POST['envoyer'])) 
{
  $name = $_POST['name'];
  $note = $_POST['note'];
  
  $insert = $db->prepare("INSERT INTO notes(nom, note) VALUES (?,?)");
  $insert->execute(array($name,$note));

  header('Location: ../src/index.php');
  
}
?>

