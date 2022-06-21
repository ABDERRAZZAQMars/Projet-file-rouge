<!-- start model -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 60%;">
        <div class="modal-content row">
            <div class="modal-body mx-auto d-flex flex-row justify-content-around align-items-center">
                <div class="col-5 bg-white">
                    <h4 class="pb-2 border-bottom">Connexion</h4>
                    <div class="mt-4">
                        <form>
                            <div class="mb-3">
                                <input type="email" class="form-control border-success" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre adresse e-mail">
                            </div>
                            <div class="mb-4">
                                <input type="password" class="form-control border-success" id="exampleInputPassword1" placeholder="Votre Mot de passe">
                            </div>
                            <div class="d-flex justify-content-between align-items-center ">
                                <button type="submit" class="btn btn-success text-white col-5">Connexion</button>
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
                        <h4 class="pb-2 ">Nouveau compte</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="mt-4">
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
    </div>
</div>
<!-- fin model -->

<!-- START NAVBAR -->
<nav>
    <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="./views/assets/img/logoWhite.png" alt="" width="150" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-2 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">À propos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Réservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</nav>
<!-- FIN NAVBAR -->

<!-- START FULL PAGE BACKGROUND -->
<section id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./views/assets/img/backgroundHome.jpg" class="d-block w-100" style="height:100vh" alt="backgroundHome">
            <div class="carousel-caption d-none d-md-block d-flex flex-column justify-content-center align-items-center text-white" style="bottom: 330px !important;">
                <h1>EXCELLENCE. SIMPLEMENT LIVRÉ.</h1>
                <h3>PROFITER DE CETTE NOUVELLE EXPÉRIENCE !</h3>
                <button type=" button " class="btn text-white fw-bold fs-5 px-5 border border-white" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: #FF8D29;">Réserver Maintenant</button>
            </div>
        </div>
    </div>
</section>
<!-- FIN FULL PAGE BACKGROUND -->

<!-- START LES CARDS -->
<section class="container-fluid bg-black">
    <div class="container row mx-auto py-3 d-flex justify-content-around text-white">
        <div class=" my-2 bg-secondary rounded col-lg-3 col-md-3 col-sm-12 py-3">
            <a href="" class="d-flex flex-column align-items-center text-white" style="text-decoration:none;">
                <img src="./views/assets/img/icone1.png" alt="" id="icone">
                <h5 class="mt-3">Envoye un colis</h5>
            </a>
        </div>
        <div class=" my-2 bg-secondary rounded col-lg-3 col-md-3 col-sm-12 py-3">
            <a href="" class="d-flex flex-column align-items-center text-white" style="text-decoration:none;">
                <img src="./views/assets/img/icone2.png" alt="" id="icone">
                <h5 class="mt-3">Trouver un transporteur</h5>
            </a>
        </div>
        <div class=" my-2 bg-secondary rounded col-lg-3 col-md-3 col-sm-12 py-3">
            <a href="" class="d-flex flex-column align-items-center text-white" style="text-decoration:none;">
                <img src="./views/assets/img/icone3.png" alt="" id="icone">
                <h5 class="mt-3">Suivi</h5>
            </a>
        </div>
    </div>
</section>
<!-- START LES CARDS -->

<!-- START QUI SOMMES NOUS -->
<section style="background-color: #E9E9E9;">
    <div class="py-5 text-center">
        <h1 style="color: #FF8D29;">Qui sommes nous</h1>
        <div class="mt-5 fs-4 mx-3">
            <p>YouTrans est une plateforme qui vous permet de trouver et géolocaliser rapidement un triporteur, une mini Honda ou un pick-up pour le transport de toutes vos marchandises.</p>
            <p>Vous pourrez suivre en direct votre « Transporteur» du point de départ au point d’arrivée et négocier le tarif de vos courses et transports directement avec lui lors de sa présélection sur l’application.</p>
            <p>YouTrans compte aujourd’hui plus de 1000 « Transports» vérifiés qui sont actuellement référencés et déployés sur Maroc pour répondre à toutes vos demandes sans que vous ayez à vous déplacer et depuis l’endroit où vous êtes.</p>
        </div>
    </div>
    <div class="container row mx-auto pb-5 d-flex justify-content-around">
        <div class="card col-lg-5 col-md-4 col-sm-6" style="padding: 0 !important;">
            <img src="./views/assets/img/imgC1.jpg" class="card-img-top w-100" alt="...">
            <div class="card-body text-center">
                <h5 class="card-title">Confiance</h5>
                <p class="card-text">Nos peecoopers, sérieux et expérimentés, vous garantissent la livraison de vos colis dans les conditions les plus optimales.</p>
            </div>
        </div>
        <div class="card col-lg-5 col-md-4 col-sm-6" style="padding: 0 !important;">
            <img src="./views/assets/img/imgC2.jpg" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h5 class="card-title">Rapidité</h5>
                <p class="card-text">Réponse rapide à vos demandes de prix, livraison le plus rapidement possible et assistance en ligne ou par téléphone. </p>
            </div>
        </div>
    </div>
</section>
<!-- FIN QUI SOMMES NOUS -->

<!-- START CONTACT NOUS -->
<!-- <section class="m-4">
    <form>
        <div class="container row d-flex mx-auto">
            <div class="col-5">
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Entrer votre email">
            </div>
            <div class="col-5">
                <input type="text" id="disabledTextInput" class="form-control" placeholder="Entrer votre message">
            </div>
            <div class="col-2">
                <button type="submit" class="btn text-white" style="background-color: #FF8D29;">Submit</button>
            </div>
        </div>
    </form>
</section> -->
<!-- FIN CONTACT NOUS -->
<div class="container-fluid row d-flex justify-content-end align-items-center ">
        <div class="col-5">
            <h3 class="pb-2 border-bottom">Envoie-nous un message</h3>
            <div class="mt-4">
                <form>
                    <div class="d-flex gap-2 mt-3">
                        <input type="text" class="form-control border-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre nom">
                        <input type="text" class="form-control border-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Objet">
                    </div>
                    <div class="d-flex gap-2 mt-3">
                        <input type="text" class="form-control border-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre adresse e-mail">
                        <input type="text" class="form-control border-secondary" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Votre numéro">
                    </div>
                    <div class="d-flex mt-3 mb-3">
                        <textarea placeholder="Votre message" name="" id="" rows="8" class="w-100 form-control border-secondary"></textarea>
                    </div>
                    <div class="d-flex justify-content-between align-items-center ">
                        <button type="submit" class="btn text-white col-5" style="background-color: #FF8D29;">Submit</button>
                    </div>

                </form>
            </div>
        </div>
        <div class="col-6">
    <img src="./views/assets/img/alo.jpg" class="w-100" alt="">    
    </div>
    </div>
<!-- START FOOTER -->
<footer>
    <div class="container-fluid" style="background-color: #2E3192;">
        <div class="container row d-flex mx-auto py-4">
            <!-- LOGO DE PROJET -->
            <div class="col-4">
                <img src="./views/assets/img/logoWhite.png" width="250" alt="">
                <h6 class="text-white my-3 ">Partenaire officiel</h6>
                <img src="./views/assets/img/logoyoucode-white.png " width="150 " alt=" ">
            </div>
            <!-- LISTE MENU -->
            <div class="col-2 ">
                <h4 class="text-white mb-4">Menu</h4>
                <ul class="list-unstyled">
                    <li class="mt-2 ">
                        <a href="# " class="text-white text-decoration-none ">À propos</a>
                    </li>
                    <li class="mt-2 ">
                        <a href="# " class="text-white text-decoration-none ">Réservation</a>
                    </li>
                    <li class="mt-2 ">
                        <a href="# " class="text-white text-decoration-none ">Contact nous</a>
                    </li>
                </ul>
            </div>
            <!-- LISTE ENTREPRISE -->
            <div class="col-2 ">
                <h4 class="text-white mb-4">Entreprise</h4>
                <ul class="list-unstyled ">
                    <li class="mt-2 ">
                        <a href="# " class="text-white text-decoration-none ">Espace Admin</a>
                    </li>
                    <li class="mt-2 ">
                        <a href="# " class="text-white text-decoration-none ">Espace Client</a>
                    </li>
                    <li class="mt-2 ">
                        <a href="# " class="text-white text-decoration-none ">Contact nous</a>
                    </li>
                </ul>
            </div>
            <!-- LISTE SERVICES -->
            <div class="col-2 ">
                <h4 class="text-white mb-4">Services</h4>
                <ul class="list-unstyled">
                    <li class="mt-2 ">
                        <a href="# " class="text-white text-decoration-none ">Envoye un colis</a>
                    </li>
                    <li class="mt-2 ">
                        <a href="# " class="text-white text-decoration-none ">Suivi</a>
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
    <div class="container-fluid mx-auto " style="background-color: #FF8D29; ">
        <h6 class="text-white text-center py-3 mb-0 !important ">2022 Copyright : ABDERRAZZAQ Mars</h6>
    </div>
</footer>
<!-- START FOOTER -->