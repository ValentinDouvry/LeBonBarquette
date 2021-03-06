<?php
include_once("connexion_bd.php");

$target_dir = "images_plats/";
$target_file = $target_dir . basename($_FILES["inputImagePlat"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["inputImagePlat"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["inputImagePlat"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["inputImagePlat"]["tmp_name"], $target_file)) {
    $nom = $_POST["inputNomPlat"];
    $prix = $_POST["inputPrixPlat"];
    $description = $_POST["inputDescriptionPlat"];
    $image = $_FILES['inputImagePlat']['name'];




    $requete = $db->prepare("INSERT INTO plats (nom, prix, description, image) VALUES (:nom, :prix, :description, :image)");
    $requete->bindParam(":nom", $nom,PDO::PARAM_STR);
    $requete->bindParam(":prix", $prix,PDO::PARAM_STR);
    $requete->bindParam(":description", $description,PDO::PARAM_STR);
    $requete->bindParam(":image", $image,PDO::PARAM_STR);
    $requete->execute();

    header("Location: index.php");
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}



?>


