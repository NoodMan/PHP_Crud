<?php

//pour la connexion a la bdd
require 'PDO.php';
//requete qui evite les doublons
$requete = "SELECT * FROM Groupes WHERE nom = '" .$_POST['nom']."'";


$req = $pdo->prepare($requete);
$req->execute();
$groupes = $req->fetch();

if(empty($groupes)){


$sql = "INSERT INTO groupes (nom) VALUES (?)";
$stmt=$pdo->prepare($sql);
$stmt->execute([$_POST['nom']]);

header("Location:Groupes.php");

}
else
{
    header('Location:ajoutG.php?error=exist');
}
