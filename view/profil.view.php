<!--Profil de l'utilisateur-->
<?php
include('../helper/header.php');

include("../helper/navbar.php");

?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 ">
            <img class="profilPicture responsive-img rounded center-block" src="/assets/img/profile-pic.PNG" alt="">
            <h2 class="text-center">
                <?php
                echo($lobjUser->prenom . " " . $lobjUser->nom); ?>
            </h2>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-4">
            <h4>Nom : </h4>
            <span class="detailAppartement"><?php echo($lobjUser->nom); ?></span>
        </div>
        <div class="col-md-4">
            <h4>Prénom : </h4>
            <span class="detailAppartement"><?php echo($lobjUser->prenom); ?></span>
        </div>
        <div class="col-md-4">
            <h4>Ville : </h4>
            <span class="detailAppartement"><?php echo($lobjUser->adress); ?></span>
        </div>
        <div class="col-md-4">
            <h4>Adresse mail : </h4>
            <span class="detailAppartement"><?php echo($lobjUser->mail); ?></span>
        </div>
        <div class="col-md-4">
            <h4>Pays : </h4>
            <span class="detailAppartement"><?php echo($lobjUser->pays); ?></span>
        </div>
        <div class="col-md-4">
            <h4>Solde : </h4>
            <span class="detailAppartement"><?php echo($lobjUser->solde . " jeton(s)"); ?></span>
        </div>

    </div>

    <!--Voir le logement en cours-->
    <div class="col-md-4 logementInfo">
        <h3><a href="../controller/listOfAppartsUser.php">Voir mon logement</h3>
    </div>
    <!--    Voir l'historique des logements s'il y en a un-->
    <div class="col-md-4 logementInfo">
        <h3><a href="../controller/historique.php">Voir mon historique</h3>
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
            </a>
        </div>
    </div>


</div>


<?php
include("../helper/footer.php");
?>