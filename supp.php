<?php

//pour la connexion a la bdd
require 'PDO.php';
//requete pour la suppression de data en bdd
$sql = "DELETE FROM Groupes WHERE id = ?";
$stmt=$pdo->prepare($sql);
$stmt->execute([$_GET['id']]);

header("Location:Groupes.php")

?>

