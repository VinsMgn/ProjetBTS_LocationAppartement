<?php
require_once("../model/mainModel.php");
require_once("../helper/authGuard.php");

session_start();

//Il faut retirer l'argent du demandeur (l'utilisateur connecté pour l'ajouter au bénéficiaire de l'appartement)

if(isset($_POST) && count($_POST)>0){
    var_dump($lobjAppart);
    $lboolOk = RemoveMoney($_SESSION['id'],$lobjAppart->prix);
}