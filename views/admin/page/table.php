<div class="container mx-auto grid px-6">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"> Tables </h2>

    <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"> Table avec avatars et actions </h4>
        <div class="w-full overflow-hidden rounded-lg shadow-xs">
            <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap" id="dash">
                    <thead>
                        <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                            <th class="px-4 py-3">Client</th>
                            <th class="px-4 py-3">Matricule</th>
                            <th class="px-4 py-3">Email</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Telephone</th>
                            <th class="px-4 py-3">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y dark:divide-gray-700 dark:bg-gray-800">
                        <?php foreach ($users as $element) : ?>
                            <tr class="text-gray-700 dark:text-gray-400">
                                <td class="px-4 py-3 ">
                                    <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block d-flex "><img alt="" class="object-cover w-full h-full rounded-full" src="/upload/pdp/<?= $element['pdp'] ?>">
                                        <div class="flex items-center text-sm mx-4"><?= $element['nom'] ?> <?= $element['prenom'] ?></div>
                                </td>
                                <td class="px-4 py-3 text-sm"><?= $element['Id_clients'] ?></td>
                                <td class="px-4 py-3 text-xs"><span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"><?= $element['email'] ?></span></td>
                                <td class="px-4 py-3 text-sm"><?= $element['statut'] ?></td>
                                <td class="px-4 py-3 text-sm"><?= $element['telephone'] ?></td>
                                <td class="px-4 py-3">
                                    <div class="flex items-center space-x-4 text-sm"><button aria-label="Edit" data-bs-target="#modal-1" data-bs-toggle="modal" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" type="submit"><svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20">
                                                <!-- <i class="bi bi-eye-fill"></i> -->
                                                <path class="text-center align-middle" style="max-height: 60px;height: 60px;"><a class="btn btnMaterial btn-flat primary semicircle" role="button" href="#"><i class="far fa-eye"></i></a></path>
                                            </svg></button><a href="delete_users?id=<?= $element['Id_clients'] ?>" aria-label="Delete" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"><svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20">
                                                <path d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" fill-rule="evenodd"></path>
                                            </svg></a></div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>

        </div>


        <?php foreach ($users as $element) : ?>
            <div class="modal fade" role="dialog" tabindex="-1" id="modal-1">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Modification</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <!-- <main class="page" style="min-height: 100%; min-width: 100%;">
                        <section class="clean-block about-us">
                            <div class="row justify-content-center" style="margin-right: 0px;margin-left: 0px;">
                                <div class="col-sm-6 col-lg-4" style="padding-right: 0px;padding-left: 0px;"> -->
                            <div class="card clean-card text-center"><img class="card-img-top w-100 d-block" src="/upload/pdp/<?= $element['pdp'] ?>">
                                <div class="card-body info">
                                    <div class="row" style="margin-top: -24px;">
                                        <div class="col-md-12" style="margin-top: 22px;">
                                            <div class="row">

                                                <div class="col p-3">

                                                    <p class="labels" name="prenom"><strong>Nom</strong></p>
                                                </div>

                                                <div class="col p-3">
                                                    <p class="labels"><?= $element['nom'] ?></p>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="col">
                                                    <p class="labels" name="telephone"><strong>Date de naissance</strong></p>
                                                </div>
                                                <div class="col p-3">
                                                    <p class="labels"><?= $element['dateN'] ?></p>
                                                </div>


                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col">
                                                <p class="labels" name="Deejay"><strong>Description</strong></p>
                                            </div>
                                            <div class="col p-3">
                                                <p class="labels"><?= $element['descri'] ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12"><a class="btn btn-success" role="submit" href="modification/edit" name="submit"><i class="fas fa-pencil-alt"></i>&nbsp;Editar</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        <?php endforeach ?>
        <!-- <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button><button class="btn btn-primary" type="button">Save</button></div> -->
    </div>
</div>
</div>