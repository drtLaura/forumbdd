<?php
session_start();
?>
<html>
<head><title>inscription</title></head>
<body bgcolor="EEEEEE" text="191970">
    
<?php
if (isset($_SESSION['pseudo']))
{
     echo 'vous etes déjà connecté !';

}
else 
{
if (!empty($_POST["pseudo"]) and !empty($_POST["pass"]) and !empty($_POST["mail"])) {
$pseudo = $_POST["pseudo"];
$pass = $_POST["pass"];
$mail = $_POST["mail"];
echo 'Le pseudo utilisé est '.$pseudo.', le mot de passe est '.$pass.' et l adresse e-mail est '.$mail.'.';
}
else {
die("Vous devez indiquer un nom d'utilisateur, un mot de passe et une adresse e-mail!");
}
}
?>

</body>
</html>