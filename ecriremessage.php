<?php
session_start();
?>

<html>
<head>
<title>Ecrire un message</title>
</head>
<body bgcolor="#EEEEEE"text="#191970">

<?php
if (isset($_SESSION['pseudo']) AND $_SESSION['pseudo']!="") // elle existe et elle n'est pas vide
{ 
echo'<h1 align="center"> Ecrire un nouveau message </h1>';
echo'vous écrivez un message pour le sujet n'.$sujet = $_GET["sujet"]; $sujet;
echo'<form action ="ecriremessage2.php" method="POST">';
echo'Message <textarea name="message" rows="5" cols="30"></textarea> <br/><br/>';
echo'<input type= "hidden" value ="'.$sujet.'" name = "sujet"/>';
echo'<input type="submit" value ="ok">';
echo'<input type="reset" value = "annuler">';
echo'</form>';
}
else 
{ 
    echo 'Vous devez être connecté pour pouvoir poster !';
}
?>
<a href="liresujet.php?sujet='<?php echo $sujet; ?>'"> Retour à lire le sujet </a>

<a href="index.php">Retour à l'index </a>

</body>
</html>