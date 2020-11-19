<?php
include_once("connexion_bd.php");
include_once('Plat.php');

$requete = $db->query("SELECT * FROM plats");
$listePlats = $requete->fetchAll(PDO::FETCH_CLASS,"Plat");

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>LeBonBarquette</title>
  </head>
  <body>

    <div class="container-fluid">
        <div>LOGO</div>
        <button type="button" class="btn btn-success">Se connecter</button>
    </div>

    <div class="container-fluid">
        <div>BANNER</div>
    </div>

    <div class="container-fluid">
        <div>LINKS</div>
    </div>

    <div class="container-fluid">
        <div class="card-deck">
            <?php
            foreach($listePlats as $plat)
            {
                echo '
                <div class="card border-0" style=" width: 18rem;">
                    <img src="images_plats/pizzaTest.jpg" class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">'.$plat->getNom().'</h5>
                        <h5 class="card-title text-right">'.$plat->getPrix().'</h5>
                        <a href="page_plat.php?plat='.$plat->getId().'" class="stretched-link"></a>
                    </div>                    
                </div>';
            }
            ?>
            
        </div>
    </div>

    <div class="container-fluid">
        <a class="btn btn-primary" href="ajouter_plat.php" role="button">Ajouter un plat</a>
    </div>
    













    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>
