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
                <div class="d-flex">
                    <input type="email" class="form-control border-success" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre adresse e-mail">
                    <input type="password" class="form-control border-success ms-3" id="exampleInputPassword1" placeholder="Votre Mot de passe">
                </div>
                <div class="d-flex justify-content-between align-items-center mt-3">
                    <button type="submit" class="btn btn-success text-white col-5">Connexion</button>
                    <a href="#" class="text-dark">Mot de passe oublié?</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FIN MODEL CNX -->

<!-- START MODEL N-CNX -->
<div class="modal fade" id="nexampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Nouveau compte</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3 d-flex">
                        <input type="text" class="form-control border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre nom">
                        <input type="email" class="form-control border-primary ms-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre adresse e-mail">
                    </div>
                    <div class="mb-4 d-flex">
                        <input type="password" class="form-control border-primary" id="exampleInputPassword1" placeholder="Mot de passe">
                        <input type="password" class="form-control border-primary ms-2" id="exampleInputPassword1" placeholder="Confirmer le mot de passe">
                    </div>
                    <div class="d-flex justify-content-between align-items-center ">
                        <button type="submit" class="btn btn-primary text-white col-5">Inscription</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- FIN MODEL N-CNX -->

<?php
include 'views/includes/navbar.php';
?>

<section class="container-fluid mt-1" style="height: 60vh;">
    <div class="container pt-5 mx-auto">
        <div class="my-5">
            <h1 class="">Envoyer un colis</h1>
            <h4>Afin de vous aider de manière plus précise, veuillez répondre aux questions suivantes</h4>
        </div>
        <div class="d-flex flex-column justify-content-center align-items-center mt-5">
            <h5 class="my-5">Je suis</h5>
            <div class="d-flex">
                <button type=" button " class="btn text-white fw-bold fs-5 px-5 border border-white me-3" data-toggle="modal" data-target="#nexampleModalCenter" style="background-color: #FF8D29;">Un nouveau client</button>
                <button type=" button " class="btn text-white fw-bold fs-5 px-5 border border-white" data-toggle="modal" data-target="#cexampleModalCenter" style="background-color: #FF8D29;">Un client régulier</button>
            </div>
        </div>
    </div>
</section>

<?php
include 'views/includes/cfooter.php';
?>