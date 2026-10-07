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




<div class="container mx-auto px-6 grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200"> Abonnement </h2>
    <p class="mb-8 text-gray-600 dark:text-gray-400"> Liste d'abonnement par <a class="text-purple-600 dark:text-purple-400 hover:underline" href="https://www.chartjs.org/"> MadDj </a> Tous les Deejays doivent payer chaque abonnement quand ils ont intégré dans le membre MadDj </p>
</div>
<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">

    <thead>
        <tr>
            <th>Name</th>
            <th>Type d'abonnement</th>
            <th>Reference de payement</th>
            <th>email</th>
            <th>Start date</th>
            <th>Telephone</th>
            <th>Mois</th>
            <th>Statut</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($payement as $element) : ?>
            <tr>
                <td> <?= $element['nom'] ?></td>
                <td><?= $element['typeA'] ?></td>
                <td><?= $element['reference'] ?></td>
                <td><?= $element['email'] ?></td>
                <td><?= $element['dateP'] ?></td>
                <td><?= $element['telephone'] ?></td>
                <td><?= $element['mois'] ?></td>
                <td><?= $element['statut'] ?></td>
                <td><a class="btn btnMaterial btn-flat success semicircle" role="button" href="/active?id=<?= $element['id_abonnement'] ?>"><i class="fas fa-check"></i></a><a class="btn btnMaterial btn-flat accent btnNoBorders checkboxHover" role="button" style="margin-left: 5px;" href="/desactive?id=<?= $element['id_abonnement'] ?>"><i class="fas fa-trash btnNoBorders" style="color: #DC3545;"></i></a></td>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>