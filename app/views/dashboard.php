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
        <input type="text" name="id" class="id text-center">
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
        <h5 class="modal-title text-danger" id="deleteModaltitle">Alerte! Validation de la réservation</h5>
      </div>
      <div class="px-4 py-3">
        Êtes-vous sûr de vouloir valider?<br>
      </div>
      <form action="<?php echo URLROOT; ?>/Reservationcontroller/valider" method="POST">
        <input type="text" name="id" class="id text-center">
        <div class="px-4 py-3">
          <button type="submit" name="save" class="btn btn-danger mr-2">Oui, valider la réservation.</button>
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
        <input type="text" name="id" class="id text-center">
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

  <div class="container-fluid mt-3 d-flex justify-content-between mx-auto row">
    <div class="d-block col-4">
      <div class="col-12">
        <div class="container bg-dark rounded p-3">
          <h1 class=""><i class="bi bi-person-lines-fill text-white"></i></h1>
          <h4 class="text-white text-center pb-2 border-bottom"><?php echo $_SESSION['nom'] ?></h4>
          <h6 class="text-white text-center"><?php echo $_SESSION['role'] ?></h6>
        </div>
        <div class="col-12 mt-4">
          <div class="container bg-dark rounded text-white p-3">
            <h1 class="text-white"><i class="bi bi-info-circle-fill text-white"></i> </h1>
            <h4 class="text-white text-center pb-2 border-bottom">LISTES RESERVATIONS</h4>
            <div class="row mt-4">
              <div>
                <table class="table table-dark table-responsive table-striped">
                  <thead>
                    <tr>
                      <th scope="col">Ville</th>
                      <th scope="col">Date</th>
                    </tr>
                  </thead>
                  <?php
                  if (count($data['reservation']) > 0) { ?>
                    <?php foreach ($data['reservation'] as $row) { ?>
                      <tbody>
                        <tr>
                          <td><?php echo $row->trport_genre ?></td>
                          <td><?php echo $row->ville_souhaite ?></td>
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
    </div>
    <div class="col-5">
      <div class="container bg-dark rounded text-white p-3" style="height: 80vh;">
        <h1 class="text-white"><i class="bi bi-info-circle-fill text-white"></i> </h1>
        <h4 class="text-white text-center pb-2 border-bottom">LISTES TRANSPORTS</h4>
        <div class="row mt-4">
          <div>
            <table class="table table-dark table-responsive table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Genre</th>
                  <th scope="col">Matricule</th>
                  <th scope="col">Coffre</th>
                  <th scope="col">Ville</th>
                </tr>
              </thead>
              <?php if (count($data['transport']) > 0) { ?>
                <?php foreach ($data['transport'] as $row) { ?>
                  <tbody>
                    <tr>
                      <td><?php echo $row->id ?></td>
                      <td><?php echo $row->matricule ?></td>
                      <td><?php echo $row->genre ?></td>
                      <td><?php echo $row->volume_coffre ?></td>
                      <td><?php echo $row->ville ?></td>
                    </tr>
                  </tbody>
                <?php } ?>
              <?php } else { ?>
                <tbody>
                  <td colspan="6">
                    <div class="text-center">
                      <h1 class="pt-5">Pas de transport</h1>
                    </div>
                  </td>
                </tbody>
              <?php } ?>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="col-3">
      <div class="container bg-dark rounded p-3">
        <h1 class="text-white"><i class="bi bi-plus-circle-dotted text-white"></i> </h1>
        <h4 class="text-white text-center pb-2 border-bottom">STATISTIQUES</h4>
          <div class="container d-flex flex-column">
            <div class="d-flex justify-content-between">
              <h5 class="text-white">Total Clients</h5>
              <h3 class="text-white"><?php
                                      if (count($data['client']) >= 0) {
                                        $num_rows = count($data['client']);
                                        echo $num_rows;
                                      }
                                      ?></h3>
            </div>
            <div class="d-flex justify-content-between ">
              <h5 class="text-white">Total Transporteurs</h5>
              <h3 class="text-white"><?php
                                      if (count($data['transporteur']) >= 0) {
                                        $num_rows = count($data['transporteur']);
                                        echo $num_rows;
                                      }
                                      ?></h3>
            </div>
            <div class="d-flex justify-content-between">
              <h5 class="text-white">Total Réservations</h5>
              <h3 class="text-white"><?php
                                      if (count($data['reservation']) >= 0) {
                                        $num_rows = count($data['reservation']);
                                        echo $num_rows;
                                      }
                                      ?></h3>
            </div>
            <div class="d-flex justify-content-between">
              <h5 class="text-white">Total Transports</h5>
              <h3 class="text-white"><?php
                                      if (count($data['transport']) >= 0) {
                                        $num_rows = count($data['transport']);
                                        echo $num_rows;
                                      }
                                      ?></h3>
            </div>
          </div>
      </div>
    </div>
  </div>
</section>
<?php
require APPROOT . '/views/includes/dashfooter.php';
?>