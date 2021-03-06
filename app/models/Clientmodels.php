<?php
class Clientmodels
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function register($data)
    {
        $this->db->query('INSERT INTO client (nom, email, role, password) VALUES(:nom, :email, :role, :password)');

        //Bind values
        $this->db->bind(':nom', $data['nom']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':role', $data['role']);
        $this->db->bind(':password', $data['password']);


        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function login($email, $password)
    {
        $this->db->query('SELECT * FROM client WHERE email = :email');

        //Bind value
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        $hashedPassword = $row->password;

        if (password_verify($password, $hashedPassword)) {
            return $row;
        } else {
            return false;
        }
    }

    public function getAllClient()
    {
        $this->db->query('SELECT * FROM client order by id DESC');
        $this->db->execute();
        return $this->db->resultSet();
    }

    //Find user by name. name is passed in by the Controller.
    public function findAdminByEmail($email)
    {
        //Prepared statement
        $this->db->query('SELECT * FROM client WHERE email = :email');

        //Name param will be binded with the name variable
        $this->db->bind(':email', $email);

        //Check if name is already registered
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
