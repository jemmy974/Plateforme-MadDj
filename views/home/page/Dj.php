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





<section style="height: 745px;background: url(&quot;assets/img/marcela-laskoski-YrtFlrLo2DQ-unsplash.jpg&quot;) center / cover no-repeat;">
    <div style="padding-top:300px;">

        <div class="col-12 mt-auto mb-5 text-center">
            <small class="text-white">LA PLATEFORME DE RÉSERVATION DES DEEJAYS ET DE LEURS Planning</small>

            <h1 class="text-white mb-5"> L'univers vibrant de la musique live</h1>


        </div>
    </div>





</section>
<div class="article-list">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <div class="intro">
            <h2 class="text-center">Nos DJs</h2>
            <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
        </div>
        <div class="row articles">
            <?php foreach ($deejay as $element) : ?>
                <div class="col-sm-6 col-md-4 item"><a href="/profile"><img class="img-fluid" src="/upload/pdp/<?= $element['pdp'] ?>"></a>
                    <h3 class="name"><?= $element['nom'] ?></h3>
                    <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhonzcus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a href="/profile?id=<?= $element['id_dj'] ?>" class="btn custom-btn m-5" type="button" style="box-shadow: 0px 0px 8px rgb(0,0,0);">Voir le profil</a><a class="btn active  custom-btn" href="/formulaire?id=<?= $element['id_dj'] ?>" style="box-shadow: 0px 0px 5px rgb(0,0,0); border-radius:50px;">Réserver<i class="bi bi-arrow-right mx-1"></i></a>
                </div>
            <?php endforeach ?>
        </div>

        <div class="row articles"><button class="button" type="button" data-hover="C'est Gratuit!"><span>DEMANDER UN AVIS?</span></button><button class="button" type="button" data-hover="Inscrivez-vous "><span>VOUS ETES UN(E) ARTIST?</span></button></div>
    </div>
</div>
<!-- <div class="article-list">
    <div class="container">
        <div class="intro">
            <h2 class="text-center">Les Duo</h2>
            <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
        </div>
        <div class="row articles">
            <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/Cyemci%20&%20Natoo.jpg"></a>
                <h3 class="name">Cyemci &amp; Natoo</h3>
                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a href="/profile?id=<?= $element['id_dj'] ?>" class="btn custom-btn m-5" type="button" style="box-shadow: 0px 0px 8px rgb(0,0,0);">Voir le profil</a><a class="btn active custom-btn" type="button" style="box-shadow: 0px 0px 5px rgb(0,0,0); border-radius:50px;">Réserver</a>
            </div>
            <div class="col-sm-6 col-md-4 item"><a href="#"><img class="img-fluid" src="assets/img/chronix%20&%20mbints.jpg"></a>
                <h3 class="name">Mbints &amp; Chronix</h3>
                <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida. Aliquam varius finibus est, interdum justo suscipit id.</p><a href="/profile?id=<?= $element['id_dj'] ?>" class="btn custom-btn m-5" type="button" style="box-shadow: 0px 0px 8px rgb(0,0,0);">Voir le profil</a><a class="btn active custom-btn" type="button" style="box-shadow: 0px 0px 5px rgb(0,0,0); border-radius:50px;">Réserver</a>
            </div>



        </div>
    </div>
</div> -->

<section class="schedules-section section-padding">
    <h2 style="color: white;">
        <center>Rejoignez la communauté de MadDJ</center>
    </h2>
    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center" style="border-width: 1px;border-style: solid;border-radius: 10px;margin-top: 10px;margin-bottom: 30px;">
                    <div>
                        <p style="color: white; margin-top:20px"><strong>Êtes-vous un(e) DJ? Vous souhaitez vous faire connaître et vous voulez plus de réservation?</strong></p>
                        <p style="color: white;">MadDJ est fait pour vous mettre en relation avec des personnes qui organisent des événements.</p>
                        <?php
                        if (!isset($_SESSION['auth'])) :

                        ?>
                    </div><button class="btn custom-btn my-3" type="submit">Inscrivez-vous</button>
                <?php endif ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center" style="border-width: 1px;border-style: solid;border-radius: 11px;">
                    <div>
                        <p style="color: white; margin-top:20px"><strong>Vous ne connaissez pas de quels DJ vous reserver?Ou Vous rechercher la meilleur DJ?</strong></p>
                        <p style="color: white;">Vous êtes en bon endroit, MadDJ vous propose les meilleurs DJs à Madagascar pour vivre une moment innoubliable.</p>
                        <?php
                        if (!isset($_SESSION['auth'])) :

                        ?>
                    </div><button class="btn custom-btn my-3" type="button">Inscrivez-vous</button>
                <?php endif ?>
                </div>
            </div>
        </div>
    </div>

</section>