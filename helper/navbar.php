<!--region Large navbar-->

<div class="navbar large">
    <div class="container navbar-container">
        <div class="row navbar-row">

            <div class="col-md-2">
                <a href="../welcome.php"><div class="logo-pic"></div></a>
            </div>

            <div class="col-md-2">
                <div class="navbar-link-container">
                    <a href="/controller/listOfApparts.php"> <span class="navbar-link">LOGEMENTS</span></a>
                </div>
            </div>

            <div class="col-md-2">
                <button type="button" class="btn-info roundedAddBtn">
                    <a href="../controller/insertAppart.php" onclick="$('.addCreateDropdown').toggle();" class="white-text">
                        <img src="../assets/img/addcross.png" class="responsive-img addLogo " alt="">APPARTEMENT</a>
                </button>
            </div>

            <div class="col-md-2">
                <button type="button" class="btn-info roundedAddBtn">
                    <a href="../controller/insertMoney.php" onclick="$('.addCreateDropdown').toggle();"
                       class="white-text">
                        <img src="../assets/img/addcross.png" class="responsive-img addLogo " alt="">JETONS</a>
                </button>
            </div>


            <div class="col-md-2">
                <a href="../controller/profil.php">
                    <div class=""> Profil</div>
                </a>
            </div>

            <div class="col-md-2">
                <form action="" method="post">
                    <button type="submit" id="deconnexion" name="deconnexion" class="btn submit waves-effect waves-light deconnection"> Déconnexion</button>
                </form>
                <?php
                if (isset($_POST["deconnexion"])) {
                    $INC_DIR = $_SERVER["DOCUMENT_ROOT"];
                    header("Location:../index.php");
                    session_destroy();
                }
                ?>
            </div>
        </div>
    </div>
</div>
<!--endregion Large navbar-->

<script>
    $(document).ready(function () {

        var sidenav = $('.sidenav').sidenav();

        $(".menu-burger-container").click(function () {
            $('.sidenav').sidenav('open');
        });

        $(window).resize(function () {
            $('.sidenav').sidenav('close');

        })

    });


</script>
