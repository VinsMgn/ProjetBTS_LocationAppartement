<?php

require_once("../helper/header.php");
require_once("../helper/navbar.php");


if (empty($lobjHisto)) {
    echo("Vous n'avez loué aucun appartement sous notre plateforme");
} else {
?>

<div class="container-fluid">
    <div class="row">
        <?php
        for ($i = 0;
        $i < sizeof($lobjHisto);
        $i++) { ?>

        <div class="col-md-12">
            <h3> Appartement numéro <?=$i+1;?></h3>
            <div class="col-md-3">
                <h5> Prix :</h5>
                <?php echo($lobjHisto[$i][1] . "\n"); ?>
            </div>
            <div class="col-md-3">
                <h5> Type de logement :</h5>
                <?php echo($lobjHisto[$i][2] . "\n"); ?>
            </div>
            <div class="col-md-3">
                <h5> Début de la location :</h5>
                <?php echo($lobjHisto[$i][8] . "\n"); ?>
            </div>
            <div class="col-md-3">
                <h5> Fin de la location :</h5>
                <?php echo($lobjHisto[$i][9] . "\n"); ?>
            </div>
        </div>
    </div>
    <?php }


    } ?>
</div>