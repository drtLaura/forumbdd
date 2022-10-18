<html>
<head><title>ecriresujet</title></head>
<body bgcolor="EEEEEE" text="191970">
<?php
if (!empty($_POST["nom"]) and !empty($_POST["corps"])) {
$nom = $_POST["nom"];
$corps = $_POST["corps"];
echo 'Le nom est '.$nom.' et le message est '.$corps.'.';
}
else {
die("Vous devez indiquer un nom et un message !");
}
?>

</body>
</html>