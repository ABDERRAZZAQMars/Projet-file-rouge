<?php
class Reservationmodels
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function reserver($data)
    {
        $this->db->query('INSERT INTO reservation (trport_id, trport_matricule, trport_genre, trteur_id, client_nom, client_email, ville_souhaite, date_souhaite, validation) VALUES(:trport_id, :trport_matricule, :trport_genre, :trteur_id, :client_nom, :client_email, :ville_souhaite, :date_souhaite, :validation)');

        //Bind values
        $this->db->bind(':trport_id', $data['trport_id']);
        $this->db->bind(':trport_matricule', $data['trport_matricule']);
        $this->db->bind(':trport_genre', $data['trport_genre']);
        $this->db->bind(':trteur_id', $data['trteur_id']);
        $this->db->bind(':client_nom', $data['client_nom']);
        $this->db->bind(':client_email', $data['client_email']);
        $this->db->bind(':ville_souhaite', $data['ville_souhaite']);
        $this->db->bind(':date_souhaite', $data['date_souhaite']);
        $this->db->bind(':validation', $data['validation']);


        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getAllReservation()
    {
        $this->db->query('SELECT * FROM reservation order by res_id DESC');
        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getReservationClient($client_nom)
    {
        $this->db->query('SELECT * FROM reservation WHERE client_nom = :nom  order by res_id DESC');
        $this->db->bind(':nom', $client_nom);

        $this->db->execute();
        return $this->db->resultSet();
    }

    public function getReservationTransporteur($trteur_id)
    {
        $this->db->query('SELECT * FROM reservation WHERE trteur_id = :nom  order by res_id DESC');
        $this->db->bind(':nom', $trteur_id);

        $this->db->execute();
        return $this->db->resultSet();
    }


    public function valider($data)
    {
        $this->db->query("UPDATE reservation SET validation=:validation WHERE res_id = :id");

        //Bind values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':validation', 'Valider');
        
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function annuler($data)
    {
        $this->db->query("UPDATE reservation SET validation=:validation WHERE res_id = :id");

        //Bind values
        $this->db->bind(':id', $data['id']);
        $this->db->bind(':validation', 'Annuler');
        
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}