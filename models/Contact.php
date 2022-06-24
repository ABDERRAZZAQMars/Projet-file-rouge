<?php

class Contact extends DB{
    
    static public function getAll(){
        
    }

    static public function contact_message($nom,$objet,$email,$phone,$message)
    {
        $sql = self::connect()->query("INSERT INTO contact VALUES ('','$nom','$objet','$email','$phone','$message')");
        return $sql;
    }
}
