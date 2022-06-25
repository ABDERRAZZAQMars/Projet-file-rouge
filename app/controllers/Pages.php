<?php
class Pages extends Controller
{
    public function index()
    {
        $this->view('index');
    }

    public function dashboard()
    {
        $this->view('dashboard');
    }

    public function dashclient()
    {
        $this->view('dashclient');
    }

    public function dashtransporteur()
    {
        require $_SERVER['DOCUMENT_ROOT'] . '/FILROUGE/Projet-file-rouge/app/models/Transportmodels.php';
        $transportByid = new Transportmodels();
        $this->view('dashtransporteur', ['transport' => $transportByid -> getTransport($_SESSION['id'])]);
    }

    // public function agents()
    // {
    //     require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/User.php';
    //     require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Biensmodels.php';
    //     $agentlisting = new Biensmodels();
    //     $agentlist = new User();
    //     $this->view('pages/agents', ['agentlist' => $agentlist->getagent(), 'agentlisting' => $agentlisting->getbiensByagent()]);
    // }
    // public function contact()
    // {
    //     if (isset($_GET['pr'])) {
    //         require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Biensmodels.php';
    //         $bienlist = new Biensmodels();
    //         $this->view('pages/contact', $bienlist->getBien($_GET['pr']));
    //     } else {
    //         $this->view('pages/contact');
    //     }
    // }
    // public function login()
    // {
    //     $this->view('pages/login');
    // }
    // public function register()
    // {
    //     $this->view('pages/register');
    // }
    // public function profile()
    // {
    //     if (isLoggedIn()) {
    //         if ($_SESSION['role'] == 'client' || $_SESSION['role'] == 'particulier' || $_SESSION['role'] == 'agence') {
    //             require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Clientsmodels.php';
    //             require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Biensmodels.php';
    //             $bienlist = new Biensmodels();
    //             $clientinfo = new Clientsmodels();

    //             $profil = $clientinfo->getClient($_SESSION['email']);


    //             $this->view('pages/profile', ['allbiens' => $bienlist->getBiensOf($profil['user_id']), 'clientinfo' => $clientinfo->getClient($_SESSION['email'])]);
    //         }
    //     } else {
    //         $this->view('pages/login');
    //     }
    // }
    // public function dashboard()
    // {
    //     if (adminIn()) {
    //         require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Clientsmodels.php';
    //         require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Biensmodels.php';
    //         require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/particuliersmodels.php';
    //         require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/agencesmodels.php';
    //         require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/adminmodels.php';


    //         $clientlist = new Clientsmodels();
    //         $particulierlist = new Particuliersmodels();
    //         $agencelist = new Agencesmodels();
    //         $bienlist = new Biensmodels();
    //         $admindetails = new Adminmodels();


    //         $this->view('pages/dashboard', ['admin' => $admindetails->getAdmin($_SESSION['email']), 'particuliers' => $particulierlist->getAllParticuliers(), 'agences' => $agencelist->getAllAgences(), 'clients' => $clientlist->getAllClients(), 'biens' => $bienlist->getAllBiens()]);
    //     } else {
    //         $this->view('dashboard/login');
    //     }
    // }

    // public function Propertydetails()
    // {
    //     if (isset($_GET['prop'])) {
    //         require $_SERVER['DOCUMENT_ROOT'] . '/red_string_project/app/models/Biensmodels.php';
    //         $bienlist = new Biensmodels();
    //         $this->view('pages/Propertydetails', ['bien' => $bienlist->getBien($_GET['prop'])]);
    //     } else {
    //         header('location: ' . URLROOT . '/pages/index');
    //     }
    // }

    // public function E404()
    // {
    //     $this->view('pages/404');
    // }
}
