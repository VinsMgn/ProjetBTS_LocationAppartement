<?php
require_once ("../../model/mainModel.php");

require_once ("../../helper/authGuard.php");


$RQT_URL = $_SERVER['REQUEST_URI'];
session_start();
AuthGuard($RQT_URL);

if(isset($_POST) && count($_POST) > 0){
    //Insertion de l'utilisateur
    $lboolOk = InsertUser( $_POST['name'],$_POST['firstname'],$_POST['adress'], $_POST['phone'], $_POST['mail'],$_POST['country'],$_POST['solde'],$_POST['password'],$_POST['type'], $_POST['isAdmin']);


    if ($lboolOk == true){
        //l'inscription s'est bien passée
        echo("L'inscription s'est bien effectuée");
    }else{
        //Erreur à l'inscription
        echo ("Echec de l'inscription");
    }
}




require ("../../view/insertUserAdmin.view.php");