<h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">Demande d'inscription</h2>
<div class="container-fluid">
    <div class="row">
        <div class="col-12 col-sm-6 col-md-6">
            <!-- <h3 class="text-dark mb-4">Ludens</h3> -->
        </div>
        <!-- <div class="col-12 col-sm-6 col-md-6 text-end" style="margin-bottom: 30px;"><a class="btn btn-primary" role="button"><i class="fa fa-plus"></i>&nbsp;Agregar colaborador</a></div> -->
    </div>
    <div class="card" id="TableSorterCard">
        <div class="card-header py-3">
            <div class="row table-topper align-items-center">
                <div class="col-12 col-sm-5 col-md-6 text-start" style="margin: 0px;padding: 5px 15px;">
                    <p class="text-primary m-0 fw-bold">Colaboradores</p>
                </div>
                <div class="col-12 col-sm-7 col-md-6 text-end" style="margin: 0px;padding: 5px 15px;"><button class="btn btn-primary btn-sm reset" type="button" style="margin: 2px;">Borrar Filtros</button><button class="btn btn-warning btn-sm" id="zoom_in" type="button" zoomclick="ChangeZoomLevel(-10);" style="margin: 2px;"><i class="fa fa-search-plus"></i></button><button class="btn btn-warning btn-sm" id="zoom_out" type="button" zoomclick="ChangeZoomLevel(-10);" style="margin: 2px;"><i class="fa fa-search-minus"></i></button></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table table-striped table tablesorter" id="ipi-table">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">Nom COMPLET</th>
                                <th class="text-center">LOCATION</th>
                                <th class="text-center">EMAIL</th>
                                <th class="text-center">NUMERO TELEPHONE</th>
                                <th>DATE DE NAISSANCE</th>
                                <th class="text-center filter-false sorter-false">AcTIONS</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td>Rabe</td>
                                <td>Deejay</td>
                                <td>Diseñador@gmail.com</td>
                                <td>0337867635</td>
                                <td>5 Janvier 2001</td>
                                <td class="text-center align-middle" style="max-height: 60px;height: 60px;"><button class="btn btnMaterial btn-flat primary semicircle" role="button" data-bs-target="#modal-2" data-bs-toggle="modal" href="#"><i class="far fa-eye"></i></button><a class="btn btnMaterial btn-flat success semicircle" role="button" href="#"><i class="fas fa-check"></i></a><a class="btn btnMaterial btn-flat accent btnNoBorders checkboxHover" role="button" style="margin-left: 5px;" data-bs-toggle="modal" data-bs-target="#delete-modal" href="#"><i class="fas fa-trash btnNoBorders" style="color: #DC3545;"></i></a></td>
                            </tr>
                            <tr>
                                <td>Vaza<br></td>
                                <td>Deejay<br></td>
                                <td>Desarrollador@gmail.com</td>
                                <td>0345678099</td>
                                <td>21 mars 2006</td>
                                <td class="text-center align-middle" style="max-height: 60px;height: 60px;"><a class="btn btnMaterial btn-flat primary semicircle" role="button" href="#"><i class="far fa-eye"></i></a><a class="btn btnMaterial btn-flat success semicircle" role="button" href="#"><i class="fas fa-check"></i></a><a class="btn btnMaterial btn-flat accent btnNoBorders checkboxHover" role="button" style="margin-left: 5px;" data-bs-toggle="modal" data-bs-target="#delete-modal" href="#"><i class="fas fa-trash btnNoBorders" style="color: #DC3545;"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>





<div class="modal fade" role="dialog" tabindex="-1" id="modal-2">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Modal Title</h4><button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <main class="page" style="min-height: 100%;">
                    <section class=" about-us">
                        <!-- (clean-block) Mipetraka eo @class ambony -->
                        <div class="row justify-content-center" style="margin-right: 0px;margin-left: 0px;">
                            <div style="padding-right: 0px;padding-left: 0px;">
                                <div class="card clean-card text-center"><img class="card-img-top w-50 h-50 d-block center" src="assets/img/1.jpg">
                                    <div class="card-body info p-5">
                                        <div class="row" style="margin-top: -24px;">
                                            <div class="col-md-12" style="margin-top: 22px;">
                                                <div class="row">
                                                    <div class="col p-3">
                                                        <p class="labels"><strong>Nom</strong></p>
                                                    </div>
                                                    <div class="col p-3">
                                                        <p class="labels">usuarioPrueba</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col p-3">
                                                        <p class="labels"><strong>Télephone</strong></p>
                                                    </div>
                                                    <div class="col p-3">
                                                        <p class="labels">6622971893</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col p-3">
                                                        <p class="labels"><strong>Localisation</strong></p>
                                                    </div>
                                                    <div class="col p-3">
                                                        <p class="labels">México</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col p-3">
                                                        <p class="labels"><strong>E-mail</strong></p>
                                                    </div>
                                                    <div class="col p-3">
                                                        <p class="labels">Sonora</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col p-3">
                                                        <p class="labels"><strong>Date de Naissance</strong></p>
                                                    </div>
                                                    <div class="col p-3">
                                                        <p class="labels">Hermosillo</p>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col p-3">
                                                        <p class="labels"><strong>Nom facebook</strong></p>
                                                    </div>
                                                    <div class="col p-3">
                                                        <p class="labels">Hermosillo</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
            </div>
            <div class="modal-footer"><button class="btn btn-light" type="button" data-bs-dismiss="modal">Close</button></div>
        </div>
    </div>
</div>