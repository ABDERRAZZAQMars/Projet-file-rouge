<?php
class Clientcontroller extends Controller
{
    public function __construct()
    {
        $this->clientModel = $this->model('Clientmodels');
    }

    public function register()
    {
        $data = [
            'nom' => '',
            'email' => '',
            'role' => '',
            'password' => '',
            'confirmPassword' => '',

            'nomError' => '',
            'emailError' => '',
            'passwordError' => '',
            'confirmPasswordError' => ''
        ];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Process form
            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST);

            $data = [
                'nom' => trim($_POST['nom']),
                'email' => trim($_POST['email']),
                'role' => trim($_POST['role']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                
                'nomError' => '',
                'emailError' => '',
                'passwordError' => '',
                'confirmPasswordError' => ''
            ];

            $passwordValidation = "/^(.{0,4}|[^a-z]*|[^\d]*)$/i"; //ignore case and accents

            //Validate nom on letters/numbers
            if (empty($data['nom'])) {
                $data['nomError'] = 'SVP ajouter le nom.';
            }

            //Validate email
            if (empty($data['email'])) {
                $data['emailError'] = 'Entrez un email valide.';
            } elseif (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                $data['emailError'] = 'Entrez une format valide.';
            } else {
                //Check if email exists.
                if ($this->clientModel->findAdminByEmail($data['email'])) {
                    $data['emailError'] = 'Cet email est dèja inscrit! Choisi un autre email.';
                }
            } 


            // Validate password on length, numeric values,
            if (empty($data['password'])) {
                $data['passwordError'] = 'SVP ajouter un password.';
            } elseif (strlen($data['password']) < 4) {
                $data['passwordError'] = 'Password au moin 4 charactères';
            } elseif (preg_match($passwordValidation, $data['password'])) {
                $data['passwordError'] = 'Password au moin un chiffre.';
            }

            //Validate confirm password
            if (empty($data['confirmPassword'])) {
                $data['confirmPasswordError'] = 'SVP ajouter un password.';
            } else {
                if ($data['password'] != $data['confirmPassword']) {
                    $data['confirmPasswordError'] = 'Passwords ne se ressemblent pas. Réssayer encore!';
                }
            }

            // Make sure that errors are empty
            if (empty($data['nomError']) && empty($data['emailError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])) {

                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //Register admin from model function
                if ($this->clientModel->register($data)) {
                    //Redirect to the login page
                    $this->view('dashclient', $data);
                } else {
                    die('Something went wrong.');
                }
            }
        }
        $this->view('index', $data);
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
            //Validate name
            if (empty($data['email'])) {
                $data['emailError'] = 'SVP entrer le Email.';
            } else {
                //Check if name exists.
                if ($this->clientModel->findAdminByEmail($data['name'])) {
                    $data['nameError'] = 'Ce Nom est dèja inscrit! Choisi un autre nom.';
                }
            }

            //Validate password
            if (empty($data['password'])) {
                $data['passwordError'] = 'SVP entrer le Password.';
            }

            //Check if all errors are empty
            if (empty($data['emailError']) && empty($data['passwordError'])) {
                $loggedInAdmin = $this->clientModel->login($data['email'], $data['password']);
                
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
        $_SESSION['id'] = $admin->id;
        $_SESSION['nom'] = $admin->nom;
        $_SESSION['email'] = $admin->email;
        $_SESSION['role'] = $admin->role;
        header('location:' . URLROOT . '/pages/dashclient');
    }

    public function logout()
    {
        unset($_SESSION['nom']);
        unset($_SESSION['email']);
        unset($_SESSION['role']);
        header('location:' . URLROOT . '/pages/index');
    }
}
