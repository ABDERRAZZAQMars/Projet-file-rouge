<?php
require APPROOT . '/views/includes/head.php';
?>
<section class="container-fluid row bg-secondary px-0 mx-0">
  <div class="col-2 d-flex flex-column justify-content-between bg-dark" style="height: 100vh;">
    <div class="mt-3">
      <div class="border-bottom d-flex justify-content-center mb-3">
        <img src="<?php echo URLROOT?>/public/img/logoWhite.png" class="py-2" width="150" alt="">
      </div>
      <div>
        <h6 class="text-light text-center"><?php echo $_SESSION['nom']?></h6>
        <h6 class="text-light text-center"><?php echo $_SESSION['role']?></h6>
      </div>
      <div>
        <ul class="list-unstyled">
          <li><a href="" class="btn btn-outline-secondary mt-3 text-white text-decoration-none fs-6 w-100"><i class="bi bi-speedometer2 me-2"></i>Dashboard</a></li>
          <li><a href="" class="btn btn-outline-secondary mt-2 text-white text-decoration-none fs-6 w-100"><i class="bi bi-truck me-2"></i>Transporteurs</a></li>
          <li><a href="" class="btn btn-outline-secondary mt-2 text-white text-decoration-none fs-6 w-100"><i class="bi bi-person-fill me-2"></i>Client</a></li>
          <li><a href="" class="btn btn-outline-secondary mt-2 text-white text-decoration-none fs-6 w-100"><i class="bi bi-bag-fill me-2"></i>Réservations</a></li>
          <li><a href="" class="btn btn-outline-secondary mt-2 text-white text-decoration-none fs-6 w-100"><i class="bi bi-activity me-2"></i>Suivi</a></li>
          <li><a href="" class="btn btn-outline-secondary mt-2 text-white text-decoration-none fs-6 w-100"><i class="bi bi-person-rolodex me-2"></i>Contact</a></li>
        </ul>
      </div>
    </div>
    <div class="border-top mb-4">
      <a href="<?php echo URLROOT?>/Admincontroller/logout" class="btn btn-outline-secondary mt-2 text-white text-decoration-none fs-6 w-100"><i class="bi bi-box-arrow-in-right me-2"></i>Déconcerter</a>
    </div>
  </div>

  <div class="col-10 px-0">
    <div class="container-fluid navbar bg-dark w-100 px-2">
      <a class="navbar-brand"><i class="bi bi-arrow-left-circle-fill text-secondary"></i></a>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-secondary" type="submit">Search</button>
      </form>
    </div>
  </div>
</section>
<?php
require APPROOT . '/views/includes/dashfooter.php';
?>