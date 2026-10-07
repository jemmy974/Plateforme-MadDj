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
                    <strong class="text-dark">Welcome to MadDJ 2024</strong>
                </p>
            </div>

        </div>
    </div>
</header>


<div class="profile-card" style="border-style: none;">
    <div style=" background-image:url('/upload/couverture/<?= $deejay['couverture'] ?>'); background-position:center; background-size:cover; height:500px;"></div>

</div><img class="rounded-circle img-fluid d-md-flex justify-content-md-start profile-pic" src="/upload/pdp/<?= $deejay['pdp'] ?>" style="margin-top: -50px;">
<div class="d-flex justify-content-lg-start">
    <h4><?= $deejay['nom'] ?></h4>
</div>
</div>

<form action="/updateInfo?id=<?= $_GET['id'] ?>" method="POST" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-center">
                <section style="padding: 0px;">
                    <div>
                        <h5 class="mb-10">
                            Votre Profil </h5>
                        <div class="form-floating m-3 w-50">
                            <input type="text" class="form-control" id="floatingInput" value="<?= $deejay['nom'] ?>" name="nom">
                            <label for="floatingInput">Nom</label>
                        </div>

                        <div class="form-floating m-3 w-50">
                            <input type="text" class="form-control" id="floatingInput" value="<?= $deejay['localisation'] ?>" name="localisation">
                            <label for="floatingInput">Localisation</label>
                        </div>

                    </div>
                    <div class="form-floating m-3 w-50">
                        <input type="number" class="form-control" id="floatingInput" value="<?= $deejay['tarif'] ?>" name="tarif">
                        <label for="floatingInput">Tarif</label>
                    </div>
                    <div>

                        <div class="form-floating m-3">
                            <textarea name="descri" class="form-control" id="floatingTextarea2" style="width: 800px; height: 200px;" placeholder="Votre Bio" value="<?= $deejay['descri'] ?>"></textarea>
                            <label for="floatingTextarea2">Votre Bio</label>
                        </div>
                    </div>

                </section>
            </div>
        </div>
        <button class="btn custom-btn smoothscroll m-2 d-flex" type="submit" name="update">Enregistrer</button>
        <hr>
    </div>
</form>

<form action="/updatePdp?id=<?= $_GET['id'] ?>" method="POST">
    <div class="row" style="margin-bottom: 10px;margin-top: 10px;">
        <div class="col-md-6">
            <h5>Photo de Profil</h5>
            <div style="align-content:center;">
                <picture>
                    <source srcset="/upload/pdp/<?= $deejay['pdp'] ?>" type="image/svg+xml" />
                    <img src="/upload/pdp/<?= $deejay['pdp'] ?>" class="img-fluid w-30 h-30 m-10" style="border-radius: 50%;" alt="image desc" />
                    <input type="file" name="pdp" id="">
                </picture>
                <br><button class="btn custom-btn smoothscroll m-2" type="submit" name="update">Enregistrer</button>
                <hr>
            </div>
        </div>
    </div>

</form>
<form action="/updateCouverture?id=<?= $_GET['id'] ?>" method="POST" enctype="multipart/form-data">
    <div class="col-md-6">

        <h5>Photo de couverture</h5>
        <div>
            <picture>

                <div>
                    <img src="/upload/couverture/<?= $deejay['couverture'] ?>" class=" d-flex img-fluid w-50 h-30 m-10 justify-content-center" alt="image desc" />
                </div>
                <input type="file" name="couverture" id="">
            </picture>
            <br>
            <button class="btn custom-btn smoothscroll m-2" type="submit" name="update">Enregistrer</button>
            <hr>
        </div>
    </div>

</form>

<div class="container">
    <div class="row">
        <form action="/updatePhoto?id=<?= $_GET['id'] ?>" method="POST" enctype="multipart/form-data">

            <div class="col-md-12">
                <h5>Image</h5>
                <div class="input-group m-3">
                    <label for="input-group-text" class="m-1" for="inputGroupFile1">Image 1</label>
                    <input type="file" class="form-control" id="inputGroupFile1" name="photo1">
                </div>
                <div class="input-group m-3">
                    <label for="input-group-text" class="m-1" for="inputGroupFile2">Image 2</label>
                    <input type="file" class="form-control" id="inputGroupFile2" name="photo2">
                </div>
                <div class="input-group m-3">
                    <label for="input-group-text" class="m-1" for="inputGroupFile1">Image 3</label>
                    <input type="file" class="form-control" id="inputGroupFile1" name="photo3">
                </div>
                <div class="input-group m-3">
                    <label for="input-group-text" class="m-1" for="inputGroupFile2">Image 4</label>
                    <input type="file" class="form-control" id="inputGroupFile2" name="photo4">
                </div>
                <button class="btn custom-btn smoothscroll m-2" type="submit" name="update">Enregistrer</button>
            </div>
            </fieldset>
        </form>
    </div>
</div>

<form action="/updatefaq?id=<?= $_GET['id'] ?>" method="post">
    <section class="m-5" id="fAQ" style="height: auto;background: #ffffff;">
        <fieldset style="width:60%; margin:0 auto;">
            <legend>
                <h3> FAQ</h3>
            </legend>

            <div id="demo">
                <p>Pour quel type d'événement jouez vous en général? Mariage,...</p>
                <div class="form-floating m-3">
                    <textarea name="faq1" class="form-control" id="floatingTextarea2" style="width: 800px; height: 200px;" placeholder="Votre Bio"></textarea>
                    <label for=" floatingTextarea2">Votre réponse</label>
                </div>

            </div>
            <div id="demo">
                <p>Est-il possible de choisir les chansons qui seront jouées?</p>
                <div class="form-floating m-3">
                    <textarea name="faq2" class="form-control" id="floatingTextarea2" style="width: 800px; height: 200px;" placeholder="Votre Bio"></textarea>
                    <label for="floatingTextarea2">Votre réponse</label>
                </div>

            </div>
            <button class="btn custom-btn smoothscroll m-2" type="submit" name="update">Enregistrer</button>

        </fieldset>


    </section>
</form>