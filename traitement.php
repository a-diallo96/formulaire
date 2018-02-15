

<?php
try{

$server="localhost";
$login="root";
$passwd="root";

$connec =new PDO('mysql:host='.$server.'; dbname=school;charset=utf8',$login,$passwd);}

catch (Exception $e)
{       
        header('Location:erreur.php');
       

}
 $requete=$connec->prepare('INSERT INTO eleve(PRENOM,NOM,VILLE,ADRESSE,CODE)
            VALUES(?,?,?,?,?)');

$requete->execute(array(
      $_POST['prenom'],
            $_POST['nom'],
            $_POST['ville'],
          $_POST['adresse'],
           $_POST['code']
          ));


header('Location: affiche.php');

?>