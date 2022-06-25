<!-- START MODEL ADMIN -->
<div class="modal fade" id="adminexampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Connexion Admin</h5>
            </div>
            <div class="modal-body">
                <form action="<?php echo URLROOT; ?>/Admincontroller/login" method="POST" class="d-flex">
                    <input type="email" class="form-control border-success me-3" id="email" placeholder="Adresse Email" name="email">
                    <input type="password" class="form-control border-success me-3" id="password" placeholder="Mot de passe" name="password">
                    <button type="submit" class="btn btn-success" name="submit">Connexion</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- FIN MODEL ADMIN -->

<!-- START MODEL TRANSPORTEUR -->
<div class="modal fade" id="transexampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Connexion Transporteur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex">
                    <input type="text" class="form-control border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Transporteur">
                    <input type="password" class="form-control border-primary mx-3" id="exampleInputPassword1" placeholder="Votre Mot de passe">
                    <button type="button" class="btn btn-primary">Connexion</button>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- FIN MODEL TRANSPORTEUR -->

<!-- START MODEL CNX -->
<div class="modal fade" id="cexampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Connexion</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST">
                    <div class="d-flex">
                        <input type="email" class="form-control border-success" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre adresse e-mail" name="email">
                        <input type="password" class="form-control border-success ms-3" id="exampleInputPassword1" placeholder="Votre Mot de passe" name="password">
                    </div>
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <button type="submit" class="btn btn-success text-white col-5" name="login">Connexion</button>
                        <a href="#" class="text-dark">Mot de passe oublié?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- FIN MODEL CNX -->

<!-- START FOOTER -->
<footer>
    <div class="container-fluid" style="background-color: #2E3192;">
        <div class="container row d-flex mx-auto py-4">
            <!-- LOGO DE PROJET -->
            <div class="col-4">
                <img src="<?php echo URLROOT ?>/public/img/logoWhite.png" width="250" alt="">
                <h6 class="text-white my-3 ">Partenaire officiel</h6>
                <img src="<?php echo URLROOT ?>/public/img/logoyoucode-white.png " width="150 " alt=" ">
            </div>
            <!-- LISTE MENU -->
            <div class="col-2 ">
                <h4 class="text-white mb-4">Menu</h4>
                <ul class="list-unstyled">
                    <li class="mt-2 ">
                        <a href="home#propos" class="text-white text-decoration-none ">À propos</a>
                    </li>
                    <li class="mt-2 ">
                        <a href="home#reservation" class="text-white text-decoration-none ">Réservation</a>
                    </li>
                    <li class="mt-2 ">
                        <a href="home#contact" class="text-white text-decoration-none ">Contact nous</a>
                    </li>
                </ul>
            </div>
            <!-- LISTE ENTREPRISE -->
            <div class="col-2 ">
                <h4 class="text-white mb-4">Entreprise</h4>
                <ul class="list-unstyled ">
                    <li class="mt-2 ">
                        <a href="# " class="text-white text-decoration-none" data-toggle="modal" data-target="#adminexampleModalCenter">Espace Admin</a>
                    </li>
                    <li class="mt-2 ">
                        <a href="# " class="text-white text-decoration-none" data-toggle="modal" data-target="#cexampleModalCenter">Espace Client</a>
                    </li>
                    <li class="mt-2 ">
                        <a href="# " class="text-white text-decoration-none" data-toggle="modal" data-target="#transexampleModalCenter">Espace Transporteurs</a>
                    </li>
                </ul>
            </div>
            <!-- LISTE SERVICES -->
            <div class="col-2 ">
                <h4 class="text-white mb-4">Services</h4>
                <ul class="list-unstyled">
                    <li class="mt-2 ">
                        <a href="colis" class="text-white text-decoration-none ">Envoye un colis</a>
                    </li>
                    <li class="mt-2 ">
                        <a href="suivi" class="text-white text-decoration-none ">Suivi</a>
                    </li>
                    <li class="mt-2 ">
                        <a href="# " class="text-white text-decoration-none ">Trouver un transporteur</a>
                    </li>
                </ul>
            </div>
            <!-- LISTE SUIVEZ NOUS -->
            <div class="col-2 ">
                <h4 class="text-white mb-4">Suivez-nous</h4>
                <ul class="list-unstyled d-flex">
                    <li>
                        <a href="#"><i class="bi bi-facebook fs-3 text-white me-lg-4"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="bi bi-instagram fs-3 text-white me-lg-4"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="bi bi-linkedin fs-3 text-white me-lg-4"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="bi bi-twitter fs-3 text-white"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- COPYRIGHT ABDERRAZZAQ MARS -->
    <div class="container-fluid mx-auto " style="background-color: #FF8D29;">
        <h6 class="text-white text-center py-3 mb-0 !important ">2022 Copyright : ABDERRAZZAQ Mars</h6>
    </div>
</footer>
<!-- START FOOTER -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>