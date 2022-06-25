<?php
require APPROOT . '/views/includes/head.php';
require APPROOT . '/views/includes/header.php';
?>
<!-- START MODEL CLIENT -->
<div class="modal fade" id="clientexampleModalCenter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 80%;">
        <div class="modal-content row">
            <div class="modal-body mx-auto d-flex flex-row justify-content-around align-items-center">
                <div class="col-5 bg-white">
                    <h4 class="pb-2 border-bottom">Connexion Client</h4>
                    <div class="mt-4">
                        <form action="<?php echo URLROOT; ?>/Clientcontroller/login" method="POST">
                            <div class="mb-3">
                                <input type="email" class="form-control border-success" id="exampleInputEmail1" placeholder="Votre adresse e-mail" name="email">
                            </div>
                            <div class="mb-4">
                                <input type="password" class="form-control border-success" id="exampleInputPassword1" placeholder="Votre Mot de passe" name="password">
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="submit" class="btn btn-success text-white col-5" name="submit">Connexion</button>
                                <a href="#" class="text-dark">Mot de passe oublié?</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-1 text-center flex-column align-items-center">
                    <div class="vr" style="min-height: 6em !important;"></div>
                    <div>
                        <h4>Ou</h4>
                    </div>
                    <div class="vr" style="min-height: 6em !important;"></div>
                </div>
                <div class="col-5 bg-white my-5">
                    <div class="d-flex border-bottom d-flex justify-content-between">
                        <h4 class="pb-2 ">Nouveau Compte Client</h4>
                    </div>
                    <div class="mt-4">
                        <form action="<?php echo URLROOT; ?>/Clientcontroller/register" method="POST">
                            <div class="mb-3 d-flex">
                                <input type="text" class="form-control border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom" name="nom">
                                <input type="email" class="form-control border-primary ms-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse Email" name="email">
                                <input type="text" class="form-control border-primary ms-2" value="Client" name="role" style="display:none;">
                            </div>
                            <div class="mb-4 d-flex">
                                <input type="password" class="form-control border-primary" id="exampleInputPassword1" placeholder="Mot de passe" name="password">
                                <input type="password" class="form-control border-primary ms-2" id="exampleInputPassword1" placeholder="Confirmer Mot de passe" name="confirmPassword">
                            </div>
                            <div class="d-flex justify-content-between align-items-center ">
                                <button type="submit" class="btn btn-primary text-white col-5" name="submit">Inscription</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FIN MODEL CLIENT-->

<!-- START MODEL TRANSPORTEUR -->
<div class="modal fade" id="transporteurexampleModalCenter" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 80%;">
        <div class="modal-content row">
            <div class="modal-body mx-auto d-flex flex-row justify-content-around align-items-center">
                <div class="col-5 bg-white">
                    <h4 class="pb-2 border-bottom">Connexion Transporteur</h4>
                    <div class="mt-4">
                        <form action="<?php echo URLROOT; ?>/Transporteurcontroller/login" method="POST">
                            <div class="mb-3">
                                <input type="email" class="form-control border-success" id="exampleInputEmail1" placeholder="Votre adresse e-mail" name="email">
                            </div>
                            <div class="mb-4">
                                <input type="password" class="form-control border-success" id="exampleInputPassword1" placeholder="Votre Mot de passe" name="password">
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <button type="submit" class="btn btn-success text-white col-5" name="submit">Connexion</button>
                                <a href="#" class="text-dark">Mot de passe oublié?</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-1 text-center flex-column align-items-center">
                    <div class="vr" style="min-height: 6em !important;"></div>
                    <div>
                        <h4>Ou</h4>
                    </div>
                    <div class="vr" style="min-height: 6em !important;"></div>
                </div>
                <div class="col-5 bg-white my-5">
                    <div class="d-flex border-bottom d-flex justify-content-between">
                        <h4 class="pb-2 ">Nouveau Compte Transporteur</h4>
                    </div>
                    <div class="mt-4">
                        <form action="<?php echo URLROOT; ?>/Transporteurcontroller/register" method="POST">
                            <div class="mb-3 d-flex">
                                <input type="text" class="form-control border-primary" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nom" name="nom">
                                <input type="email" class="form-control border-primary ms-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Adresse Email" name="email">
                                <input type="text" class="form-control border-primary ms-2" value="Transporteur" name="role" style="display:none;">
                                <input type="text" class="form-control border-primary ms-2" placeholder="N° Téléphone" name="phone">
                            </div>
                            <div class="mb-4 d-flex">
                                <input type="password" class="form-control border-primary" id="exampleInputPassword1" placeholder="Mot de passe" name="password">
                                <input type="password" class="form-control border-primary ms-2" id="exampleInputPassword1" placeholder="Confirmer Mot de passe" name="confirmPassword">
                            </div>
                            <div class="d-flex justify-content-between align-items-center ">
                                <button type="submit" class="btn btn-primary text-white col-5" name="submit">Inscription</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FIN MODEL TRANSPORTEUR-->

<!-- START FULL PAGE BACKGROUND -->
<section class="hero-wrap hero-wrap-2" style="background-image:url(<?php echo URLROOT; ?>/public/img/backgroundHome.jpg);background-position: center; background-size: cover; height :90vh;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center " style="height:80vh;">
            <div class="col-md-9 pt-5 text-center text-white">
                <h1>EXCELLENCE. SIMPLEMENT LIVRÉ.</h1>
                <h3>PROFITER DE CETTE NOUVELLE EXPÉRIENCE !</h3>
                <button type=" button " class="btn text-white fw-bold fs-5 px-5 border border-white" data-toggle="modal" data-target="#transporteurexampleModalCenter" style="background-color: #FF8D29;">Louer Mon Transport</button>
                <button type=" button " class="btn text-white fw-bold fs-5 px-5 border border-white" data-toggle="modal" data-target="#clientexampleModalCenter" style="background-color: #FF8D29;">Réserver un Transport</button>
            </div>
        </div>
    </div>
</section>
<!-- FIN FULL PAGE BACKGROUND -->

<!-- START LES CARDS -->
<section class="container-fluid bg-black  py-5" id="reservation">
    <div class="container row mx-auto py-3 d-flex justify-content-around text-white">
        <div class=" my-2 bg-secondary rounded col-lg-3 col-md-3 col-sm-12 py-3">
            <a href="colis" class="d-flex flex-column align-items-center text-white" style="text-decoration:none;">
                <img src="<?php echo URLROOT ?>/public/img/icone1.png" alt="" id="icone">
                <h5 class="mt-3">Envoye un colis</h5>
            </a>
        </div>
        <div class=" my-2 bg-secondary rounded col-lg-3 col-md-3 col-sm-12 py-3">
            <a href="" class="d-flex flex-column align-items-center text-white" style="text-decoration:none;">
                <img src="<?php echo URLROOT ?>/public/img/icone2.png" alt="" id="icone">
                <h5 class="mt-3">Trouver un transporteur</h5>
            </a>
        </div>
        <div class=" my-2 bg-secondary rounded col-lg-3 col-md-3 col-sm-12 py-3">
            <a href="suivi" class="d-flex flex-column align-items-center text-white" style="text-decoration:none;">
                <img src="<?php echo URLROOT ?>/public/img/icone3.png" alt="" id="icone">
                <h5 class="mt-3">Suivi</h5>
            </a>
        </div>
    </div>
</section>
<!-- START LES CARDS -->

<!-- START QUI SOMMES NOUS -->
<section style="background-color: #E9E9E9;" class=" py-5" id="propos">
    <div class=" py-5 text-center">
        <h1 class="mt-2" style="color: #FF8D29;">Qui sommes nous</h1>
        <div class="mt-5 fs-4 mx-3">
            <p>YouTrans est une plateforme qui vous permet de trouver et géolocaliser rapidement un triporteur, une mini Honda ou un pick-up pour le transport de toutes vos marchandises.</p>
            <p>Vous pourrez suivre en direct votre « Transporteur» du point de départ au point d’arrivée et négocier le tarif de vos courses et transports directement avec lui lors de sa présélection sur l’application.</p>
            <p>YouTrans compte aujourd’hui plus de 1000 « Transports» vérifiés qui sont actuellement référencés et déployés sur Maroc pour répondre à toutes vos demandes sans que vous ayez à vous déplacer et depuis l’endroit où vous êtes.</p>
        </div>
    </div>
    <div class="container row mx-auto pb-5 d-flex justify-content-around">
        <div class="card col-lg-5 col-md-4 col-sm-6" style="padding: 0 !important;">
            <img src="<?php echo URLROOT ?>/public/img/imgC1.jpg" class="card-img-top w-100" alt="...">
            <div class="card-body text-center">
                <h5 class="card-title">Confiance</h5>
                <p class="card-text">Nos peecoopers, sérieux et expérimentés, vous garantissent la livraison de vos colis dans les conditions les plus optimales.</p>
            </div>
        </div>
        <div class="card col-lg-5 col-md-4 col-sm-6" style="padding: 0 !important;">
            <img src="<?php echo URLROOT ?>/public/img/imgC2.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h5 class="card-title">Rapidité</h5>
                <p class="card-text">Réponse rapide à vos demandes de prix, livraison le plus rapidement possible et assistance en ligne ou par téléphone. </p>
            </div>
        </div>
    </div>
</section>
<!-- FIN QUI SOMMES NOUS -->

<!-- START CONTACT NOUS -->
<section class="container-fluid row d-flex justify-content-end align-items-center py-5" id="contact">
    <div class="col-5">
        <h3 class="pb-2 border-bottom">Envoie-nous un message</h3>
        <div class="mt-4">
            <form method="POST">
                <div class="d-flex gap-2 mt-3">
                    <input type="text" class="form-control border-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre nom" name="nom">
                    <input type="text" class="form-control border-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Objet" name="objet">
                </div>
                <div class="d-flex gap-2 mt-3">
                    <input type="text" class="form-control border-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre adresse e-mail" name="email">
                    <input type="text" class="form-control border-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre numéro" name="phone">
                </div>
                <div class="d-flex mt-3 mb-3">
                    <textarea placeholder="Votre message" type="text" rows="8" class="w-100 form-control border-secondary" name="message"></textarea>
                </div>
                <div class="d-flex justify-content-between align-items-center ">
                    <button type="submit" class="btn text-white col-5" style="background-color: #FF8D29;" name="envoyer">Submit</button>
                </div>

            </form>
        </div>
    </div>
    <div class="col-6">
        <img src="<?php echo URLROOT ?>/public/img/alo.jpg" class="w-100" alt="">
    </div>
</section>
<!-- FIN CONTACT NOUS -->

<?php
require APPROOT . '/views/includes/footer.php';
?>