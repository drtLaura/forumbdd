<?php
session_start();
?>

<html>
<head><title>connexion</title></head>
<body bgcolor="EEEEEE" text="191970">
<?php 
if (isset($_SESSION['pseudo']) AND $_SESSION['pseudo']!="")
{
     echo 'vous etes déjà connecté !';

}
else {
echo ' <h1 align="center"> Connectez-vous </h1>';
echo '<form action ="connexion2.php" method="POST">';
echo 'Pseudo  <input type = "text" name = "pseudo" size="15" /><br/><br/>';
echo 'Mot de passe  <input type="password" name="pass" size="10"/>';
echo '<br/><br/>';
echo '<input type="submit" value ="envoyer">';
echo '<input type="reset" value = "annuler">';
echo '</form>';
}
?>

<a href="index.php">Retour à l'index </a>

</body>
</html>