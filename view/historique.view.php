<?php

require_once("../helper/header.php");
require_once("../helper/navbar.php");


if (empty($lobjHisto)) {
    echo("Vous n'avez loué aucun appartement sous notre plateforme");
} else {
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <?php
            for ($i = 0; $i < sizeof($lobjHisto); $i++) {
                var_dump($lobjHisto);
                echo($lobjHisto[$i][10]);

            } ?>


            <?php } ?>
