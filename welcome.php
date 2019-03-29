<?php
$INC_DIR = $_SERVER["DOCUMENT_ROOT"];
$INC_DIR .= "\ProjetBTS_LocationAppartement-master";
$RQT_URL = $_SERVER['REQUEST_URI'];

require_once("./helper/authGuard.php");

session_start();
AuthGuard($RQT_URL);

$QRY_STR = $_SERVER['QUERY_STRING'];

if ($QRY_STR == 'error=2') {
    echo("Vous n'êtes pas administrateur ! ");
}
include('./helper/header.php');
require_once("./model/mainModel.php");

?>
    <div id="" class="">
        <?php
        include("./helper/navbar.php");
        ?>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center spaceTopWelcome">
                <h1>Bienvenue sur Le bon'appart </h1>
                <span class="catchPhrase"> La plateforme de location d'appartement entre particuliers</span>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="./controller/listOfApparts.php" style="text-decoration: none"> <span class="linkApparts">Voir les appartements disponibles ></span></a>
            </div>
        </div>
    </div>
<?php
include("./helper/footer.php");
?>