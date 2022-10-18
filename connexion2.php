<?php
session_start();
?>

<html>
<head><title>connexion</title></head>
<body bgcolor="EEEEEE" text="191970">
<?php

if (!empty($_POST["pseudo"]) and !empty($_POST["pass"])) {
$pseudo = $_POST["pseudo"];
$pass = $_POST["pass"];
echo 'Le pseudo utilisé est '.$pseudo.' et le mot de passe'.$pass.'.';
$_SESSION["pseudo"] = $pseudo;
}
else {
die("Vous devez indiquer un nom d'utilisateur et un mot de passe !");
}
?>
</br>
</br>
<a href="index.php">Retour à l'index </a>
</body>
</html>