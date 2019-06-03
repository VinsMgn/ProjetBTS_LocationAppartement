<?php
session_start();

require_once ('../model/mainModel.php');
require_once ('../helper/authGuard.php');

if(isset($_POST) && count($_POST)>0){
    $lboolOk = AddMoney($_SESSION['id'], $_POST['token']);

    if($lboolOk == true){
        header('Location:../view/profil.view.php');
    }
}
require_once ('../view/insertMoney.view.php');
