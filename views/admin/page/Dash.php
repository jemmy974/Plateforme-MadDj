<div class="container mx-auto px-6 grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"> Dashboard </h2>
    <div class="grid gap-6 mb-8 md:grid-cols-2 xl:grid-cols-4">
        <div class="bg-white flex items-center p-4 rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4 text-orange-500 bg-orange-100 rounded-full dark:text-orange-100 dark:bg-orange-500"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z"></path>
                </svg></div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"> Organisateur </p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200">1</p>
            </div>
        </div>
        <div class="bg-white flex items-center p-4 rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4 text-green-500 bg-green-100 rounded-full dark:text-green-100 dark:bg-green-500"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"></path>
                </svg></div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400"> Abonnement</p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200"><?= $counts['count'] ?></p>
            </div>
        </div>

        <div class="bg-white flex items-center p-4 rounded-lg shadow-xs dark:bg-gray-800">
            <div class="p-3 mr-4 text-teal-500 bg-teal-100 rounded-full dark:text-teal-100 dark:bg-teal-500"><svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"></path>
                </svg></div>
            <div>
                <p class="mb-2 text-sm font-medium text-gray-600 dark:text-gray-400">Les Deejays</p>
                <p class="text-lg font-semibold text-gray-700 dark:text-gray-200"><?= $count['count'] ?></p>
            </div>
        </div>
    </div>






    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap table" id="dash">
                <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                        <th scope="col" class="px-4 py-3">Client</th>
                        <th scope="col" class="px-4 py-3">Matricule</th>
                        <th scope="col" class="px-4 py-3">Email</th>
                        <th scope="col" class="px-4 py-3">Status</th>
                        <th scope="col" class="px-4 py-3">Telephone</th>
                        <!-- <th scope="col" class="px-4 py-3">Prénom</th> -->
                    </tr>
                </thead>
                <tbody class="divide-y dark:divide-gray-700 dark:bg-gray-800">

                    <?php foreach ($membre as $element) : ?>
                        <tr class="text-gray-700 dark:text-gray-400">
                            <!-- Sary pdp -->
                            <!-- <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block"><img alt="" class="object-cover w-full h-full rounded-full" src="assets/img/1.jpg">
                                <div aria-hidden="true" class="absolute inset-0 rounded-full shadow-inner"></div>
                            </div> -->
                            <th class="px-4 py-3" scope="row" style="display: flex;">
                                <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block"><img alt="" class="object-cover w-full h-full rounded-full" src="/upload/pdp/<?= $element['pdp'] ?>">
                                    <div aria-hidden="true" class="absolute inset-0 rounded-full shadow-inner"></div>
                                </div><?= $element['nom'] ?> <?= $element['prenom'] ?>
                            </th>

                            <td class="px-4 py-3 text-sm"><?= $element['Id_clients'] ?></td>
                            <!-- <td class="px-4 py-3 text-xs"><span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100">Deejay</span></td> -->
                            <td class="px-4 py-3 text-sm"><?= $element['email'] ?></td>
                            <td class="px-4 py-3 text-sm"><span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"><?= $element['statut'] ?></span></td>
                            <td class="px-4 py-3 text-sm"><?= $element['telephone'] ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>