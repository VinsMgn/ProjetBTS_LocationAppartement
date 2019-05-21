<?php
require_once("../controller/listOfAppartsUser.php");
include_once("../helper/header.php");
include("../helper/navbar.php");

?>
    <div class="container-fluid" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-md-7 center-block">
                <h1 class="text-center"> Mon appartement</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <button class="btn submit waves-effect waves-light">
                    <a href="../welcome.php" style="text-decoration: none; color: white"> Voir mon profil </a>
                </button>
            </div>
            <div class="col-md-3">
                <button class="btn submit waves-effect waves-light">
                    <a href="../controller/insertAppart.php" id="ajoutLogement" style="text-decoration: none; color: white">Ajouter un nouveau logement</a>
                </button>
            </div>
            <div class="col-md-3">
                <button class="btn submit waves-effect waves-light">
                    <a href="../controller/updateAppart.php" style="text-decoration: none; color: white">Modifier
                        les
                        informations de mon logement</a></button>
            </div>
            <div class="col-md-3">
                <button class="btn submit waves-effect waves-light">
                    <a href="../controller/deleteAppart.php" style="text-decoration: none; color: white">Supprimer mon logement</a>
                </button>
            </div>
        </div>
    </div>

<?php

foreach ($lobjApparts as $lobjAppart) {
    if ($lobjAppart->FK_USERS == $_SESSION['id']) {
        $lobjPicture = GetPictureFromHouse($lobjAppart->id_appartement);
        ?>

        <div class="container" id="mainContainer">
            <div class="row ">
                <h3 class="col-md-12">Photo</h3>
                <img src="<?= ".." . DIRECTORY_SEPARATOR . $lobjPicture->url ?>" alt="Image du logement">
            </div>
            <div class="row">
                <div class="col-md-2 text-center">
                    <h3>Prix</h3>
                    <span class="detailAppartement"><?php echo($lobjAppart->prix); ?>€</span>
                </div>
                <div class="col-md-3 text-center">
                    <h3>Description</h3>
                    <span class="detailAppartement"><?php echo($lobjAppart->description); ?></span>
                </div>
                <div class="col-md-2 text-center">
                    <h3>Etat </h3>
                    <span class="detailAppartement"><?php echo($lobjAppart->etat); ?></span>
                </div>
                <div class="col-md-2 text-center">
                    <h3>Surface </h3>
                    <span class="detailAppartement"><?php echo($lobjAppart->surface . "m²"); ?></span>
                </div>
                <div class="col-md-2 text-center">
                    <h3>Meublé </h3>
                    <span class="detailAppartement"><?php if ($lobjAppart->meuble == 0) {
                            echo("L'appartement n'est pas meublé");
                        } else {
                            echo("L'appartement est meublé");
                        } ?></span>
                </div>
                <div class="col-md-2 text-center">
                    <h3>Indice énergie </h3>
                    <span class="detailAppartement"><?php echo($lobjAppart->ind_energie); ?></span>
                </div>
                <div class="col-md-2 text-center">
                    <h3>Date de début </h3>
                    <span class="detailAppartement"><?php echo($lobjAppart->dateCreation); ?></span>
                </div>
                <div class="col-md-2 text-center">
                    <h3>Date de fin </h3>
                    <span class="detailAppartement"><?php echo($lobjAppart->dateExpiration); ?></span>
                </div>
                <div class="col-md-2 text-center">
                    <h3>Message </h3>
                    <span class="detailAppartement"><?php echo($lobjAppart->message); ?></span>
                </div>
                <div class="col-md-2 text-center">
                    <h3>Statut </h3>
                    <span class="detailAppartement"><?php if ($lobjAppart->statut == 1) {
                            echo("L'appartement n'est pas disponible");
                        } else {
                            echo("L'appartement est disponible");
                        } ?></span>
                </div>
            </div>
        </div>

        <?php
    }
};