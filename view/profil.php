<!--Profil de l'utilisateur-->
<?php
$INC_DIR = $_SERVER["DOCUMENT_ROOT"];
$RQT_URL = $_SERVER['REQUEST_URI'];

require_once("../helper/authGuard.php");

session_start();
AuthGuard($RQT_URL);

$QRY_STR = $_SERVER['QUERY_STRING'];

if ($QRY_STR == 'error=2') {
    echo("Vous n'êtes pas administrateur ! ");
}
include('../helper/header.php');
require_once("../model/mainModel.php");

?>

<?php
include("../helper/navbar.php");

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 ">
            <img class="profilPicture responsive-img rounded center-block" src="/assets/img/profile-pic.PNG" alt="">
            <h2 class="text-center">
                <?php $lobjUser = GetUser($_SESSION['id']);
                echo($lobjUser->prenom . " " . $lobjUser->nom); ?>
            </h2>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-12">
            <ul id="listProfil">
                <li>
                    <h3>Nom : </h3>
                    <span class="detailAppartement"><?php echo($lobjUser->nom); ?></span>
                </li>
                <li>
                    <h3>Prénom : </h3>
                    <span class="detailAppartement"><?php echo($lobjUser->prenom); ?></span>
                </li>
                <li>
                    <h3>Ville : </h3>
                    <span class="detailAppartement"><?php echo($lobjUser->adress); ?></span>
                </li>
                <li>
                    <h3>Adresse mail : </h3>
                    <span class="detailAppartement"><?php echo($lobjUser->mail); ?></span>
                </li>
                <li>
                    <h3>Pays : </h3>
                    <span class="detailAppartement"><?php echo($lobjUser->pays); ?></span>
                </li>
                <li>
                    <h3>Solde : </h3>
                    <span class="detailAppartement"><?php echo($lobjUser->solde . " jeton(s)"); ?></span>
                </li>
            </ul>
        </div>

    </div>


    <div class="col-md-4 logementInfo">
        <h3><a href="../controller/listOfAppartsUser.php">Voir mon logement</h3>
    </div>
    <div class="row">
        <div class="col-md-4">
            <a href="../controller/insertAppart.php" class="btn submit waves-effect waves-light">Ajouter un logement
                <i class="material-icons right">add_circle</i>
            </a>
        </div>
        <div class="col-md-4">
            <a href="../controller/insertMoney.php" class="btn submit waves-effect waves-light">Ajouter des jetons
                <i class="material-icons right">add_circle</i>
            </a>
        </div>
        <div class="col-md-4">
            <a href="../controller/updateUser.php" class="btn submit waves-effect waves-light">Modifier mes informations
                personnelles
                <i class="material-icons right">add_circle</i>
            </a>
        </div>
    </div>


</div>


<?php
include("../helper/footer.php");
?>