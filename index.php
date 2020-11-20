<?php
include_once("connexion_bd.php");
include_once('Plat.php');

$requete = $db->query("SELECT * FROM plats");
$listePlats = $requete->fetchAll(PDO::FETCH_CLASS,"Plat");

$arrayListesPlats = array_chunk($listePlats, ceil(count($listePlats) / 3));



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
            <div class="col-auto align-self-center">
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
        <div class="container-fluid">
            <a class="btn btn-primary" href="ajouter_plat.php" role="button">Ajouter un plat</a>
        </div>
        <div class="container-fluid row justify-content-between">
            <div class="col">
                <h3>Liste des plats</h3>
            </div>         

            <div class="btn-group col">
                <button id="boutonPrecedent" type="button" class="btn btn-success"> < </button>
                <button id="boutonSuivant" type="button" class="btn btn-success"> > </button>
            </div>            
        </div>
        
        <section class="carousel slide" data-interval="false" id="carousel-plats">
            <div class="container pt-0 mt-2">
                <div class="row mt-0"> 
                    <div class="col-md-12">             
                        <div class="carousel-inner">                            
                                <?php
                                echo '<div class="card-deck carousel-item active flex-column flex-sm-row">';
                                foreach($arrayListesPlats[0] as $plat)
                                {
                                    echo '
                                        <div class="card carte-plat border-0">
                                            <div class="card-img-top card-img-top-250">
                                                <img src="images_plats/'.$plat->getImage().'" class="img-fluid">
                                            </div>                                        
                                            <div class="card-block pt-2">
                                                <h5 class="card-title">'.$plat->getNom().'</h5>
                                                <h5 class="card-title text-right">'.$plat->getPrix().'</h5>
                                                <a href="page_plat.php?plat='.$plat->getId().'" class="stretched-link"></a>
                                            </div>                    
                                        </div>';
                                }
                                echo '</div>';
                                echo '<div class="card-deck carousel-item flex-column flex-sm-row">';
                                foreach($arrayListesPlats[1] as $plat)
                                {
                                    echo '
                                        <div class="card carte-plat border-0">
                                            <div class="card-img-top card-img-top-250">
                                                <img src="images_plats/'.$plat->getImage().'" class="img-fluid">
                                            </div>                                        
                                            <div class="card-block pt-2">
                                                <h5 class="card-title">'.$plat->getNom().'</h5>
                                                <h5 class="card-title text-right">'.$plat->getPrix().'</h5>
                                                <a href="page_plat.php?plat='.$plat->getId().'" class="stretched-link"></a>
                                            </div>                    
                                        </div>';
                                }
                                echo '</div>';
                                echo '<div class="card-deck carousel-item flex-column flex-sm-row">';
                                foreach($arrayListesPlats[2] as $plat)
                                {
                                    echo '
                                        <div class="card carte-plat border-0">
                                            <div class="card-img-top card-img-top-250">
                                                <img src="images_plats/'.$plat->getImage().'" class="img-fluid">
                                            </div>                                        
                                            <div class="card-block pt-2">
                                                <h5 class="card-title">'.$plat->getNom().'</h5>
                                                <h5 class="card-title text-right">'.$plat->getPrix().'</h5>
                                                <a href="page_plat.php?plat='.$plat->getId().'" class="stretched-link"></a>
                                            </div>                    
                                        </div>';
                                }
                                echo '</div>';

                                ?>
                        </div>
                    </div>
                </div>           
            </div>
        </section>
        
    </div>

    
    



    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <script>

        $("#boutonPrecedent").click(function(){
            $("#carousel-plats").carousel("prev");
        });

        $("#boutonSuivant").click(function(){
            $("#carousel-plats").carousel("next");
        });

    </script>

  </body>
</html>
