<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand d-flex" href="/">
            <img src="assets/img/Mdj tena.jpg" alt="" height="30" width="60">
            MadDj
        </a>

        <?php
        if (!isset($_SESSION['auth'])) :

        ?>
            <a href="/login" class="btn custom-btn d-lg-none ms-auto me-4">Se connecter</a>
        <?php endif ?>


        <?php
        if (isset($_SESSION['auth']) && isset($_SESSION["auth_deejay"])) :
        ?>
            <a href="/dashDj?id=<?= $_SESSION["auth_deejay"]["id_dj"] ?>" class="btn custom-btn d-lg-none ms-auto me-4">Disponiblité</a>
        <?php endif ?>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="/">Accueil</a>
                </li>
                <?php
                if (isset($_SESSION['auth']) && isset($_SESSION["auth_deejay"])) :
                ?>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="/profile?id=<?= $_SESSION["auth_deejay"]["id_dj"] ?>">Profil</a>
                    </li>
                <?php endif ?>
                <?php
                if (!isset($_SESSION['auth'])) :

                ?>
                    <li class=" nav-item">
                        <a class="nav-link click-scroll" href="/about">A propos</a>
                    </li>
                <?php endif ?>
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="/dj">Artists</a>
                </li>

                <!-- <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_5">Pricing</a>
                </li> -->

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="/contact">Contact</a>
                </li>
            </ul>


            <?php
            if (!isset($_SESSION['auth'])) :

            ?>

                <a href="/login" class="btn custom-btn d-lg-block d-none">Se connecter</a>

            <?php endif ?>



            <?php
            if (isset($_SESSION['auth_users']) && $_SESSION['auth_users']['statut'] === 'Deejay') :
            ?>

                <a href="/dashDj?id=<?= $_SESSION["auth_deejay"]["id_dj"] ?>" class="btn custom-btn d-lg-block d-none ms-auto me-4"><i class="bi bi-chat-left-dots mx-1"></i>Disponiblité</a>
            <?php endif ?>

            <?php
            if (isset($_SESSION['auth'])) :
            ?>
                <!-- Atao reverse -->
                <div>
                    <a href="/logout" class="btn active  mx-2 lowercase" style="color:aliceblue; font-family:'poppins', sans-serif; font-size:15px"><i class="bi bi-box-arrow-right"></i>Deconnecté</a>
                </div>

            <?php endif ?>

        </div>

    </div>



</nav>