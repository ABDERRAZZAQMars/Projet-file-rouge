<?php

class Clients{

    public function getAllClients(){
        $clients = Client::getAll();
        return $clients;
    }
}
?>