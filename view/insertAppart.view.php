<?php
include_once('../helper/header.php');
//require_once("../controller/insertAppart.php");

include_once ('../helper/navbar.php');
?>

    <div class="wip">
        <h1> Ajout d'un appartement à la plateforme</h1>

        <div class="container-fluid">
            <div class="row">
                <form method="POST" action="../controller/insertAppart.php">
                    <div class="input-field">
                        <h5>Prix</h5>
                        <input name="prix" type="text">
                        <!--            <label for="prix" class=""> Prix-->
                        <!--            </label>-->
                    </div>

                    <div class="input-field">
                        <h5>Description</h5>
                        <input name="description" type="text">
<!--                        <label for="description" class="">Description-->
<!--                        </label>-->
                    </div>
                    <div class="input-field">
                        <h5>Etat</h5>
                        <input name="etat" type="text">
<!--                        <label for="etat" class=""> Etat-->
<!--                        </label>-->
                    </div>
                    <div class="input-field">
                        <h5>Nombre de pièces</h5>
                        <input name="nbPiece" type="text">
<!--                        <label for="nbPiece" class=""> Nombre de pièces-->
<!--                        </label>-->
                    </div>
                    <div class="input-field">
                        <h5>Surface</h5>
                        <input name="surface" type="text">
<!--                        <label for="surface" class=""> Surface-->
<!--                        </label>-->
                    </div>
                    <div class="input-field">
                        <h5>Meublé</h5>
                        <input name="meuble" type="text">

                        <!--                        <select name="meuble">-->
<!--                            <option value="1">Oui</option>-->
<!--                            <option value="0">Non</option>-->
<!--                        </select>-->
<!--                        <label for="meuble" class=""> Meublé-->
<!--                        </label>-->
                    </div>
                    <div class="input-field">
                        <h5>Indice énergie</h5>
                        <input name="indEnergie" type="text">

<!--                        <select name="indEnergie">-->
<!--                                <option value="A">A</option>-->
<!--                                <option value="B">B</option>-->
<!--                                <option value="C">C</option>-->
<!--                                <option value="D">D</option>-->
<!--                                <option value="E">E</option>-->
<!--                                <option value="F">F</option>-->
<!--                            </select>-->
<!--                        <label for="meuble" class=""> Indice énérgie</label>-->

                    </div>
                    <div class="">
                        <h5>Début de la location</h5>
                        <input name="creation" type="text">
<!--                        <label for="creation" class=""> Début de la location-->
<!--                        </label>-->
                    </div>
                    <div class="">
                        <h5>Fin de la location</h5>
                        <input name="expiration" type="text">
<!--                        <label for="expiration" class=""> Fin de la location-->
<!--                        </label>-->
                    </div>
                    <div class="">
                        <h5>Message</h5>
                        <input name="message" type="text">
<!--                        <label for="message" class=""> Message-->
<!--                        </label>-->
                    </div>
                    <div class="">
                        <h5>Statut (Occupé ou Disponible)</h5>
                        <input name="statut" type="text">

<!--                        <select name="statut">-->
<!--                            <option value="1">Occupé</option>-->
<!--                            <option value="0">Disponible</option>-->
<!--                        </select>-->
<!--                        <label for="expiration" class=""> Statut-->
<!--                        </label>-->
                    </div>
                    <div class="">
                        <label for="user" class="" hidden="hidden"> Id User
                            <input name="user" type="text" value="<?php $_SESSION['id']; ?>">
                        </label>
                    </div>

                    <div class="">
                        <h5>Code postal de la ville</h5>
                        <input name="town" id="cpInput" type="text">
<!--                        <label for="town" class=""> Code postal de la ville-->
<!--                        </label>-->
                    </div>
                    <div id="quartInput" class="quartInput-unpinned">
                        <h5>Nom Quartier</h5>
                        <input name="quartier" type="text">

                        <!--                        <select name="quartier" id="quartSelect">-->
<!--                        </select>-->
<!--                        <label for="expiration" class=""> Nom Quartier-->
<!--                        </label>-->
                    </div>
                    <div class="">
                        <label for="submit" class="">
                            <input name="submit" type="submit" value="Enregistrer" class="btn submit waves-effect waves-light">
                        </label>
                    </div>
                </form>
            </div>
            <button class="btn submit waves-effect waves-light"><a href="../welcome.php" style="text-decoration: none; color: white">Retour</a></button>
        </div>
    </div>
<?php


include_once('../helper/footer.php');
?>

