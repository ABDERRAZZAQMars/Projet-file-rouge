<?php
class Transportcontroller extends Controller
{
    public function __construct()
    {
        $this->transportModel = $this->model('Transportmodels');
    }

    public function add()
    {
        $data = [
            'genre' => '',
            'matricule' => '',
            'volume_coffre' => '',
            'ville' => '',
            'tr_id' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST);

            $data = [
                'genre' => trim($_POST['genre']),
                'matricule' => trim($_POST['matricule']),
                'volume_coffre' => trim($_POST['volume_coffre']),
                'ville' => trim($_POST['ville']),
                'tr_id' => trim($_POST['tr_id'])
            ];
            

            if ($this->transportModel->add($data)) {
                //Redirect to the login page
                header('location: ' . URLROOT . '/pages/dashtransporteur');
            } else {
                die('Something went wrong.');
            }
        }
        $this->view('dashtransporteur', $data);
    }

    public function delete()
    {
        $data = ['id' => $_POST['id']];
        if ($this->transportModel->delete($data)) {
            //Redirect to the login page
            header('location: ' . URLROOT . '/pages/dashtransporteur');
        } else {
            die('Something went wrong.');
        }
        $this->view('dashtransporteur');
    }
}
