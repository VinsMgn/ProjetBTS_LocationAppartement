<!--region Large navbar-->

<div class="navbar large">
    <div class="container navbar-container">
        <div class="row navbar-row">

            <div class="col-md-2">
                <a href="../welcome.php"><div class="logo-pic"></div></a>
            </div>

            <div class="col-md-3">
                <div class="navbar-link-container">
                    <a href="/controller/listOfApparts.php"> <span class="navbar-link">LOGEMENTS</span></a>
                </div>
            </div>


<!--            Ajout d'un solde et pas d'un appartement TODO-->
            <div class="col-md-3">
                <button type="button" class="btn-info roundedAddBtn">
                    <a href="../controller/insertAppart.php" onclick="$('.addCreateDropdown').toggle();" class="white-text">
                        <img src="../assets/img/addcross.png" class="responsive-img addLogo " alt="">APPARTEMENT</a>
                </button>
            </div>


            <div class="col-md-2">
                <a href="../view/profil.php">
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
<div style="display: none;">
    <!---->
    <!--<div class="navbar small">-->
    <!--    <div class="container navbar-container">-->
    <!--        <div class="row navbar-row">-->
    <!--            <div class="col s2  menu-burger-container">-->
    <!--                <div class="menu-burger">-->
    <!--                    <div class="menu-burger-line"></div>-->
    <!--                    <div class="menu-burger-line"></div>-->
    <!--                    <div class="menu-burger-line"></div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--            <div class="col s8 navbar-logo-container">-->
    <!--                Logo-->
    <!--            </div>-->
    <!--            <div class="col s2 bell-container">-->
    <!--                <div class="bell-notification"></div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!--</div>-->
    <!---->
    <!---->
    <!--<div id="slide-out" class="sidenav olab-sidenav">-->
    <!--    <div class="profile-case">-->
    <!--        <div class="profile-case-overlay"></div>-->
    <!--        <div class="profile-pic"></div>-->
    <!--        <span class="sidenav-user name">Bob DUCLAN</span>-->
    <!--        <span class="sidenav-user">EPSI - Lyon</span>-->
    <!--        <span class="sidenav-user">Bachelor - 2ème année</span>-->
    <!---->
    <!--    </div>-->
    <!--    <ul class="sidenav-ul">-->
    <!--        <li class="sidenav-li">BONS PLANS</li>-->
    <!--        <li class="sidenav-li">LOGEMENTS</li>-->
    <!--        <li class="sidenav-li">A PROPOS</li>-->
    <!--    </ul>-->
    <!--    <div class="sidenav-bottom-content"> EPSI Montpellier @ 2018-2019</div>-->
    <!--</div>-->
</div>

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
