<?php

class Admin extends DB{
    static public function getAll(){
        
    }

    static public function loginn($password){
        $log = self::connect()->query("SELECT * FROM admin WHERE password='$password'");
        return $log;
    }
}
?>