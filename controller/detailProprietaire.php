<?php
require_once("../model/mainModel.php");

session_start();

if (isset($_GET['idUser'])) {
    //Clic depuis la page de détail de l'appartement
    //Propriétaire de l'appartement
    $lobjProprio = GetUser($_GET['idUser']);

    //Obtention de l'appartement pour obtenir son prix
    $lobjAppart = GetAppartByUser($_GET['idUser']);


    //Obtention des informations de l'utilisateur connecté
    $lobjUserConnected = GetUser($_SESSION['id']);

}else{
    //Récupération après la demande
    //Propriétaire de l'appartement
    $lobjProprio = GetUser($_POST['idUser']);

//Obtention de l'appartement pour obtenir son prix
    $lobjAppart = GetAppartByUser($lobjProprio->id);

//Obtention des informations de l'utilisateur connecté
    $lobjUserConnected = GetUser($_SESSION['id']);

}


//if (isset($_GET['demande'])) {
//
//
//    //demande de location, il faut retirer les sous de l'appartement au solde de l'utilisateur si cela est possible
//    if($lobjProprio->id == $_SESSION['id']){
//        //L'utilisateur essaye de louer son propre appartement
//        echo("Vous ne pouvez pas être locataire de votre propre appartement ! ");
//    }else{
//        if ($lobjUserConnected->solde < $lobjAppart->prix) {
//            echo("Vous n'avez pas assez de jetons sur votre solde pour pouvoir effectuer cette demande");
//        } else {
//            //Retrait du solde de l'utilisateur connecté (solde utilisateur - prix logement)
//            $nouveauSolde = (intval($lobjUserConnected->solde)) - intval($lobjAppart->prix);
//
//            //Modification du solde de l'utilisateur connecté
//            $lboolOk = ChangeSolde($_SESSION['id'], $nouveauSolde);
//
//            if ($lboolOk == true) {
//                echo("La transaction a été effectuée. N'hésitez pas à contacter le propriétaire.");
//                //Transfert de l'argent sur le compte du propriétaire
//                $Ok = LockedMoney($lobjProprio->id, $nouveauSolde);
//            } else {
//                echo("Impossible d'effectuer la transaction. Veuillez contacter l'administrateur pour plus d'informations.");
//            }
//        }
//    }
//}

//Demande de location, il faut retirer le prix du logement au solde de l'utilisateur connecté
if(isset($_POST['demande'])){
    if($lobjProprio->id == $_SESSION['id']){
        echo("Vous ne pouvez pas être le locataire de votre appartement");
    }else{
        if($lobjUserConnected->solde < $lobjAppart->prix){
            echo("Vous n'avez pas assez de jetons pour louer le logement");
        }else{
            //L'utilisateur a assez de jeton, retrait du prix du logement à son solde
            $newSolde = intval($lobjUserConnected->solde) - intval($lobjAppart->prix);
            //Remplacer le solde par le nouveau montant
            $lboolOk = ChangeSolde($_SESSION['id'], $newSolde);
            if($lboolOk == true){
                //L'argent a bien été débité, il faut le créditer au propriétaire sur son attribut "Argent bloqué" dans la BDD
                echo("La transaction a été effectuée. N'hésitez pas à contacter le propriétaire");
                //On ajoute le montant à un éventuel solde déjà présent pour le propriétaire
                $lockedMoney = $lobjAppart->prix + $lobjProprio->lockedMoney;
                $lboolTest = LockedMoney($lobjProprio->id,$lockedMoney);
                header('Location:../controller/listOfApparts.php');
            }else{
                echo("Impossible d'effectuer la transaction");
            }
        }
    }
}

require_once("../view/detailProprietaire.view.php"); ?>