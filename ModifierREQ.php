<?php

//pour la connexion a la bdd
require 'PDO.php';

//var_dump($_POST)

$sql = "UPDATE groupes Set nom=? WHERE id=?";
$stmt=$pdo->prepare($sql);
$stmt->execute([$_POST['nom'],$_POST['id']]);


?>