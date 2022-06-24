<?php

class ClientsController
{

    public function getAllClients()
    {
        $clients = Client::getAll();
        return $clients;
    }

    public function sign_up()
    {
        if (isset($_POST['create'])) {
            if ($_POST['password'] == $_POST['rpassword']) {
                $password = sha1($_POST['password']);
                $client = Client::create_user($_POST['nom'], $_POST['email'], $password);
                if ($client) {
                    echo '<script src="views/assets/js/creer.js"></script>';
                }
            } else {
                echo '<script src="views/assets/js/password.js"></script>';
            }
        }
    }

    public function log()
    {
        if (isset($_POST['login'])) {
            $password = sha1($_POST['password']);
            $log = Client::login($_POST['email'], $password);
            $row = $log->rowCount();
            if ($row == 1) {
                Redirect::to('admin');
            } else {
                echo '<script src="views/assets/js/password.js"></script>';
            }
        }
    }
}
