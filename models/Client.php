<?php

class Client extends DB{
    static public function getAll(){
        
    }

    static public function create_user($nom,$email,$password)
    {
        $sql = self::connect()->query("INSERT INTO client VALUES ('','$nom','$email','$password')");
        return $sql;
    }

    static public function login($email,$password){
        $log = self::connect()->query("SELECT * FROM client WHERE email='$email' AND password='$password'");
        return $log;
    }
}
?>