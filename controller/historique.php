<?php

require_once ("../model/mainModel.php");
require_once ("../helper/authGuard.php");

session_start();


//Fonction pour afficher l'historique grâce à la procédure stockée
$lobjHisto = HistoriqueUser($_SESSION['id']);

//var_dump($lobjHisto);


//for($i=0 ; $i< sizeof($lobjHisto);$i++){
//    $arrayresult =  $lobjHisto[$i];
//    for($j = 0; $j<15;$j++){
//        var_dump($arrayresult[$j]);
//    }
//
////    var_dump($arrayresult);
//}



//var_dump($lobjHisto);
//var_dump($_SESSION['id']);



require_once ("../view/historique.view.php");