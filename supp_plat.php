<?php
include_once("connexion_bd.php");

$id = $_POST["suppidplat"];
$db->query("DELETE FROM plats WHERE id='$id'");

header("Location: index.php");
?>