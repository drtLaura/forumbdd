<?php
session_start();
?>

<html>
<head><title>inscription</title></head>
<body bgcolor="EEEEEE" text="191970">
<?php 
if (isset($_SESSION['pseudo']) AND $_SESSION['pseudo']!="")
{
     echo 'vous etes déjà connecté !';

}
else {
echo '<h1 align="center"> Formulaire d\'inscription </h1>';
echo '<form action=" inscription2.php" method="POST">';
echo 'Veuillez remplir le formulaire suivant : <br/><br/>';
echo 'Pseudo  <input type = "text" name = "pseudo" size="15" /><br/><br/>';
echo 'Mot de passe  <input type="password" name="pass" size="10"/><br/><br/>';
echo 'Confirmation <input type="password" name="pass" size="10"/><br/><br/>';
echo 'Adresse e-mail <input type="text" name="mail" size="20"/><br/><br/>';

echo '<input type="submit" value ="S\'inscrire">';
echo '<input type="reset" value = "Effacer">';
echo '</form>';
}
?>
<a href="index.php">Retour à la page d'acceuil  </a>
</body>
</html>