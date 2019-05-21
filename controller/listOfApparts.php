<?php
require_once("../model/mainModel.php");
require_once("../helper/authGuard.php");
$RQT_URL = $_SERVER['REQUEST_URI'];
session_start();
AuthGuard($RQT_URL);

//Si une recherche a été effectuée
$lobjVilles = GetCities();
if (isset($_POST) && count($_POST) > 0) {
    //On recherche un appartement selon une ville
    $search = SearchCity($_POST['city']);
    $lobjApparts = GetAppartsByCity($search->cpVille);

} else {
    //On affiche tous les appartements
    $lobjApparts = GetApparts();
}

//Si pas de recherche, on récupère les images de tous les appartements
$lobjApparts = GetApparts();
for($i = 0;$i < sizeof($lobjApparts);$i++){
    $lobjPicture = GetPictureFromHouse($lobjApparts[$i]->id_appartement);

}
require_once("../view/listOfApparts.view.php");
