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
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <title>LeBonBarquette</title>
  </head>
  <body>

    <div class="container-fluid">
        <div class="row justify-content-between">
            <img id="logo" src="img/Logo_Le_Bon_Barquette.png" class="col-auto mr-auto">
            <div class="col-auto">
                <button type="button" class="btn btn-success" style="border-radius: 40px;">Log in</button>
            </div>
        </div>
        
        
    </div>

    <div class="container-fluid header">
        <h2>Faites vous livrer chez vous, bien au chaud !</h2>
        <form class="row container">
            <div class="form-group col-4">
                <input type="text" class="form-control" id="inputNomPlat" name="inputNomPlat" required>
            </div>
            <div class="col-1">
                <button type="submit" class="btn btn-primary" style="border-radius: 40px;">Search</button>
            </div>            
        </form>
    </div>


    <div class="container-fluid">
        <div class="container-fluid row justify-content-between">
            <div class="col">
                <h3 class="col">Liste des plats</h3>
            </div>         

            <!-- <div class="btn-group col">
                <button onclick="scrollGauche()" type="button" class="btn btn-success"><</button>
                <button onclick="scrollDroite()" type="button" class="btn btn-success">></button>
            </div>  -->           
        </div>
        
        <div class="container-fluid ">
            <div class="plats-container row " id="plats-container">
                <?php
                foreach($listePlats as $plat)
                {
                    echo '
                    <div class="col-sm-4 col-md-3">
                        <div class="card card-block border-0" style=" width: 100%;">
                            <img src="images_plats/pizzaTest.jpg" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">'.$plat->getNom().'</h5>
                                <h5 class="card-title text-right">'.$plat->getPrix().'</h5>
                                <a href="page_plat.php?plat='.$plat->getId().'" class="stretched-link"></a>
                            </div>                    
                        </div>
                    </div>';
                }
                ?>            
            </div>
        </div>
        
    </div>

    <div class="container-fluid">
        <a class="btn btn-primary" href="ajouter_plat.php" role="button">Ajouter un plat</a>
    </div>
    



    <!-- <script>
        function scrollDroite() {
            var elmnt = document.getElementById("plats-container");
            elmnt.scrollLeft += 300;          
        }
        function scrollGauche() {
            var elmnt = document.getElementById("plats-container");
            elmnt.scrollLeft -= 300;          
        }


    </script> -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>
