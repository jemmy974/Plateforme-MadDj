<header class="site-header">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 d-flex flex-wrap">
                <p class="d-flex me-4 mb-0">
                    <i class="bi-person custom-icon me-2"></i>
                    <strong class="text-dark">Bienvenue dans votre tableau de bord</strong>
                </p>
            </div>

        </div>
    </div>
</header>


<div class="flex flex-1">
    <!--Sidebar-->
    <aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block" style=" margin-top: 150px;">

        <ul class="list-reset flex flex-col">
            <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
                <a href="/dashDj?id=<?= $_SESSION["auth_deejay"]["id_dj"] ?>" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                    <i class="fas fa-tachometer-alt float-left mx-2"></i>
                    Dashboard
                    <span><i class="fas fa-angle-right float-right"></i></span>
                </a>
            </li>
            <li class="w-full h-full py-3 px-2 border-b border-light-border">
                <a href="/reservationDj?id=<?= $_SESSION["auth_deejay"]["id_dj"] ?>" class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline">
                    <i class="fas fa-table float-left mx-2"></i>
                    Les réservation
                    <span><i class="fa fa-angle-right float-right"></i></span>
                </a>
            </li>

        </ul>


    </aside>
    <!--/Sidebar-->
    <!--Main-->
    <main class="bg-white-300 flex-1 p-3 overflow-hidden" style="margin-top: 150px;">

        <div class="flex flex-col">
            <!-- Stats Row Starts Here -->
            <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">
                <div class="shadow-lg bg-red-vibrant border-l-8 hover:bg-red-vibrant-dark border-red-vibrant-dark mb-2 p-2 md:w-1/4 mx-2">
                    <div class="p-4 flex flex-col no-underline text-white text-2xl">
                        <a href="#" class="no-underline text-white text-2xl">
                            
                             <?= $count ?> 
                             <!-- IO AMBANY IO NO ORIGINAL(63) nosoloina mantsy -->
                        </a>
                        <a href="#" class="no-underline text-white text-lg">
                            Total réservation DJ
                        </a>
                    </div>
                </div>


                <div class="shadow bg-success border-l-8 hover:bg-success-dark border-success-dark mb-2 p-2 md:w-1/4 mx-2">
                    <div class="p-4 flex flex-col">
                        <a href="#" class="no-underline text-white text-2xl">
                            <?= $count['count'] ?>

                        </a>
                        <a href="#" class="no-underline text-white text-lg">
                            Total réservation acceptée
                        </a>
                    </div>
                </div> 
            </div>

            <!-- /Stats Row Ends Here -->

            <!-- Card Sextion Starts Here -->
            <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2">

                <!-- card -->

                <div class="rounded overflow-hidden shadow bg-white mx-2 w-full">
                    <div class="px-6 py-2 border-b border-light-grey">
                        <div class="font-bold text-xl">Trending Categories</div>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-grey-darkest">

                            <thead class="bg-grey-dark text-white text-normal">
                                <tr>
                                    <th scope="col">Nom complet</th>
                                    <th scope="col">Telephone</th>
                                    <th scope="col">e-mail</th>
                                    <th scope="col">Date d'évènement</th>
                                    <th scope="col">heure d'évènement</th>
                                    <th scope="col">Lieu d'évènement</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($resa as $element) : ?>
                                    <tr>
                                        <th scope="row"><?= $element['nom'] ?></th>
                                        <td>
                                            <button class="bg-blue-500 hover:bg-blue-800 text-white font-light py-1 px-2 rounded-full">
                                                <?= $element['telephone'] ?>
                                            </button>
                                        </td>
                                        <td><?= $element['email'] ?></td>
                                        <td><?= $element['DateEvenement'] ?></td>
                                        <td>
                                            <span class="text-green-500"><i class="fas fa-arrow-up"></i><?= $element['heureEvenement'] ?></span>
                                        </td>

                                        <td>
                                            <span class="text-green-500"><i class="fas fa-arrow-up"></i><?= $element['Lieu'] ?></span>
                                        </td>
                                        <td>
                                            <span class="text-green-500"><i class="fas fa-arrow-up"></i><?= $element['statut'] ?></span>
                                        </td>
                                        <td>
                                            <div class="flex items-center space-x-4 text-sm"><a href="/accept?id=<?= $element['id_reservation'] ?>" aria-label="Accepté" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" type="submit" name="accept"><svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20">
                                                        <path class="text-center align-middle" style="max-height: 60px;height: 60px;"><a class="btn btnMaterial btn-flat success semicircle" role="button" href="#"><i class="fas fa-check"></i></a></path>
                                                    </svg></a><a href="/delete_reservation?id=<?= $element['id_reservation'] ?>" aria-label="Delete" class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray" name="refuse"><svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewbox="0 0 20 20">
                                                        <path d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" fill-rule="evenodd"></path>
                                                    </svg></a></div>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>

                        </table>
                    </div>
                </div>
                <!-- /card -->

            </div>
            <!-- /Cards Section Ends Here -->

            <!--Profile Tabs-->
            <div class="flex flex-1 flex-col md:flex-row lg:flex-row mx-2 p-1 mt-2 mx-auto lg:mx-2 md:mx-2 justify-between">

            </div>
            <!--/Profile Tabs-->
        </div>
    </main>
    <!--/Main-->
</div>