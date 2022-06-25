<?php
class Admincontroller extends Controller
{
    public function __construct()
    {
        $this->adminModel = $this->model('Adminmodels');
    }

    public function login()
    {
        $data = [
            'email' => '',
            'password' => '',
            'emailError' => '',
            'passwordError' => ''
        ];

        //Check for post
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST);

            $data = [
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'emailError' => '',
                'passwordError' => '',
            ];
            //Validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'SVP entrer le Email.';
            }

            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'SVP entrer le Password.';
            }

            //Check if all errors are empty
            if (empty($data['emailError']) && empty($data['passwordError'])) {
                $loggedInAdmin = $this->adminModel->login($data['email'], $data['password']);
                
                if ($loggedInAdmin) {
                    $this->createAdminSession($loggedInAdmin);
                } else {
                    $data['passwordError'] = 'Password ou Nom est incorrecte. Réssayer encore!';
                    $this->view('index', $data);
                }
            }
        } else {
            $data = [
                'email' => '',
                'password' => '',
                'nameError' => '',
                'passwordError' => ''
            ];
        }
        $this->view('index');
    }

    public function createAdminSession($admin)
    {
        $_SESSION['nom'] = $admin->nom;
        $_SESSION['email'] = $admin->email;
        $_SESSION['role'] = $admin->role;
        header('location:' . URLROOT . '/pages/dashboard');
    }

    public function logout()
    {
        unset($_SESSION['nom']);
        unset($_SESSION['email']);
        unset($_SESSION['role']);
        header('location:' . URLROOT . '/pages/index');
    }
}
