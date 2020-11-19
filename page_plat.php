<?php 
require 'connexion_bd.php';
include 'Plat.php';

if(isset($_POST['nplat']) && isset($_POST['prixplat']) && isset($_POST['descplat'])){
    $idplat = $_POST["idplat"];
    $modifnom = $_POST['nplat'];
    $modifprix = $_POST['prixplat'];
    $modifdesc = $_POST['descplat'];
    $db->query("UPDATE plats SET nom = '$modifnom', prix = '$modifprix', description = '$modifdesc' WHERE id = $idplat");
}

if(isset($_GET["plat"])){
    $id = $_GET["plat"];
$requete = $db->query("SELECT * from plats WHERE id = '$id'");
$requete->setFetchMode(PDO::FETCH_CLASS,'Plat');
$plat = $requete->fetch();
}else{
$id = $_POST["idplat"];
$requete = $db->query("SELECT * from plats WHERE id = '$id'");
$requete->setFetchMode(PDO::FETCH_CLASS,'Plat');
$plat = $requete->fetch();
}
?>
<html>
    <head>
        <title>Plat</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    </head>
    <body>
             
        <div class="container">
            <form action="page_plat.php" method="POST">
            <input id="idplat" name="idplat" type="hidden" value="<?php echo $plat->getId() ?>">
            <label for="nplat">Nom :</label>
            <input type="text" id="nplat" name="nplat" value="<?php echo $plat->getNom() ?>"><br>
            <label for="prixplat">Prix :</label>
            <input type="text" id="prixplat" name="prixplat" value="<?php echo $plat->getPrix() ?>"><br><br>
            <label for="descplat">Description :</label>
            <textarea id="story" name="story"
          rows="5" cols="33"><?php echo $plat->getDescription() ?>"</textarea><br><br>
           
                <button id= "modifier" type="submit" class="btn btn-outline-success">Modifier</button> &nbsp;
                <button type="button" class="btn btn-outline-danger">Supprimer</button></div>
        </form>
        </div>
    </body>
</html>





