<?php
require_once("../controller/insertUser.php");
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center"> Inscription à la plateforme</h1>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="../controller/insertUser.php">

                <label for="name">Nom</label>
                <input name="name" type="text" class="form-control" aria-describedby="nameHelp"
                       placeholder="Entrer votre nom"><br>

                <label for="firstname">Prénom</label>
                <input name="firstname" type="text" class="form-control" aria-describedby="firstnameHelp"
                       placeholder="Entrer votre prénom"><br>

                <label for="adress">Adresse</label>
                <input name="adress" type="text" class="form-control" aria-describedby="addressHelp"
                       placeholder="Entrer votre adresse"><br>

                <label for="phone">Téléphone</label>
                <input name="phone" type="text" class="form-control" aria-describedby="phoneHelp"
                       placeholder="Entrer votre numéro de téléphone"><br>

                <label for="mail">Adresse Mail</label>
                <input name="mail" type="email" class="form-control" aria-describedby="mailHelp"
                       placeholder="Entrer votre adresse mail"><br>

                <label for="country">Pays</label>
                <input name="country" type="text" class="form-control" aria-describedby="countryHelp"
                       placeholder="Entrer votre pays de résidence"><br>

                <label for="password">Mot de passe</label>
                <input name="password" type="password" class="form-control" aria-describedby="passwordHelp"
                       placeholder="Entrer votre mot de passe"><br>




                <label for="solde">Solde (0 si aucun)</label>
                <input name="solde" type="text" class="form-control" aria-describedby="soldeHelp"
                       placeholder="Entrer votre solde">

                <br>

                <label for="type">Êtes-vous propriétaire ? </label>
                <input name="type" type="text" class="form-control" aria-describedby="typeHelp"
                       placeholder="Entrez oui si vous êtes propriétaire, sinon non">

                <br>

<!--                <label for="type" class=""> Propriétaire</label>-->
<!--                <select required name="type">-->
<!--                    <option> Oui</option>-->
<!--                    <option> Non</option>-->
<!--                </select><br>-->

                <label for="submit" class="">
                </label>
                <input required name="submit" type="submit" value="S'inscrire">

            </form>
        </div>
        <div class="col-md-5">
            <a href="../index.php" class="close">
                <i class="fas fa-arrow-circle-left"></i>
            </a>
        </div>

    </div>
</div>


