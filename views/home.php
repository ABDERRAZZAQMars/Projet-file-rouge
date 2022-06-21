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

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
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
</div>
