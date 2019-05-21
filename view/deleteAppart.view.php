<?php
include("../helper/header.php");

include("../helper/navbar.php");

if ($lobjAppart) {
    ?>
    <!-- Formulaire HTML pour modifier les données-->
    <h1> Voulez-vous supprimer votre appartement ? </h1>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md12">
                <form method="post" action="../controller/deleteAppart.php">
                    <div class="input-field">
                        <input required name="identifiant" type="text"
                               value="<?php echo($lobjAppart->id_appartement); ?>" hidden="hidden">
                        <!--                <label for="identifiant" class="" >-->
                        <!--                </label>-->
                        <h5>Prix</h5>
                        <input required name="prix" type="text" value="<?php echo($lobjAppart->prix); ?>">
                        <!--                <label for="prix" class=""> Prix-->
                        <!--                </label>-->
                    </div>

                    <div class="input-field">
                        <h5>Description</h5>
                        <input required name="description" type="text" value="<?php echo($lobjAppart->description); ?>">
                        <!--                <label for="description" class="">Description-->
                        <!--                </label>-->
                    </div>
                    <div class="input-field">
                        <h5>Etat</h5>
                        <input required name="etat" type="text" value="<?php echo($lobjAppart->etat); ?>">
                        <!--                <label for="etat" class=""> Etat-->
                        <!--                </label>-->
                    </div>
                    <div class="input-field">
                        <h5>Nombre de pièce(s)</h5>
                        <input required name="nbPiece" type="text" value="<?php echo($lobjAppart->nbPiece); ?>">
                        <!--                <label for="nbPiece" class=""> Nombre de pièce(s)-->
                        <!--                </label>-->
                    </div>
                    <div class="input-field">
                        <h5>Surface</h5>
                        <input required name="surface" type="text" value="<?php echo($lobjAppart->surface); ?>">
                        <!--                <label for="surface" class=""> Surface-->
                        <!--                </label>-->
                    </div>
                    <div class="input-field">
                        <h5>Meublé</h5>
                        <select name="meuble">
                            <option value="oui">Oui</option>
                            <option value="non">Non</option>
                        </select>
                        <!--                <label for="meuble" class=""> Meublé-->
                        <!--                </label>-->
                    </div>
                    <div class="input-field">
                        <h5>Indice d'énergie</h5>
                        <input required name="ind_energie" type="text" value="<?php echo($lobjAppart->ind_energie); ?>">
                        <!--                <label for="ind_energie" class=""> Indice d'énergie-->
                        <!--                </label>-->
                    </div>
                    <div class="input-field">
                        <h5>Création</h5>
                        <input required name="creation" type="text" value="<?php echo($lobjAppart->dateCreation); ?>">
                        <!--                <label for="creation" class=""> Création-->
                        <!--                </label>-->
                    </div>
                    <div class="input-field">
                        <h5> Expiration du bail</h5>
                        <input required name="expiration" type="text"
                               value="<?php echo($lobjAppart->dateExpiration); ?>">
                        <!--                <label for="expiration" class=""> Expiration du bail-->
                        <!--                </label>-->
                    </div>
                    <div class="input-field">
                        <h5>Message supplémentaire</h5>
                        <input required name="message" type="text" value="<?php echo($lobjAppart->message); ?>">
                        <!--                <label for="message" class=""> Message supplémentaire-->
                        <!--                </label>-->
                    </div>
                    <div class="input-field">
                        <h5>Statut</h5>

                        <label for="expiration" class=""> Statut
                            <select name="statut">
                                <option value="occupe">Occupé</option>
                                <option value="disponible">Disponible</option>
                            </select>
                        </label>
                    </div>
                    <div class="input-field">
                        <input required name="submit" type="submit" value="Supprimer mes données"
                               class="btn submit waves-effect waves-light">
                        <!--                <label for="submit" class="">-->
                        <!--                </label>-->
                    </div>
                </form>
            </div>
        </div>
        <button class="btn submit waves-effect waves-light"><a href="../welcome.php"
                                                               style="text-decoration: none; color: white">Mon
                profil</a></button>
        <button class="btn submit waves-effect waves-light"><a href="../controller/listOfAppartsUser.php"
                                                               style="text-decoration: none; color: white">Retour</a>
        </button>
    </div>
<?php }