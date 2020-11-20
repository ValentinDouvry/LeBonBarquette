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

    <div class="container" id="container-form-ajouter-plat">
        <form action="ajout_plat.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="inputNomPlat">Nom</label>
                <input type="text" class="form-control" id="inputNomPlat" name="inputNomPlat" required>
            </div>
            <div class="form-group">
                <label for="inputPrixPlat">Prix</label>
                <input type="text" class="form-control" id="inputPrixPlat" name="inputPrixPlat" required>
            </div>
            <div class="form-group">
                <label for="inputDescriptionPlat">Description</label>
                <input type="text" class="form-control" id="inputDescriptionPlat" name="inputDescriptionPlat" required>
            </div>
            <div class="form-group">
            <label for="inputImagePlat">Image:</label>
                <input type="file" name="inputImagePlat" id="inputImagePlat">
            </div>

            <!-- <form action="upload.php" method="post" enctype="multipart/form-data">
                <input type="file" name="fileToUpload" id="fileToUpload">
                <input type="submit" value="Upload Image" name="submit">
            </form> -->

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
    













    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>
