<?php
include("../helper/header.php");
include("../helper/navbar.php");
?>
<!-- Formulaire pour ajouter des jetons à son profil-->

<div class="container-fluid">
    <div class="row">
        <form action="../controller/insertMoney.php" method="post">
            <label> Inscrivez le nombre de jetons que vous souhaitez ajouter</label>
            <input type="text" class="" name="token" placeholder="Somme de jetons à ajouter">
            <input type="submit" value="Ajouter" class="btn btn-default" />
        </form>
    </div>
</div>






<?php
include_once ('../helper/footer.php');
?>
