<?php

class AdminController
{

    public function getAllClients()
    {
        $admin = Admin::getAll();
        return $admin;
    }



    public function logadmin()
    {
        if (isset($_POST['logadmine'])) {
            $password = sha1($_POST['password']);

            $log = Admin::loginn($password);
            $row = $log->rowCount();

            if ($row == 1) {
                Redirect::to('admin');
            } else {
                echo'<script src="views/assets/js/password.js"></script>';
            }
        }
    }
}
