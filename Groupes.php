<?php

//pour la connexion a la bdd
require 'PDO.php';

//requete pour faire une recherche
$requete = 'SELECT * FROM Groupes WHERE 1=1';
if (!empty($_POST['nom'])) {
    $requete .= ' AND nom LIKE "%' . $_POST['nom'] . '%"';
    //attention ne pas oublier l'espace devant le and
}
//pour le classement par ordre ou dessordre 
if (isset($_GET['filterNom'])) {
    if (!empty($_GET['filterNom'])) {
        $requete .= 'ORDER BY nom asc';
    } else {
        $requete .= ' ORDER BY nom desc';
    }
}

//requete qui permet d'aller chercher les enregistrements en bdd
$req = $pdo->prepare($requete);
$req->execute();
$groupes = $req->fetchAll();

//pour afficher le resultat en Json
/* 
echo '<pre>';
var_dump($groupes);
echo '</pre>';
*/
?>

<link rel="stylesheet" href="">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


<div class="row">
    <div class="col-md-4 offset-md-2">
        <img class="img-fluid" src="/img/football-fond-grunge-ailes-silhouette_1048-2300.jpg.webp" alt>
    </div>

    <div class="col-md-4">
        <div class="text-block">
            <center>
                <h1>Liste des groupes</h1>
                <br>
            </center>

            <table class="table table-bordered border-dark align-middle text-center" border="1">
                <thead>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Action</th>
                </thead>
        </div>
    </div>

    <tbody>

</div>
</div>
</div>


<!-- Ligne a dupluquer avec la boucle -->
<?php
foreach ($groupes as $res) {

?>

    <tr>

        <td><?php echo $res['id'] ?></td>
        <td><?= $res['nom'] ?></td>
        <td>
            <a href="Modifier.php?id=<?php echo $res['id'] ?>"> <button type="button" class="btn btn-warning"> Modifier </button></a>

            <a href="/supp.php?id=<?php echo $res['id'] ?>" onclick="return confirm('?????? Etes vous sur ??????')">
                <button type="button" class="btn btn-danger">Supprimer</button></a>

        </td>


    </tr>
<?php
}
?>
</tbody>

</table>
<br>

<center>
    <a href="/ajoutG.php"><button type="button" class="btn btn-info">Ajouter un groupe</button></a>

    <br>
    <br>

    <form action="" method="post">

        <input type="text" value='' name="nom" placeholder="">

        <button type="submit" class="btn btn-success"> Rechercher</button>

    </form>
</center>

<style>
    .droite {

        float: right;

    }
</style>