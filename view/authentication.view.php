<?php
include_once('../helper/header.php');
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1 class="black-text ">
                Connexion
            </h1>
        </div>

        <?php

        if($QRY_STR == 'error=1'){
            ?><div class="col-md-5 alert-danger">
                Mauvais mot de passe ou addresse mail
            </div>
        <?php
        }
        ?>

        <div class="col-md-6 formConnection">
            <form action="" method="POST">
                <div class="">
                    <label for="email" class="">Adresse e-mail</label>
                    <input name="mail" type="text">
                </div>

                <div class="">
                    <label for="password" class="">Mot de passe</label>
                    <input name="password" type="password">
                </div>


                <button class="btn submit waves-effect waves-light" type="submit" name="submit">
                    Connexion
                    <i class="material-icons right">send</i>
                </button>
            </form>

        </div>
        <div class="col-md-1">
            <a href="../index.php" class="close">
                <i class="fas fa-arrow-circle-left"></i>
            </a>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
        M.updateTextFields();
    });

    $(document).ready(function () {
        $('select').formSelect();
    });
</script>
<?php
include_once('../helper/footer.php');

?>