<?php
require APPROOT . '/views/includes/head.php';
?>
<!-- Modal delete-->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-header justify-content-center">
                <h5 class="modal-title text-danger" id="deleteModaltitle">Alerte! Suppression du transport</h5>
            </div>
            <div class="px-4 py-3">
                Êtes-vous sûr de vouloir supprimer?<br>
            </div>
            <form action="<?php echo URLROOT; ?>/Transportcontroller/delete" method="POST">
                <input type="text" name="id" class="id text-center d-none">
                <div class="px-4 py-3">
                    <button type="submit" name="save" class="btn btn-danger mr-2">Oui, supprimer ce transport.</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal valider-->
<div class="modal fade" id="validerModal" tabindex="-1" aria-labelledby="validerModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-header justify-content-center">
                <h5 class="modal-title text-success" id="deleteModaltitle">Alerte! Validation de la réservation</h5>
            </div>
            <div class="px-4 py-3">
                Êtes-vous sûr de vouloir valider?<br>
            </div>
            <form action="<?php echo URLROOT; ?>/Reservationcontroller/valider" method="POST">
                <input type="text" name="id" class="id text-center d-none">
                <div class="px-4 py-3">
                    <button type="submit" name="save" class="btn btn-success mr-2">Oui, valider la réservation.</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal annuler-->
<div class="modal fade" id="annulerModal" tabindex="-1" aria-labelledby="annulerModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-center">
            <div class="modal-header justify-content-center">
                <h5 class="modal-title text-danger" id="deleteModaltitle">Alerte! Annulation de la réservation</h5>
            </div>
            <div class="px-4 py-3">
                Êtes-vous sûr de vouloir annuler?<br>
            </div>
            <form action="<?php echo URLROOT; ?>/Reservationcontroller/annuler" method="POST">
                <input type="text" name="id" class="id text-center d-none">
                <div class="px-4 py-3">
                    <button type="submit" name="save" class="btn btn-danger mr-2">Oui, annuler la réservation.</button>
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
        <div class="col-lg-3 col-sm-12">
            <div class="container bg-dark rounded p-3 mb-3">
                <h1 class=""><i class="bi bi-person-lines-fill text-white"></i></h1>
                <h4 class="text-white text-center pb-2 border-bottom"><?php echo $_SESSION['nom'] ?></h4>
                <h6 class="text-white text-center"><?php echo $_SESSION['role'] ?></h6>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div>
                <div class="container bg-dark rounded text-white p-3">
                    <h1 class="text-white"><i class="bi bi-info-circle-fill text-white"></i> </h1>
                    <h4 class="text-white text-center pb-2 border-bottom">LISTES RESERVATIONS</h4>
                    <div class="row mt-4">
                        <div>
                            <table class="table table-dark table-responsive table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Client Email</th>
                                        <th scope="col">Ville</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Validation</th>
                                    </tr>
                                </thead>
                                <?php
                                if (count($data['reservation']) > 0) { ?>
                                    <?php foreach ($data['reservation'] as $row) { ?>
                                        <tbody>
                                            <tr>
                                                <td class="d-none"><?php echo $row->res_id ?></td>
                                                <td><?php echo $row->client_email ?></td>
                                                <td><?php echo $row->ville_souhaite ?></td>
                                                <td><?php echo $row->date_souhaite ?></td>
                                                <td class="btn btn-success btn-valider" type="button" data-bs-toggle="modal" data-bs-target="#validerModal" style="background-color: black;">valider</td>
                                                <td class="btn btn-danger btn-annuler" type="button" data-bs-toggle="modal" data-bs-target="#annulerModal" style="background-color: black;">annuler</td>
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
            <!--  -->
            <div class="mt-3">
                <div class="container bg-dark rounded text-white p-3">
                    <h1 class="text-white"><i class="bi bi-info-circle-fill text-white"></i> </h1>
                    <h4 class="text-white text-center pb-2 border-bottom">LISTES TRANSPORTS</h4>
                    <div class="row mt-4">
                        <div>
                            <table class="table table-dark table-responsive table-striped">
                                <thead>
                                    <tr>
                                        <th scope="col">Genre</th>
                                        <th scope="col">Matricule</th>
                                        <th scope="col">Coffre</th>
                                        <th scope="col">Ville</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <?php if (count($data['transport']) > 0) { ?>
                                    <?php foreach ($data['transport'] as $row) { ?>
                                        <tbody>
                                            <tr>
                                                <td class="d-none"><?php echo $row->id ?></td>
                                                <td><?php echo $row->genre ?></td>
                                                <td><?php echo $row->matricule ?></td>
                                                <td><?php echo $row->volume_coffre ?></td>
                                                <td><?php echo $row->ville ?></td>
                                                <td class="btn btn-danger btn-delete" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal" style="background-color: black;"><i class="bi bi-trash3 text-white"></i></td>
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
        </div>
        <div class="col-lg-3 col-sm-12">
            <div class="container bg-dark rounded p-3 my-3">
                <h1 class="text-white"><i class="bi bi-plus-circle-dotted text-white"></i> </h1>
                <h4 class="text-white text-center pb-2 border-bottom">Ajouter Transport</h4>
                <form action="<?php echo URLROOT; ?>/Transportcontroller/add" method="POST">
                    <div class="container d-flex flex-column">
                        <input type="text" class="border-bottom text-white bg-dark mt-4 " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Le genre" name="genre">
                        <input type="text" class="border-bottom text-white bg-dark mt-3" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Matricule" name="matricule">
                        <input type="text" class="border-bottom text-white bg-dark mt-3" value="<?php echo $_SESSION['id'] ?>" name="tr_id" style="display:none;">
                        <input type="text" class="border-bottom text-white bg-dark mt-3" id="exampleInputPassword1" placeholder="Volume du coffre" name="volume_coffre">
                        <input type="text" class="border-bottom text-white bg-dark mt-3" id="exampleInputPassword1" placeholder="Ville" name="ville">
                        <div class="d-flex justify-content-between align-items-center ">
                            <button type="submit" class="btn btn-success text-white mt-4 mb-1 mx-auto" name="submit">Ajouter Transport</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</section>
<script>
    document.querySelectorAll('.btn-delete').forEach(function(btn) {

        btn.addEventListener('click', function(com) {
            let item = com.target.parentElement.parentElement.parentElement;
            let children = item.children;
            let id = children[0].children[0].textContent;

            document.querySelector('#deleteModal .id').value = id;
        })
    })
    document.querySelectorAll('.btn-valider').forEach(function(btn) {

        btn.addEventListener('click', function(com) {
            let item = com.target.parentElement.parentElement;
            let children = item.children;
            let id = children[0].children[0].textContent;

            document.querySelector('#validerModal .id').value = id;
        })
    })
    document.querySelectorAll('.btn-annuler').forEach(function(btn) {

        btn.addEventListener('click', function(com) {
            let item = com.target.parentElement.parentElement;
            let children = item.children;
            let id = children[0].children[0].textContent;

            document.querySelector('#annulerModal .id').value = id;
        })
    })
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<?php
require APPROOT . '/views/includes/dashfooter.php';
?>