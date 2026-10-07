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








<form action="/calendriers?id=<?= $calendrier ?>" method="POST">
    <div class="container py-4 py-xl-5">
        <div class="row gy-4 gy-md-0">
            <div class="col-md-6">
                <div class="p-xl-5 m-xl-5"><img class="rounded img-fluid w-100 fit-cover" style="min-height: 300px;" src="assets/img/Booking.jpg"></div>
            </div>
            <div class="col-md-6" style="background: var(--bs-emphasis-color); padding-top:100px;">
                <div class="form-floating m-3 w-95">
                    <input type="text" class="form-control" id="floatingInput" name="nomE" required>
                    <label for="floatingInput">Nom de votre évènement</label>
                </div>
                <div class="col-2 d-flex">
                    <div class="form-floating m-3 w-95">
                        <input type="Date" class="form-control" id="floatingInput" name="dateE" required>
                        <label for="floatingInput">Date d'évènement</label>
                    </div>
                    <div class="form-floating m-3 w-200">
                        <input type="time" class="form-control" id="floatingInput" name="heureE" required>
                        <label for="floatingInput">Heure d'évènement</label>
                    </div>
                </div>
                <div class="form-floating m-3 w-95">
                    <input type="text" class="form-control" id="floatingInput" name="localisation" required>
                    <label for="floatingInput">Localisation</label>
                </div>
                <div class="form-floating m-3">
                    <textarea name="descri" class="form-control" id="floatingTextarea2" style="width: 400px; height: 200px;" placeholder="Votre Bio"></textarea>
                    <label for="floatingTextarea2">Avez-vous des choses ajouter?</label>
                </div>
                <div class="p-t-20">
                    <button class="btn custom-btn " type="submit" name="submit">Réserver</button>
                </div>
            </div>
        </div>
    </div>
</form>