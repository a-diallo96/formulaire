<!DOCTYPE html>
<html lang="en">
<head>
  <title>FORMULAIRE</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style="font-family: trebuchet ms ,sans-serif; margin-left: 15%; background:  	rgb(0,191,255)">

<div class="container">
  
  <form method="POST" action="traitement.php" style="width: 80%; background-color:#FAFAFA;padding:10px ">
 
  	<p ><img src="form.png" width="15%"><h2 style="color:#DF3F3F;font-weight:bold;margin-left: 15%;margin-top: -10%">Entrez Vos information s'il vous plait</h2></p>
  	<fieldset class="container-fluid" style="margin-top: 5%;font-size: 16pt">
    <div class="form-group" style="width: 70%">
      <label for="nom" style="color:#DF3F3F;font-weight:bold">Nom:</label>
      <input type="text" class="form-control" id="nom" placeholder="Entrez votre Nom" name="nom">
    </div>
    <div class="form-group" style="width: 70%">
      <label for="prenom" style="color:#DF3F3F; font-weight:bold">Prenom</label>
      <input type="text" class="form-control" id="prenom" placeholder="Enter votre prenom" name="prenom">
    </div>
    <div class="form-group" style="width: 70%">
      <label for="Adresse" style="color:#DF3F3F; font-weight:bold">Adresse</label><input type="text" class="form-control" placeholder="Enter votre Adresse"id ="Adresse" name="adresse">
    </div>
    <div class="form-group" style="width: 70%">
      <label for="VILLE" style="color:#DF3F3F;font-weight:bold">Ville</label><input type="text" class="form-control"   placeholder="Enter votre ville" id ="VILLE" name="ville">
    </div>
    <div class="form-group" style="width: 70%">
      <label for="CODE" style="color:#DF3F3F;font-weight:bold">Code</label><input type="text" class="form-control" id ="CODE"  placeholder="Enter votre code" name="code">
    </div>
   <input type="submit" name="" value="Valider">
</fieldset>
</div>

</body>
</html>



</html>
