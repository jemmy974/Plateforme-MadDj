<?php if (isset($_SESSION['success_message'])) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
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
                    <strong class="text-dark">Welcome to Music Festival 2023</strong>
                </p>
            </div>

        </div>
    </div>
</header>






<div>
    <div>
        <div class="bg-white shadow rounded overflow-hidden">
            <div class="px-4 pt-0 pb-4 cover">
                <div style=" background-image:url('/upload/couverture/<?= $deejay['couverture'] ?>'); background-position:center; background-size:cover; height:500px;" name="couverture"></div>
                <div class="d-flex align-items-end profile-head media">
                    <div class="profile me-3"><img class="rounded mb-2 img-thumbnail" src="/upload/pdp/<?= $deejay['pdp'] ?>" alt="..." width="130" style="margin-top: -100px; margin-left:20px;"> <?php
                                                                                                                                                                                                    if (isset($_SESSION['auth']) && isset($_SESSION["auth_deejay"])) :
                                                                                                                                                                                                    ?><a class="btn btn-outline-dark btn-sm d-block w-100" role="button" href="/editProfil?id=<?= $deejay['id_dj'] ?>">Edit profile</a><?php endif ?></div>
                    <div class="text-white mb-5 media-body">
                        <h4 class="mt-0 mb-0"><?= $deejay['nom'] ?></h4>
                        <p class="small mb-4"><i class="fas fa-map-marker-alt me-2"></i><?= $deejay['localisation'] ?></p>
                    </div>
                </div>
            </div>
            <div class="text-center bg-light justify-content-end d-flex p-4">
                <div class="d-flex">
                    <div class="d-flex">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item">
                                <h5 class="font-weight-bold mb-0 d-block">A partir de <?= $deejay['tarif'] ?></h5><small class="text-muted"><i class="fas fa-money me-1"></i>&nbsp;Prix en Ariary</small>
                            </li>
                        </ul>
                    </div>
                    <div class="d-flex">
                        <?php
                        if (isset($_SESSION['auth_users']) && $_SESSION['auth_users']['statut'] === 'Organisateur') :
                        ?>
                            <a class="btn custom-btn active mx-5 my-2" role="button" href="/formulaire?id=<?= $deejay['id_dj'] ?>" style="padding-top: 15px;">Réservez vos dates</a>
                        <?php endif ?>
                        <?php
                        if (isset($_SESSION['auth']) && isset($_SESSION["auth_deejay"])) :
                        ?>
                            <a id="Voir_resa" class="btn custom-btn active m-2" role="button" href="/dashDj?id=<?= $_SESSION["auth_deejay"]["id_dj"] ?>" style="padding-top: 15px;">Voir la réservation</a>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <div class="px-4 py-3">
                <h5 class="mb-0">Description</h5>
                <div class="bg-light shadow-sm p-4 rounded">
                    <p class="fst-italic mb-0">
                        <?= $deejay['descri'] ?>
                    </p>
                    <!-- <p class="fst-italic mb-0">Lives in New York</p>
                    <p class="fst-italic mb-0">Photographer</p> -->
                    <?php
                    if (isset($_SESSION['auth'])) :
                    ?>

                    <?php endif ?>
                </div>
            </div>
            <div class="py-4 px-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0">Recent photos</h5><a class="btn btn-link" role="button" href="modal">Show all</a>
                </div>
                <div class="row">
                    <div class="col-lg-6 mb-2 pe-lg-1"><img class="rounded img-fluid shadow-sm" src="/upload/photo/<?= $deejay['photo1'] ?>" alt=""></div>
                    <div class="col-lg-6 mb-2 ps-lg-1"><img class="rounded img-fluid shadow-sm" src="/upload/photo/<?= $deejay['photo2'] ?>" alt=""></div>
                    <div class="col-lg-6 pe-lg-1 mb-2"><img class="rounded img-fluid shadow-sm" src="/upload/photo/<?= $deejay['photo3'] ?>" alt=""></div>
                    <div class="col-lg-6 ps-lg-1"><img class="rounded img-fluid shadow-sm" src="/upload/photo/<?= $deejay['photo4'] ?>" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- <section id="calendrier" style="background: rgba(255,255,255,0.74);"> -->
<div>
    <!-- <h5 class="mb-0">Calendrier</h5> -->

    <!-- <div id="modal-1" class="modal fade" role="dialog" tabindex="-1">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Modal Title</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div></div>
            </div>
            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div>
        </div>
    </div>
</div> -->





    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="mb-0 m-3">Calendrier</h5> <?php
                                                if (isset($_SESSION['auth'])) :
                                                ?><a class="btn btn-link" role="button" name="calendrier" href="/calendrier?id=<?= $deejay['id_dj'] ?>">Modifier</a> <?php endif ?>
    </div>

    <div style="margin:46px; height:auto">
        <?php foreach ($evenement as $element) : ?>
            <div class="row row-striped">
                <!-- <div class="col-2 text-center ">
                    <h1 class="display-4 "><span class="badge date-green">14</span></h1>
                    <h2>FEB</h2>
                </div> -->

                <div class="col-10">

                    <h3 class="text-uppercase" name="Nom_evenement"><strong><?= $element['Nom_evenement'] ?></strong></h3>
                    <ul class="list-inline">
                        <li class="list-inline-item" name="Date_evenement"><i class="fa fa-calendar-o" aria-hidden="true"></i> <?= $element['Date_evenement'] ?></li>
                        <li class="list-inline-item" name="heure_evenement"><i class="fa fa-clock-o" aria-hidden="true"></i><?= $element['heure_evenement'] ?></li>
                        <li class="list-inline-item" name="localisation_evenement"><i class="fa fa-location-arrow" aria-hidden="true"></i> <?= $element['localisation_evenement'] ?></li>
                    </ul>
                    <p name="Description"><?= $element['Description_evenement'] ?></p>

                </div>

            </div>

        <?php endforeach ?>
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
<section class="m-5" id="fAQ" style="height: auto;background: #ffffff;">
    <fieldset style="width:60%; margin:0 auto;">
        <legend>
            <h3> FAQ</h3>
        </legend>

        <div id="demo" style="margin:3px">
            <p><strong>Pour quel type d'événement jouez vous en général? Mariage,...</strong></p>
            <div><?= $deejay['faq1'] ?></div>

        </div>
        <div id="demo" style="margin:3px">
            <p><strong>Est-il possible de choisir les chansons qui seront jouées?</strong></p>
            <div><?= $deejay['faq2'] ?></div>

        </div>


    </fieldset>


</section>
<section class="d-flex justify-content-evenly bg-light shadow-sm p-10" style="margin: 0px;margin-right: 0px;padding-right: 0px;">
    <div style="background: #ffffff;margin: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-facebook d-flex" style="font-size: 192px;">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
        </svg>
        <h3><?= $deejay['nom'] ?></h3>
    </div>
    <div style="background: #ffffff;margin: 10px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-instagram d-flex" style="font-size: 192px;">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path>
        </svg>
        <h3><?= $deejay['nom'] ?></h3>
    </div>
    <div style="background: #ffffff;padding: 10px;margin-right: 0px;"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" viewBox="0 0 16 16" class="bi bi-whatsapp d-flex" style="font-size: 192px;">
            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"></path>
        </svg>
        <h3><?= $deejay['nom'] ?></h3>
    </div>
</section>



<style>
    fieldset,
    legend {
        all: revert;

    }
</style>