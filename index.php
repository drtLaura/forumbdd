<?php
session_start();
?>
<html>
<head>
<title>Bienvenue sur mon super forum !</title>
<p align= "right">
<?php
if (isset($_SESSION['pseudo']) AND $_SESSION['pseudo']!="")
{
    $pseudo = $_SESSION['pseudo'];
    echo '<a href="deconnexion.php"> Deconnexion  <a/></br>';
    echo 'vous êtes connecté en tant que '.$pseudo;
}
else
{
    echo '<a href="inscription.php"> Inscription  </a> </br>';
    echo '<a href="connexion.php"> Connexion   </a>';
}
?>
</p>
</head>
<body bgcolor="#EEEEEE"text="#191970"> 
<h1 align="center"> Bienvenue sur mon super forum !</h1> 

<center><img src="forum.png" /></center>


<br/>
 Voici les sujets présents :<br/>

<table width="100%" border="1"> 
<tr><th width="20%">Auteur </th><th width="50%">Sujet </th><th>Date</th></tr>
<?php
For ($i = 1 ; $i < 11 ; $i++) { // on veut faire la boucle 10 fois
    Echo '<tr><td>' ; // début de la ligne + cellule 1
    Echo 'Auteur '.$i ; // ajout de Auteur x
   // Echo '</td><td><a href="liresujet.php">Sujet '.$i.'</a></td>' ; 
   Echo '</td><td><a href ="liresujet.php?sujet='.$i.'"> Sujet '.$i.'</a></td>';
   // cellule du centre avec le lien 
    Echo '<td>Date '.$i.'</td></tr>' ;
    }  
?>
<!--<tr><td>Auteur 1</td><td><a href="liresujet.php">Sujet 1</a></td><td>Date1</td></tr>
<tr><td>Auteur 2</td><td><a href="liresujet.php">Sujet 2</a></td><td>Date2</td></tr>
<tr><td>Auteur 3</td><td><a href="liresujet.php">Sujet 3</a></td><td>Date3</td></tr>-->
</table>


<br/>
<a href="ecriresujet.php">  Poster un nouveau sujet</a>

</body>
</html>