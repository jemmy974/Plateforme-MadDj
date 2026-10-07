<form action="/formulaires?id=<?= $formulaire ?>" method="POST">
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Formulaire Evenemen soloina input</h2>
                    <form method="POST">
                        <div class="form-floating m-3 w-80">
                            <input type="text" class="form-control" id="floatingInput" name="nom" required>
                            <label for="floatingInput">Nom</label>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">

                                <div class="form-floating m-3 w-90">
                                    <input type="tel" class="form-control" id="floatingInput" name="telephone" required>
                                    <label for="floatingInput">Votre numéro télephone</label>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-floating m-3 w-95">
                                    <input type="email" class="form-control" id="floatingInput" name="email" required>
                                    <label for="floatingInput">E-mail</label>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">

                                <div class="form-floating m-3 w-90">
                                    <input type="date" class="form-control" id="floatingInput" name="dateE" required>
                                    <label for="floatingInput">Date d'évènement</label>
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-floating m-3 w-95">
                                    <input type="time" class="form-control" id="floatingInput" name="heureE" required>
                                    <label for="floatingInput">Heure d'évènement</label>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="row row-space"> -->
                        <div class="form-floating m-3 w-80">
                            <input type="text" class="form-control" id="floatingInput" name="lieuE" required>
                            <label for="floatingInput">Lieu d'évènement</label>
                        </div>
                        <!-- </div> -->
                        <div class="form-floating m-3">
                            <textarea name="descri" class="form-control" id="floatingTextarea2" style="width: 400px; height: 200px;" placeholder="Votre Bio"></textarea>
                            <label for="floatingTextarea2">Avez-vous des choses ajouter?</label>
                        </div>
                        <div class="p-t-20">
                            <button class="btn custom-btn " type="submit" name="reserver">Réserver</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</form>