<?php
include('./helper/header.php');
require_once("./helper/authGuard.php");


if (isset($_SESSION)) {
    if ($_SESSION['id']) {
        header('Location: /welcome.php');
    }
} else {
    session_start();
//    header('Location: /welcome.php');
}

$QRY_STR = $_SERVER['QUERY_STRING'];


//Traitement si l'utilisateur souhaite se déconnecter
if ($QRY_STR == 'disconnect') {
    session_destroy();
}

if ($QRY_STR == 'error=2') {
    echo("Vous n'êtes pas administrateur ! ");
}

?>

<div class="container-fluid">
    <div class="row ">
        <div class="col-md-12">
            <img class="responsive-img logoImg center-block" src="/assets/img/logo.png" alt="">
            <h2 class="text-center textIndex">
                Bienvenue sur Le bon'appart!
            </h2>
        </div>

        <div class="col-md-3 "></div>

        <div class="col-md-6 center-block ">


            <div class="row">
                <div class="col-md-6 center-block text-center"> <a href="./controller/authentication.php">
                        <h4 class="title_connection">
                            Connexion >
                        </h4>
                    </a></div>
                <div class="col-md-6 center-block text-center">
                    <a href="./controller/insertUser.php">
                        <h4 class="title_connection">
                            Inscription >
                        </h4>
                    </a>
                </div>
            </div>

        </div>
        <div class="col-md-3 center-block">
        </div>
    </div>

</div>

<?php
include("./helper/footer.php");
?>
