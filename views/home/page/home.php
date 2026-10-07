<?php if (isset($_SESSION['success_message'])) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="position:relative;">
        <strong><?= $_SESSION['success_message'] ?></strong>
        <?php unset($_SESSION['success_message']) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php endif ?>

<?php if (isset($_SESSION['error_message'])) : ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong><?= $_SESSION['error_message'] ?></strong>
        <?php unset($_SESSION['error_message']) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif ?>



<header class="site-header">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 d-flex flex-wrap">
                <p class="d-flex me-4 mb-0">
                    <i class="bi-person custom-icon me-2"></i>
                    <strong class="text-dark">Bienvenue dans MadDJ, Merci à vous!</strong>
                </p>
            </div>

        </div>
    </div>
</header>



<section class="hero-section" id="section_1">
    <div class="section-overlay"></div>

    <div class="container d-flex justify-content-center align-items-center">
        <div class="row">

            <div class="col-12 mt-auto mb-5 text-center">
                <small>LA PLATEFORME DE RÉSERVATION DES DEEJAYS ET DE LEURS Planning</small>

                <h1 class="text-white mb-5"> L'univers vibrant de la musique live</h1>



                <div class="container justify-content-center margin-top:200px;">

                    <div class="row">

                        <div class="col-md-12">

                            <div class="input-group mb-3 d-content">
                                <input type="text" class="form-control input-text" placeholder="Search deejay...." aria-label="Recipient's username" aria-describedby="basic-addon2" style="height:50px; background:transparent;color:aliceblue;border-radius:30px ">
                            </div>
                            <div class="input-group-append">
                                <a class="btn form-control custom-btn" type="button" style="height:50px;border-radius:30px;">Rechercher</a>
                            </div>

                        </div>

                    </div>


                </div>










                <!-- <a class="btn custom-btn smoothscroll" href="#section_2">Let's begin</a> -->
            </div>
        </div>
    </div>

    <div class="video-wrap">
        <video autoplay="" loop="" muted="" class="custom-video" poster="">
            <source src="assets/video/pexels-2022395.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</section>



<section class="Qui somme" style="color: rgb(204,208,211);background-color: rgba(251,249,249,0.9);height: 330px;padding-top: 45px;">
    <div data-aos="fade-up" data-aos-duration="1000">
        <h1 class="text-center" style="color: var(--bs-body-color);font-family: Poppins, sans-serif;"><strong>Qui sommes nous?</strong></h1>
        <p style="font-size: 25px;font-family: Poppins, sans-serif;margin-bottom: 0px;height: 264px; margin:0 50px"><br><span style="color: rgb(0, 0, 0);">MadDJ, nous sommes passionnés par la création d'experience musicales exceptionnelles pour chaque évenement.En tant que plateforme dédiée à la réservation et à la planning de DJs talenteux,nous nous efforçons de connecter les organisateurs d'événement avec les artistes qui transforment leurs moments spéciaux en souvenir inoubliables.</span><br><br><br></p>
    </div>
</section>
<div class="team-grid" style="margin: 0px;margin-top: 45px;padding: 40px;">
    <div class="container" data-aos="fade-left" data-aos-duration="1000">
        <div class="intro">
            <h1 class="text-center">Notre Deejay</h1>
            <p class="text-center">Ce sont les Djs qui font partie de notre membre MadDJ.&nbsp;&nbsp;<br>ils sont tous sélectionné.</p>
        </div>
        <div class="row people">
            <?php foreach ($deejay as $element) : ?>
                <div class="col-md-4 col-lg-3 item">
                    <div class="box">
                        <!-- style="background-image:url(/upload/pdp/<?= $element['pdp'] ?>)" -->
                        <img src="/upload/pdp/<?= $element['pdp'] ?>" alt="" srcset="">
                        <div class="cover">
                            <h3 class="name"><?= $element['nom'] ?></h3>
                            <p class="title">DEEJAY &amp; Beat maker</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook-official"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-instagram"></i></a></div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

        <div class="col" style="height: 55px;margin-left: 50%;"><a class="btn custom-btn d-lg-block d-none d-sm-flex" role="button" style="margin: 0;margin-left: 0;height: 50px;width: 300px;font-size: 18px;padding-left: 10px;padding-bottom: 1px;padding-top: 16px;margin-right: 0;" href="/dj">Voir tous les DJs</a></div>
    </div>
</div>
</div>
<section class="schedule-section section-padding">
    <h2 style="color: white;">
        <center>Rejoignez la communauté de MadDJ</center>
    </h2>
    <div class="container" style="background-color: black; opacity:0.75; border-radius:30px">
        <div class="row">
            <div class="col-md-4">
                <h3><br><span style="color: white;">Devenez membre de MADDJ pour faciliter la réservation et suivre le planning des DJ sur notre plateforme.</span><br><br></h3>
            </div>
            <div class="col-md-4">
                <h3><br><span style="color: white;">Inscrivez vous et choisir votre Dj préferer en envoyant une message privé et de faire la réservation,&nbsp;</span><br><br></h3>
            </div>
            <div class="col-md-4">
                <h3><br><span style="color: white;">Faites votre fête un moment innoubliable avec notre service de Deejay</span><br><br></h3>
                <?php
                if (!isset($_SESSION['auth'])) :

                ?>
                    <button class="btn custom-btn d-lg-block d-none" type="button">
                        Inscrivez-vous
                    </button>
                <?php endif ?>
            </div>
        </div>
    </div>

</section>


<section style="display: flex;">
    <div class="container flex">
        <div class="main-video-container">
            <video src="assets/Video/CYEMCI - MIÔLAKÔLAKA (Official Video).mp4" loop controls autoplay muted class="main-video"></video>
            <h3 class="main-vid-title">Mbints & Chronix</h3>
        </div>
        <div class="video-list-container" id="videosList"></div>
    </div>
</section>




<div class="container">
    <div class="row">
        <div class="col-md-12" style="background: #000000;">
            <div class="p-5" style="font-size: 25px;" data-aos="zoom-in" data-aos-duration="1000">
                <h2 class="text-center" style="color: rgb(255,255,255); ">Pourquoi MadDJ</h2>
                <p class="text-center"><span style="color: rgb(255, 255, 255); background-color: rgb(0, 0, 0); font-family: Poppins, sans-serif;font-size: 25px;">Notre processus de réservation simple et efficace vous permet de sécuriser rapidement les services&nbsp;du DJ de votre choix</span></p>
                <p class="text-center"><span style="color: rgb(252, 252, 252); background-color: rgb(0, 0, 0); font-family: Poppins, sans-serif;font-size: 25px;">Personnalisez votre expérience musicale en discutant directement avec les Deejays pour intégrer vos demandes spécifiques.</span></p>
                <p class="text-center"><span style="color: rgb(252, 252, 252); background-color: rgb(0, 0, 0);font-family: Poppins, sans-serif;font-size: 25px;">Des informations claires et détailées sur chaque DJ, y compris leurs antécedent, leurs compétences et leurs évaluations, vous aident à prendre des décisions éclairées.</span></p>
            </div>
        </div>
    </div>
    <div class="row p-3" style="background: #000000;">
        <div class="col-md-4" data-aos="zoom-in" data-aos-duration="1000"><i class="far fa-calendar-alt d-flex d-md-flex justify-content-center justify-content-md-center" style="font-size: 80px;color: rgb(255,255,255);"></i></div>
        <div class="col-md-4" data-aos="zoom-in" data-aos-duration="1000"><i class="fa fa-music d-flex d-md-flex justify-content-center justify-content-md-center" style="font-size: 80px;color: rgb(255,255,255);"></i></div>
        <div class="col-md-4 d-flex d-md-flex justify-content-center justify-content-md-center" data-aos="zoom-in" data-aos-duration="1000"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-info-circle-fill" style="font-size: 80px;color: rgb(255,255,255);">
                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"></path>
            </svg></div>
    </div>
</div>