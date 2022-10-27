<?php

//pour la connexion a la bdd
require 'PDO.php';



//requete qui permet d'aller chercher les enregistrements en bdd


//pour afficher le resultat en Json
/* 
echo '<pre>';
var_dump($groupes);
echo '</pre>';
*/
?>

<div class="body">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

<center>
    <br>
    <div class="col-2">
        <h1>Ajouter un groupe</h1>
        <br>

        <?php if (isset($_GET['error'])) {
        ?>
            <div class="alert alert-danger" role="alert">Une erreur est survenu, le groupe ajouté existe déjà ! 😬
            </div>
        <?php
        }
        ?>
        <form action="ajoutGREQ.php" method="post">

            <h3><label for="nom"> Saisir nouveau groupe</label></h3>
            <br>
            <input type="text" class="form-control" placeholder="" name="nom">
            <br>
            <button type="submit" class="btn btn-info"> Enregistrer</button>

        </form>
    </div>
    </div>
</center>
<style>
    body{
background-image: url("img/9332c3afc292846ded37437ef35be38d.jpg");

background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 50vh;
}
</style>
