<?php
include("../helper/header.php");

include("../helper/navbar.php");

?>

<h1> Voici les détails du propriétaire</h1>

<div class="container-fluid">
    <div class="row" id="informationProprietaire">
        <div class="col-md-3">
            <h6>Nom : </h6>
            <span class="detailProprietaire"><?php echo($lobjProprio->nom); ?></span>
        </div>
        <div class="col-md-3">
            <h6>Prénom : </h6>
            <span><?php echo($lobjProprio->prenom); ?></span>
        </div>
        <div class="col-md-3">
            <h6> Adresse mail : </h6>
            <span><?php echo($lobjProprio->mail); ?></span>
        </div>
        <div class="col-md-3">
            <h6>Numéro de téléphone : </h6>
            <span><?php echo($lobjProprio->phone); ?></span>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <p> Pour cet appartement il est nécessaire d'avoir <span
                        class="font-weight-bold"><?php echo($lobjAppart->prix) ?></span> jetons</p>
            <p> En effectuant la demande de location, la somme en jetons sera retirée de votre solde jusqu'à acceptation
                du
                propriétaire.</p>
        </div>
        <form method="post" action="../controller/detailProprietaire.php"
              class="col-md-12">
            <label>
                <input type="submit" name="demande" class="btn submit waves-effect waves-light">
                <input type="text" name="idUser" class="btn submit waves-effect waves-light" hidden="hidden" value="<?= $lobjProprio->id ?>">
            </label>
        </form>
        <!--        <form method="get" action="../controller/detailProprietaire.php?idUser=-->
        <!--<? //=$lobjProprio->id?>--><!--" class="col-md-12">-->
        <!--            <label>-->
        <!--                <input type="submit" name="demande" class="btn submit waves-effect waves-light">-->
        <!--            </label>-->
        <!--        </form>-->
    </div>

</div>

<div>

</div>