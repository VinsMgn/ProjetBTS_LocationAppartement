<?php

include_once("../helper/header.php");
include("../helper/navbar.php");


if ($lobjAppart) {
    ?>
    <!-- Formulaire HTML pour modifier les données-->
    <h1> Modifiez le logement </h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="../controller/updateAppart.php">
                    <div class="input-field">
                        <input required name="identifiant" type="text" value="<?php echo($lobjAppart->id_appartement);?>" hidden="hidden" >
<!--                        <label for="identifiant" class="" hidden="hidden">-->
<!--                        </label>-->
<!--                        <label for="prix" class=""> Prix-->
<!--                        </label>-->
                        Prix
                        <input required name="prix" type="text" value="<?php echo($lobjAppart->prix);?>">
                    </div>

                    <div class="input-field">
                        Description
                        <input required name="description" type="text" value="<?php echo($lobjAppart->description);?>">
<!--                        <label for="description" class="">Description-->
<!--                        </label>-->
                    </div>
                    <div class="input-field">
                        Etat
                        <input required name="etat" type="text" value="<?php echo($lobjAppart->etat);?>">
<!--                        <label for="etat" class=""> Etat-->
<!--                        </label>-->
                    </div>
                    <div class="input-field">
                        Nombre de pièce(s)
                        <input required name="nbPiece" type="text" value="<?php echo($lobjAppart->nbPiece);?>">
<!--                        <label for="nbPiece" class=""> Nombre de pièce(s)-->
<!--                        </label>-->
                    </div>
                    <div class="input-field">
                        Surface
                        <input required name="surface" type="text" value="<?php echo($lobjAppart->surface);?>">
<!--                        <label for="surface" class=""> Surface-->
<!--                        </label>-->
                    </div>
                    <div class="input-field">
                        Meublé
                        <select name="meuble">
                            <option value="1">Oui</option>
                            <option value="0">Non</option>
                        </select>
<!--                        <label for="meuble" class=""> Meublé-->
<!--                        </label>-->
                    </div>
                    <div class="input-field">
                        Indice d'énergie
                        <input required name="ind_energie" type="text" value="<?php echo($lobjAppart->ind_energie);?>">
<!--                        <label for="ind_energie" class=""> Indice d'énergie-->
<!--                        </label>-->
                    </div>
                    <div class="input-field">
                        Création
                        <input required name="creation" type="text" value="<?php echo($lobjAppart->dateCreation);?>">
<!--                        <label for="creation" class=""> Création-->
<!--                        </label>-->
                    </div>
                    <div class="input-field">
                        Expiration du bail
                        <input required name="expiration" type="text" value="<?php echo($lobjAppart->dateExpiration);?>">
<!--                        <label for="expiration" class=""> Expiration du bail-->
<!--                        </label>-->
                    </div>
                    <div class="input-field">
                        Message supplémentaire
                        <input required name="message" type="text" value="<?php echo($lobjAppart->message);?>">
<!--                        <label for="message" class=""> Message supplémentaire-->
<!--                        </label>-->
                    </div>
                    <div class="input-field">
                        <select name="statut">
                            Statut
                            <option value="1">Occupé</option>
                            <option value="0">Disponible</option>
                        </select>
<!--                        <label for="expiration" class=""> Statut-->
<!--                        </label>-->
                    </div>
                    <div class="input-field">
                        <input required name="submit" type="submit" value="Modifier mes données" class="btn submit waves-effect waves-light">
<!--                        <label for="submit" class="">-->
<!--                        </label>-->
                    </div>
                </form>
            </div>
        </div>
        <button class="btn submit waves-effect waves-light"> <a href = "../index.php" style="text-decoration: none; color: white" >Mon profil</a></button>
        <button class="btn submit waves-effect waves-light"> <a href = "../controller/listOfAppartsUser.php" style="text-decoration: none; color: white" >Retour</a></button>
    </div>
<?php }