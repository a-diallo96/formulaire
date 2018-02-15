
<?php

$server="localhost";
$login="root";
$passwd="root";

$connec =new PDO('mysql:host='.$server.'; dbname=school;charset=utf8',$login,$passwd);

?>
<!DOCTYPE html>
<html>
<head>
	<title>page erreur</title>
	<meta charset="utf-8">
</head>
<body style="font-size: 30pt;background-color:  GhostWhite">
	<img src="erreur.jpg" style="margin-left: 20%;width: 60%"><br>
	<br>
	<?php
	echo "
   la connexion à la base de donnée n'a pas marché <br> 
   <br>
   l'utilisateur n'est pas enrégistrer  dans la base de donnée<br>
<br>
   Revoyez votre connexion à la base de donnée.
";
?>

</body>
</html>