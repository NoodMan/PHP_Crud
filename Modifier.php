<?php

//pour la connexion a la bdd
require 'PDO.php';

$requete = 'SELECT * FROM Groupes WHERE id='.$_GET['id'];

//requete qui permet d'aller chercher les enregistrements en bdd
$req = $pdo->prepare($requete);
$req->execute();
$groupes = $req->fetch();

//pour afficher le resultat en Json
/* 
echo '<pre>';
var_dump($groupes);
echo '</pre>';
*/
?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<center>
<br>
<h1>Modifier le groupe</h1>
<br>
<form action="modifierReq.php" method="post">

    <input type="hidden" name="id" id="id" class="form-control" placeholder="" value='<?php echo $groupes['id']?>'>

    <h3><label for="nom"> Saisir nouveau nom</label></h3>
    <br>
    <input type="text" value='<?php echo $groupes['nom']?>' name="nom" id="nom">

    <button type="submit" class="btn btn-info"> Enregistrer</button>
   
</form>


</center>


