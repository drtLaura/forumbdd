<html>
<head>
<title>lecture d'un sujet</title>
</head>
<body bgcolor="#EEEEEE" text="#191970"> 
<h1 align="center">Lecture d'un sujet</h1>

<!--Le nom du sujet -->
<?php
$sujet = $_GET["sujet"];
echo "vous lisez le sujet n".$sujet."<br/>";
?>

<table width="90%" border="1" align="right"> 
    <tr><th width="20%">De </th><th width="70%">Texte</th></tr>
<?php  
For ($i = 1 ; $i < 16 ; $i++) { 
Echo '<tr><td align="center"> Auteur'.$i.'<br/> Date'.$i.'</td> <br/>  <td >Blablabla <br/>Blablabla <br/>Blablabla <br/> </td></tr>';
}
?>

<!--<tr><td align="center">Auteur 1<br/> Date 1 </td> <br/>  <td >Blablabla <br/>Blablabla <br/>Blablabla <br/> </td></tr>
<tr><td align="center">Auteur 2<br/> Date 2 </td> <br/>  <td >Blablabla <br/>Blablabla <br/>Blablabla <br/> </td></tr> 
<tr><td align="center">Auteur 3<br/> Date 3 </td> <br/>  <td >Blablabla <br/>Blablabla <br/>Blablabla <br/> </td></tr> -->
</table>

<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
Repondre - <a href="index.php">Revenir à l'index</a><br/><br/><br/>
<a href="ecriremessage.php?sujet='<?php echo $sujet;?>'"> Ajouter un nouveau message</a>

</body>

</html>