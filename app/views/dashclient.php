<?php
require APPROOT . '/views/includes/head.php';
?>
<!-- Modal reserver-->
<div class="modal fade" id="reserverModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-header justify-content-center">
                <h5 class="modal-title text-success" id="deleteModaltitle">Alerte! Réservation du transport</h5>
            </div>
            <div class="px-4 py-3">
                Êtes-vous sûr de vouloir réserver ce transport?<br>
            </div>
            <form action="<?php echo URLROOT; ?>/Reservationcontroller/reserver" method="POST">
                <input type="text" name="trport_id" class="trport_id d-none">
                <input type="text" name="trport_matricule" class="trport_matricule d-none">
                <input type="text" name="trport_genre" class="trport_genre d-none">

                <input type="text" name="trteur_id" class="trteur_id d-none">
                <input type="text" name="client_nom" class="d-none" value="<?php echo $_SESSION['nom'] ?>">
                <input type="text" name="client_email" class="d-none" value="<?php echo $_SESSION['email'] ?>">

                <input type="text" name="ville_souhaite" placeholder="Entrer la ville" required>
                <input type="date" name="date_souhaite" class="" required>

                <input type="text" name="validation" class="d-none" value="En attente">
                <div class="px-4 py-3">
                    <button type="submit" name="save" class="btn btn-success mr-2">Oui, réserver ce transport.</button>
                </div>
            </form>
        </div>
    </div>
</div>
<section class="container-fluid px-0 mx-0">

    <nav class="navbar navbar-dark bg-dark sticky-top navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="home">
                <img src="<?php echo URLROOT ?>/public/img/logoWhite.png" alt="" width="150" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-2 mb-2 mb-lg-0 mt-2">
                     <li class="nav-item"><a href="<?php echo URLROOT ?>/Transporteurcontroller/logout" class="btn btn-danger text-white text-decoration-none fs-6 w-100"><i class="bi bi-box-arrow-in-right me-2"></i>Déconnexion</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid mt-3 d-flex justify-content-between mx-auto row fixed-start">
        <div class="col-lg-3 col-sm-12 mb-3">
            <div class="container bg-dark rounded p-3">
                <h1 class=""><i class="bi bi-person-lines-fill text-white"></i></h1>
                <h4 class="text-white text-center pb-2 border-bottom"><?php echo $_SESSION['nom'] ?></h4>
                <h6 class="text-white text-center"><?php echo $_SESSION['role'] ?></h6>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12 mb-3">
            <div class="container bg-dark rounded text-white p-3">
                <h1 class="text-white"><i class="bi bi-info-circle-fill text-white"></i> </h1>
                <h4 class="text-white text-center pb-2 border-bottom">LISTES TRANSPORTS</h4>
                <div class="row mt-4">
                    <div>
                        <table class="table table-dark table-responsive table-striped mx-auto">
                            <thead>
                                <tr>
                                    <th scope="col">Genre</th>
                                    <th scope="col">Matricule</th>
                                    <th scope="col">Coffre</th>
                                    <th scope="col">Ville</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <?php
                            if (count($data['transport']) > 0) { ?>
                                <?php foreach ($data['transport'] as $row) { ?>
                                    <tbody>
                                        <tr>
                                            <td class="d-none"><?php echo $row->id ?></td>
                                            <td class="d-none"><?php echo $row->tr_id ?></td>
                                            <td><?php echo $row->genre ?></td>
                                            <td><?php echo $row->matricule ?></td>
                                            <td><?php echo $row->volume_coffre ?></td>
                                            <td><?php echo $row->ville ?></td>
                                            <td class="btn btn-success btn-delete" type="button" data-bs-toggle="modal" data-bs-target="#reserverModal" style="background-color: black;">Réserver</td>
                                        </tr>
                                    </tbody>
                                <?php } ?>
                            <?php } else { ?>
                                <tbody>
                                    <td colspan="6">
                                        <div class="text-center">
                                            <h1 class="pt-5">No Results Found</h1>
                                        </div>
                                    </td>
                                </tbody>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12">
            <div class="container bg-dark rounded text-white p-3">
                <h1 class="text-white"><i class="bi bi-info-circle-fill text-white"></i> </h1>
                <h4 class="text-white text-center pb-2 border-bottom">LISTES RESERVATIONS</h4>
                <div class="row mt-4">
                    <div>
                        <table class="table table-dark table-responsive table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Genre</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Validation</th>
                                </tr>
                            </thead>
                            <?php
                            if (count($data['reservation']) > 0) { ?>
                                <?php foreach ($data['reservation'] as $row) { ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $row->trport_genre ?></td>
                                            <td><?php echo $row->date_souhaite ?></td>
                                            <td><?php echo $row->validation ?></td>
                                        </tr>
                                    </tbody>
                                <?php } ?>
                            <?php } else { ?>
                                <tbody>
                                    <td colspan="3">
                                        <div class="text-center">
                                            <h1 class="pt-5">Pas de réservation</h1>
                                        </div>
                                    </td>
                                </tbody>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    document.querySelectorAll('.btn-delete').forEach(function(btn) {

        btn.addEventListener('click', function(com) {
            let item = com.target.parentElement.parentElement;
            let children = item.children;

            let trport_id = children[0].children[0].textContent;
            let trteur_id = children[0].children[1].textContent;
            let trport_matricule = children[0].children[2].textContent;
            let trport_genre = children[0].children[3].textContent;

            document.querySelector('#reserverModal .trport_id').value = trport_id;
            document.querySelector('#reserverModal .trteur_id').value = trteur_id;
            document.querySelector('#reserverModal .trport_matricule').value = trport_matricule;
            document.querySelector('#reserverModal .trport_genre').value = trport_genre;

        })
    })
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>


<?php
require APPROOT . '/views/includes/dashfooter.php';
?>