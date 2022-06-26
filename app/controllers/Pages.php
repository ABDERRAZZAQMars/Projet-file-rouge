<?php
class Pages extends Controller
{
    public function index()
    {
        $this->view('index');
    }

    public function dashboard()
    {
        if (isLoggedIn()) {
            if ($_SESSION['role'] == 'admin') {
                require $_SERVER['DOCUMENT_ROOT'] . '/FILROUGE/Projet-file-rouge/app/models/Transportmodels.php';
                require $_SERVER['DOCUMENT_ROOT'] . '/FILROUGE/Projet-file-rouge/app/models/Reservationmodels.php';
                require $_SERVER['DOCUMENT_ROOT'] . '/FILROUGE/Projet-file-rouge/app/models/Clientmodels.php';
                require $_SERVER['DOCUMENT_ROOT'] . '/FILROUGE/Projet-file-rouge/app/models/Transporteurmodels.php';

                $transport = new Transportmodels();
                $reservation = new Reservationmodels();
                $client = new Clientmodels();
                $transporteur = new Transporteurmodels();

                $this->view('dashboard', ['client' => $client->getAllClient(), 'transporteur' => $transporteur->getAllTransporteur(), 'reservation' => $reservation->getAllReservation(), 'transport' => $transport->getAllTransport()]);
            } else {
                $this->view('index');
            }
        } else {
            $this->view('index');
        }
    }

    public function dashclient()
    {
        if (isLoggedIn()) {
            if ($_SESSION['role'] == 'Client') {
                require $_SERVER['DOCUMENT_ROOT'] . '/FILROUGE/Projet-file-rouge/app/models/Transportmodels.php';
                require $_SERVER['DOCUMENT_ROOT'] . '/FILROUGE/Projet-file-rouge/app/models/Reservationmodels.php';

                $transport = new Transportmodels();
                $reservation = new Reservationmodels();

                $this->view('dashclient', ['reservation' => $reservation->getReservationClient($_SESSION['nom']), 'transport' => $transport->getAllTransport()]);
            } else {
                $this->view('index');
            }
        } else {
            $this->view('index');
        }
    }

    public function dashtransporteur()
    {
        if (isLoggedIn()) {
            if ($_SESSION['role'] == 'Transporteur') {
                require $_SERVER['DOCUMENT_ROOT'] . '/FILROUGE/Projet-file-rouge/app/models/Transportmodels.php';
                require $_SERVER['DOCUMENT_ROOT'] . '/FILROUGE/Projet-file-rouge/app/models/Reservationmodels.php';

                $transportByid = new Transportmodels();
                $reservation = new Reservationmodels();
                $this->view('dashtransporteur', ['reservation' => $reservation->getReservationTransporteur($_SESSION['id']), 'transport' => $transportByid->getTransport($_SESSION['id'])]);
            } else {
                $this->view('index');
            }
        } else {
            $this->view('index');
        }
    }
}
