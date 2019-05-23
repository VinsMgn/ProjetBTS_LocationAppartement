<?php
include("../helper/header.php");
?>


<?php
$lobjApparts = GetApparts();

include("../helper/navbar.php");
?>
    <div id="" class="container-fluid">
        <div class="row">
            <div class="col-md-12 center-block">
                <h2 style="color: black"> Rechercher un appartement dans une ville</h2>
            </div>
        </div>
    </div>
<!--Barre de recherche -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 center-block">
                <form method="POST" action="../controller/listOfApparts.php">
                    <div class="col-md-5">
                        <label id="searchCity">Ville :</label>
                        <select name="city" class="cityForm">
                            <?php foreach ($lobjVilles as $ville) { ?>

                                <option value="<?php echo($ville->cpVille); ?>"
                                        style=" z-index:8; display: block; color:black;"> <?php echo($ville->nomVille); ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-4">
                        <label id="submit"></label>
                        <input type="submit" name="submit" value="Rechercher">
                    </div>
                </form>

            </div>
        </div>
    </div>
<!-- Affichage des appartements-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10" >
                <?php foreach ($lobjApparts as $appart) {
                    $lobjPicture = GetPictureFromHouse($appart->id_appartement);
                    ?>

                    <div class="item col-md-5">
                        <div class="title">

                            <?php

                            echo($appart->message);
                            ?>

                        </div>
                        <div class="infos">
                            <div>
                                Nombre de pièces :
                                <?php
                                echo($appart->nbPiece);

                                ?>
                            </div>
                            <div>
                                Ville : <?php

                                echo($appart->FK_VILLES);

                                ?>
                            </div>
                            <div>
                                Date de disponibilité : <?php
                                echo($appart->dateCreation);

                                ?> - <?php
                                echo($appart->dateExpiration);

                                ?>
                            </div>
                            <a href="../controller/detailAppart.php?idAppartement=<?php echo($appart->id_appartement) ?>">
                                Voir plus
                            </a>
                        </div>
                        <div class="more">
                            <i class="material-icons dp48">add_circle_outline</i>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <a href="" class="nextArrow">
        <i class="far fa-arrow-alt-circle-right "></i>
    </a>

    <a href="" class="previousArrow">
        <i class="far fa-arrow-alt-circle-left"></i>
    </a>


<?php
include("../helper/footer.php");

?>