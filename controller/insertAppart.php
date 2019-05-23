<?php
require_once ("../model/mainModel.php");
require_once ("../helper/authGuard.php");
$RQT_URL = $_SERVER['REQUEST_URI'];

session_start();

AuthGuard($RQT_URL);
if(isset($_SESSION)){
    if($_SESSION['id']){
        $userAppart = GetAppartByUser($_SESSION['id']);
    }
    if($userAppart != null){
        header('Location: /controller/listOfAppartsUser.php?error=3');
        
    }
}


if (isset($_POST) && count($_POST) > 0){
    $quartier = GetQuartierByCity($_POST['town'], $_POST['quartier']);


    if(strtolower($_POST['meuble']) == "oui"){
        $_POST['meuble'] = 1;
    }else{
        $_POST['meuble'] = 0;
    }

    if(strtolower($_POST['statut']) == "occupé"){
        $_POST['statut'] = 1;
    }else{
        $_POST['statut'] = 0;
    }



    $lboolOk = AddAppart( $_POST['prix'], $_POST['description'], $_POST['etat'], $_POST['nbPiece'], $_POST['surface'], $_POST['meuble'], $_POST['indEnergie'], $_POST['creation'], $_POST['expiration'], $_POST['message'], $_POST['statut'], $_SESSION['id'],$quartier->id_quartier , $_POST['town']);

    if ($lboolOk == true){
        header('Location: ../view/profil.php');
    }else{
        header('Location: insertAppart.php');
        echo("L'ajout n'a pas fonctionné");
    }
}

require_once ("../view/insertAppart.view.php");
