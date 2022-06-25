<?php
class Adminmodels {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function login($email, $password) {
        $this->db->query('SELECT * FROM admin WHERE email = :email');

        //Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();
        
        $Password = $row->password;

        if ($password == $Password) {
            return $row;
        } else {
            return false;
        }
    }
}
