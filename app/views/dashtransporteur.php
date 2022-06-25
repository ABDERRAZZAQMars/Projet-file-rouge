<?php
require APPROOT . '/views/includes/head.php';
?>

<!-- START MODEL Transport -->
<div class="modal fade" id="TransportexampleModalCenter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 60%;">
        <div class="modal-content row">
            <div class="modal-body mx-auto d-flex flex-row justify-content-around align-items-center">
                <div class="col-5 bg-white my-5">
                    <div class="d-flex border-bottom d-flex justify-content-between">
                        <h4 class="pb-2 ">Nouveau Transport</h4>
                    </div>
                    <div class="mt-4">
                        <form action="<?php echo URLROOT; ?>/Transportcontroller/add" method="POST">
                            <div class="mb-3 d-flex">
                                <input type="text" class="form-control border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Le genre" name="genre">
                                <input type="text" class="form-control border-primary ms-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Matricule" name="matricule">
                                <input type="text" class="form-control border-primary ms-2" value="<?php echo $_SESSION['id'] ?>" name="tr_id" style="display:none;">
                            </div>
                            <div class="mb-4 d-flex">
                                <input type="text" class="form-control border-primary" id="exampleInputPassword1" placeholder="Volume du coffre" name="volume_coffre">
                                <input type="text" class="form-control border-primary ms-2" id="exampleInputPassword1" placeholder="Ville" name="ville">
                            </div>
                            <div class="d-flex justify-content-between align-items-center ">
                                <button type="submit" class="btn btn-primary text-white" name="submit">Ajouter Transport</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FIN MODEL Transport-->
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
                <input type="text" name="id" class="id">
                <div class="px-4 py-3">
                    <button type="submit" name="save" class="btn btn-danger mr-2">Oui, supprimer ce transport.</button>
                </div>
            </form>
        </div>
    </div>
</div>
<section class="container-fluid row px-0 mx-0">
    <div class="col-2 d-flex flex-column justify-content-between" style="height: 100vh; background-color: #2E3192;">
        <div class="mt-3">
            <div class="border-bottom d-flex justify-content-center mb-3">
                <img src="<?php echo URLROOT ?>/public/img/logoWhite.png" class="py-2" width="150" alt="">
            </div>
            <div>
                <h6 class="text-light text-center"><?php echo $_SESSION['nom'] ?></h6>
                <h6 class="text-light text-center"><?php echo $_SESSION['role'] ?></h6>
            </div>
            <div>
                <ul class="list-unstyled">
                    <li><a href="" class="btn btn-outline-info  mt-2 text-white text-decoration-none fs-6 w-100"><i class="bi bi-bag-fill me-2"></i>Transport</a></li>
                    <li><a href="" class="btn btn-outline-info  mt-2 text-white text-decoration-none fs-6 w-100"><i class="bi bi-bag-fill me-2"></i>Commandes</a></li>
                </ul>
            </div>
        </div>
        <div class="border-top mb-4">
            <a href="<?php echo URLROOT ?>/Transporteurcontroller/logout" class="btn btn-outline-info  mt-2 text-white text-decoration-none fs-6 w-100"><i class="bi bi-box-arrow-in-right me-2"></i>Déconnexion</a>
        </div>
    </div>
    <div class="col-10 px-0">
        <div class="container-fluid navbar w-100 px-2" style="background-color: #2E3192;">
            <a class="navbar-brand"><i class="bi bi-arrow-left-circle-fill text-info"></i></a>
            <form class="d-flex" role="search">
                <input class="form-control text-white me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-info text-white" type="submit">Search</button>
            </form>
        </div>
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="card">
                    <div class="row report-inner-cards-wrapper p-0">
                        <div class="col-md-4 col-xl-10 report-inner-card">
                            <div class="inner-card-text">
                                <h3 class="report-title">LISTES TRANSPORTS</h3>
                            </div>
                        </div>
                        <div class="col-md-2 col-xl-2 report-inner-card">
                            <button type="button" data-toggle="modal" data-target="#TransportexampleModalCenter" class="btn btn-primary">
                                <i class="bi bi-bag-fill me-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div>
                <?php
                if (count($data['transport']) > 0) { ?>
                    <?php foreach ($data['transport'] as $row) { ?>
                        <div class="item row  ps px-0 bar mar py-2" id="info" style="background-color: #FEFBEC;">
                            <div class="col-2">
                                <p style="font-size:12px; display:none;" class="text-nowrap m-0"><?php echo $row->id ?></p>
                            </div>
                            <div class="col-2">
                                <p style="font-size:12px;" class="text-nowrap m-0"><?php echo $row->genre ?></p>
                            </div>
                            <div class="col-1">
                                <p style="font-size:12px;" class="text-nowrap m-0 "><?php echo $row->matricule ?></p>
                            </div>
                            <div class="col-2">
                                <p style="font-size:12px;" class="text-nowrap m-0"><?php echo $row->volume_coffre ?></p>
                            </div>
                            <div class="col-2">
                                <p style="font-size:12px;" class="text-nowrap m-0"><?php echo $row->ville ?></p>
                            </div>
                            <div class="col-1 d-flex justify-content-center align-items-center" id="editer">
                                <a class="btn-delete" type="button" data-bs-toggle="modal" data-bs-target="#deleteModal"><img style="width:22px;" class="px-1" alt="">yasser delte </a>
                            </div>
                        </div>
                    <?php } ?>
                <?php } else { ?>
                    <div class="text-center">
                        <h1 class="pt-5">No Results Found</h1>
                    </div>
                <?php } ?>
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
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<?php
require APPROOT . '/views/includes/dashfooter.php';
?>