<?php
session_start();
?>
<html>
<head><title>ecrire message</title></head>
<body bgcolor="EEEEEE" text="191970">

<?php
if (isset($_SESSION['pseudo']) AND $_SESSION['pseudo']!="") // elle existe et elle n'est pas vide
{ 
    if (!empty($_POST["message"]) AND !empty($_POST["sujet"])) {
        $message = $_POST["message"];
        $sujet = $_POST["sujet"];
        echo 'Le message est '.$message.' et le numero du sujet est '.$sujet;
         }
    else {
        die("Vous devez indiquer un message !");
        }
 }
else 
{ 
    echo 'vous devez être connecté pour pouvoir poster';
}
?>

<a href="index.php">Retour à l'index </a>
</body>
</html>