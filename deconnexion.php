<?php
session_start();
$_SESSION= array();
session_destroy();
?>

<html>
<body bgcolor="#EEEEEE"text="#191970"> 
Vous avez été deconnecter
<a href="index.php"> retour à l index</a>
</body>
</html>