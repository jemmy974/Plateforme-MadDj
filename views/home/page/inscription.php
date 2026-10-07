<section style=" background: url(assets/img/nicholas-green-unsplash-blur.jpg) no-repeat center/cover;width:100%; height:100%;">

    <form class="m-auto" style="background-color: white; opacity:0.75;width:900px;" action="/register" method="POST" enctype="multipart/form-data">


        <div class="container profile profile-view" id="profile" style="width:100%;">
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


            <div class=" row profile-row ">
                <div class="col-md-4 relative">
                    <div class="avatar">
                        <div class="avatar-bg center"></div>
                    </div><input class="form-control form-control" type="file" name="pdp">
                </div>
                <div class="col-md-8" style="color: grey;">
                    <h1>Profile </h1>
                    <hr>
                    <div class="row" style="color:gray">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3"><label class="form-label">Nom </label><input class="form-control" type="text" name="nom"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3"><label class="form-label">Prenom </label><input class="form-control" type="text" name="prenom" required=""></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3"><label class="form-label">Localisation </label><input class="form-control" type="text" name="localisation" required=""></div>
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3"><label class="form-label">Date de Naissance </label><input class="form-control" type="Date" name="Date" required=""></div>
                        </div>

                        <div class="form-group mb-3"><label class="form-label">Email </label><input class="form-control" type="email" autocomplete="off" name="email" required=""></div>

                    </div>



                    <div class="form-group mb-3" style="color: grey;"><label class="form-label">Numero Télephone&nbsp;</label><input class="form-control" type="text" inputmode="numeric" autocomplete="off" name="telephone" required="Veuillez remplir le numero de téléphone"></div>
                    <div class="form-group mb-3"><label class="form-label">Nom Facebook (Faculte)</label><input class="form-control" type="text" autocomplete="off" name="facebook"></div>




                    <div class="row" style="color: grey;">
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3"><label class="form-label">Password </label><input class="form-control" type="password" name="mdp" autocomplete="off"></div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="form-group mb-3"><label class="form-label">Confirm Password</label><input class="form-control" type="password" name="Cmdp" autocomplete="off"></div>
                        </div>
                    </div>

                    <fieldset name="statut">
                        <legend>Choisir votre place:</legend>
                        <div>
                            <input type="radio" id="Deejay" name="Deejay" value="Deejay" checked />
                            <label for="Deejay">Deejay</label>
                        </div>
                        <div>
                            <input type="radio" id="organisateur" name="Deejay" value="Organisateur" />
                            <label for="organisateur">Organisateur d'évènement</label>
                        </div>
                    </fieldset>




                    <!-- <hr>
                <div>
                    <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-1"><label class="form-check-label" for="formCheck-1" name="statut">Deejay</label></div>
                    <div class="form-check"><input class="form-check-input" type="radio" id="formCheck-2"><label class="form-check-label" for="formCheck-2" name="statut">clients</label></div>
                </div>
                <hr> -->
                    <div class="row">
                        <div class="col-md-12 content-right">
                            <button class="btn btn-primary form-btn" type="submit" name="submit">SAVE </button>
                            <a value="Go back!" onclick="history.back()" class="btn btn-danger form-btn" type="reset">CANCEL </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </form>



</section>