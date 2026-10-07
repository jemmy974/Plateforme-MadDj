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





<section class="ticket-section section-padding">
    <div class="section-overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-10 mx-auto">
                <form class="custom-form ticket-form mb-5 mb-lg-0" action="/payement?id=<?= $payement ?>" method="post" role="form">
                    <h2 class="text-center mb-4">Get started here</h2>

                    <div class="ticket-form-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="text" name="nom" id="ticket-form-name" class="form-control" placeholder="Full name" required>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <input type="tel" name="telephone" id="ticket-form-email" class="form-control" placeholder="Votre numèro" required>
                            </div>
                        </div>

                        <input type="tel" class="form-control" name="reference" placeholder="La réference" required="">

                        <h6>Choisir le type d'abonnement</h6>

                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-check form-control">
                                    <input class="form-check-input" type="radio" name="typeA" id="flexRadioDefault1" value="Un an">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Une année 60.000 Ar
                                    </label>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-check form-check-radio form-control">
                                    <input class="form-check-input" type="radio" name="typeA" id="flexRadioDefault2" value="standard">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        mois 5.000 Ar
                                    </label>
                                </div>
                            </div>
                        </div>

                        <input type="number" name="mois" id="ticket-form-number" class="form-control" placeholder="Mois" required>

                        <input type="email" name="email" id="ticket-form-number" class="form-control" placeholder="Votre e-mail" required>

                        <div class="col-lg-4 col-md-10 col-8 mx-auto">
                            <button type="submit" name="submit" class="form-control">Envoyez</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</section>
</main>