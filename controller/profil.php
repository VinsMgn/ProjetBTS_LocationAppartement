<?php

require_once("../model/mainModel.php");
$INC_DIR = $_SERVER["DOCUMENT_ROOT"];
$RQT_URL = $_SERVER['REQUEST_URI'];

require_once("../helper/authGuard.php");

session_start();
AuthGuard($RQT_URL);

$QRY_STR = $_SERVER['QUERY_STRING'];

if ($QRY_STR == 'error=2') {
    echo("Vous n'êtes pas administrateur ! ");
}


$lobjUser = GetUser($_SESSION['id']);



require_once("../view/profil.view.php");

?>