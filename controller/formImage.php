<?php
require_once("../model/mainModel.php");
require_once("../helper/authGuard.php");

session_start();

//On récupère l'appartement de l'utilisateur connecté
$lobjHouse = GetAppartByUser($_SESSION["id"]);

//Envoie du formulaire passé
if($_POST){
    if ($_FILES["namePicture"]['error'] > 0) {
        //Erreur
        $resultat = -1;
    } else if ($_FILES["namePicture"]['size'] > 409600 ) {
        //Taille trop grande
        $resultat = -2;
    }else{
        $resultat = 1;
    }

//Tableau des extensions acceptées
    $extensions_valides = array('jpg', 'jpeg', 'gif', 'png');
    $extensionUploaded = strtolower(substr(strrchr($_FILES['namePicture']['name'], '.'), 1));
    if(!in_array($extensionUploaded, $extensions_valides)) {
        //Extension pas dans le tableau
        $resultat = -3;

    }else{
        //Extension dans le tableau
        $resultat = 1;
    }


//Récupération l'image de l'appartement
    $lobjPicture = GetPictureFromHouse($lobjHouse->id_appartement);

//On donne un id unique pour l'image avec uniqid
    $newId = uniqid();


// Si tout s'et bien passé
    //Enregistrement sur disk
    if ($resultat == 1) {
        // On stock sur le disque
        //Le nom commencera par f
        $fileName = "f" . $_SESSION["id"] . $newId . "." . $extensionUploaded;
        $fullPathName = "..".DIRECTORY_SEPARATOR ."assets". DIRECTORY_SEPARATOR . "img" . DIRECTORY_SEPARATOR . $fileName;
        // $fullPathName = "/images/f71.jpeg"

        $serverDirectory = __DIR__;
        // Exemple de répertoire: /home/epsi/PHPMySQL/cours-fichiers/pages
        $index = strrpos($serverDirectory, DIRECTORY_SEPARATOR);
        $serverDirectory = substr($serverDirectory, 0, $index + 1);
        // Exemple de résultat: /home/epsi/PHPMySQL/cours-fichiers
        $fullPathName = "assets". DIRECTORY_SEPARATOR . "img" . DIRECTORY_SEPARATOR . $fileName;
        // La copie
        $copied = move_uploaded_file($_FILES['namePicture']['tmp_name'], $serverDirectory . $fullPathName);
    }
    //L'enregistrement sur disk s'est bien passé, on enregistre sur la base
    if($copied){
        $resultat = InsertPicture($fullPathName,$lobjHouse->id_appartement,$_SESSION["id"]);
    }

}
 require_once("../view/formImage.view.php");

?>