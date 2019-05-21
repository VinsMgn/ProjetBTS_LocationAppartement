<?php
include("../helper/header.php");

include("../helper/navbar.php");
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <form method="post" action="../controller/formImage.php" enctype="multipart/form-data">
                <label> Choisissez la photo :</label>
                <input type="file" class="" name="namePicture" placeholder="Entrez le nom du fichier">
                <input type="hidden" name="idPersonne" id="" value="<?php echo $_SESSION["id"];?>" />
                <input type="submit" value="Ajouter" class="btn btn-default" />
            </form>
        </div>
    </div>
</div>