<?php
require APPROOT . '/views/includes/head.php';
?>
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
      <div class="container bg-dark rounded p-3">
        <h1 class=""><i class="bi bi-person-lines-fill text-white"></i></h1>
        <h4 class="text-white text-center pb-2 border-bottom"><?php echo $_SESSION['nom'] ?></h4>
        <h6 class="text-white text-center"><?php echo $_SESSION['role'] ?></h6>
      </div>
      <!--  -->
      <div class="container bg-dark rounded p-3 my-3">
        <h1 class="text-white"><i class="bi bi-plus-circle-dotted text-white"></i> </h1>
        <h4 class="text-white text-center pb-2 border-bottom">STATISTIQUES</h4>
        <div class="container d-flex flex-column">
          <div class="d-flex justify-content-between bg-success p-2  mt-2">
            <h5 class="text-white border-bottom">Total Clients</h5>
            <h1 class="text-white"><?php
                                    if (count($data['client']) >= 0) {
                                      $num_rows = count($data['client']);
                                      echo $num_rows;
                                    }
                                    ?></h1>
          </div>
          <div class="d-flex justify-content-between bg-primary p-2  mt-2">
            <h5 class="text-white border-bottom">Total Transporteurs</h5>
            <h1 class="text-white"><?php
                                    if (count($data['transporteur']) >= 0) {
                                      $num_rows = count($data['transporteur']);
                                      echo $num_rows;
                                    }
                                    ?></h1>
          </div>
          <div class="d-flex justify-content-between bg-warning p-2  mt-2">
            <h5 class="text-white border-bottom">Total Réservations</h5>
            <h1 class="text-white"><?php
                                    if (count($data['reservation']) >= 0) {
                                      $num_rows = count($data['reservation']);
                                      echo $num_rows;
                                    }
                                    ?></h1>
          </div>
          <div class="d-flex justify-content-between bg-info p-2  mt-2">
            <h5 class="text-white border-bottom">Total Transports</h5>
            <h1 class="text-white"><?php
                                    if (count($data['transport']) >= 0) {
                                      $num_rows = count($data['transport']);
                                      echo $num_rows;
                                    } ?>
            </h1>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-9 col-sm-12">
      <div>
        <div class="container bg-dark rounded text-white p-3">
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
      <!--  -->
      <div class="container bg-dark rounded text-white p-3 mt-3">
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
<?php
require APPROOT . '/views/includes/dashfooter.php';
?>