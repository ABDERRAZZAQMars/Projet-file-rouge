<?php
class Reservationcontroller extends Controller
{
    public function __construct()
    {
        $this->reservationModel = $this->model('Reservationmodels');
    }

    public function reserver()
    {
        $data = [
            'trport_id' => '',
            'trport_matricule' => '',
            'trport_genre' => '',
            'trteur_id' => '',
            'client_nom' => '',
            'client_email' => '',
            'ville_souhaite' => '',
            'date_souhaite' => '',
            'validation' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST);

            $data = [
                'trport_id' => trim($_POST['trport_id']),
                'trport_matricule' => trim($_POST['trport_matricule']),
                'trport_genre' => trim($_POST['trport_genre']),
                'trteur_id' => trim($_POST['trteur_id']),
                'client_nom' => trim($_POST['client_nom']),
                'client_email' => trim($_POST['client_email']),
                'ville_souhaite' => trim($_POST['ville_souhaite']),
                'date_souhaite' => trim($_POST['date_souhaite']),
                'validation' => trim($_POST['validation'])
            ];
            

            if ($this->reservationModel->reserver($data)) {
                //Redirect to the login page
                header('location: ' . URLROOT . '/pages/dashclient');
            } else {
                die('Something went wrong.');
            }
        }
        $this->view('dashclient', $data);
    }

    public function valider()
    {
        $data = ['id' => $_POST['id']];
        if ($this->reservationModel->valider($data)) {
            //Redirect to the login page
            header('location: ' . URLROOT . '/pages/dashtransporteur');
        } else {
            die('Something went wrong.');
        }
        $this->view('dashtransporteur');
    }

    public function annuler()
    {
        $data = ['id' => $_POST['id']];
        if ($this->reservationModel->annuler($data)) {
            //Redirect to the login page
            header('location: ' . URLROOT . '/pages/dashtransporteur');
        } else {
            die('Something went wrong.');
        }
        $this->view('dashtransporteur');
    }
}
