<?php
include_once("connexion_bd.php");

$nom = $_GET["inputNomPlat"];
$prix = $_GET["inputPrixPlat"];
$description = $_GET["inputDescriptionPlat"];



$requete = $db->prepare("INSERT INTO plats (nom, prix, description) VALUES (:nom, :prix, :description)");
$requete->bindParam(":nom", $nom,PDO::PARAM_STR);
$requete->bindParam(":prix", $prix,PDO::PARAM_STR);
$requete->bindParam(":description", $description,PDO::PARAM_STR);
$requete->execute();

header("Location: index.php");

?>