<?php

include("../helper/header.php");

include("../helper/navbar.php");

if ($lobjUser) {

    ?>

    <h1 class="text-center"> Modifiez vos informations </h1>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <form method="post" action="../controller/updateUserAdmin.php">
                    <div class="input-field">
                        <label for="identifiant" class="" hidden="hidden">
                            <input required name="identifiant" type="text" value="<?php echo($lobjUser->id);?>" >
                        </label>
                        <h5>Nom</h5>
                        <input required name="name" type="text" value="<?php echo($lobjUser->nom);?>">
                        <!--                <label for="name" class=""> Nom-->
                        <!--                </label>-->
                    </div>

                    <div class="input-field">
                        <h5>Prénom</h5>
                        <input required name="firstname" type="text" value="<?php echo($lobjUser->prenom);?>">
                        <!--                <label for="firstname" class="">Prénom-->
                        <!--                </label>-->
                    </div>
                    <div class="input-field">
                        <h5>Adresse</h5>
                        <input required name="adress" type="text" value="<?php echo($lobjUser->adress);?>">
                        <!--                <label for="adress" class=""> Adresse-->
                        <!--                </label>-->
                    </div>
                    <div class="input-field">
                        <h5>Téléphone</h5>
                        <input required name="phone" type="text" value="<?php echo($lobjUser->phone);?>">
                        <!--                <label for="phone" class=""> Téléphone-->
                        <!--                </label>-->
                    </div>
                    <div class="input-field">
                        <h5>Mail</h5>
                        <input required name="mail" type="email" value="<?php echo($lobjUser->mail);?>">
                        <!--                <label for="mail" class=""> Mail-->
                        <!--                </label>-->
                    </div>
                    <div class="input-field">
                        <h5>Pays</h5>
                        <input required name="country" type="text" value="<?php echo($lobjUser->pays);?>">
                        <!--                <label for="country" class=""> Pays-->
                        <!--                </label>-->
                    </div>
                    <div class="input-field">
                        <h5>Mot de passe</h5>
                        <input required name="password" type="password" value="<?php echo($lobjUser->password);?>">
                        <!--                <label for="password" class=""> Mot de passe-->
                        <!--                </label>-->
                    </div>
                    <div class="input-field">
                        <h5>Statut</h5>
                        <input required name="type" type="text" value="<?php if($lobjUser->isProprietaire == 1){
                            echo ("Propriétaire");
                        }else{
                            echo("Locataire");
                        }?>">
                        <!--                <label for="type" class=""> Statut-->
                        <!--                    -->
                        <!--                </label>-->
                    </div>
                    <div class="input-field">
                        <h5>Solde (0 si aucun)</h5>
                        <input required name="solde" type="text" value="<?php echo($lobjUser->solde);?>">
                        <!--                <label for="solde" class=""> Solde (0 si aucun)-->
                        <!--                </label>-->
                    </div>
                    <div class="input-field">
                        <input required name="submit" type="submit" value="Modifier mes données" class="btn submit waves-effect waves-light">
                        <!--                <label for="submit" class="">-->
                        <!--                </label>-->
                    </div>
                </form>
            </div>
        </div>
<!--        <button> <a href = "../controller/admin/listOfUsers.php" style="text-decoration: none; color: black" >Retour</a></button>-->
        <button class="btn submit waves-effect waves-light"> <a href = "../view/profil.php" style="text-decoration: none; color: white" >Retour</a></button>
    </div>
<?php }