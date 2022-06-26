<?php
class Transportmodels
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function add($data)
    {
        $this->db->query('INSERT INTO transport (genre, matricule, volume_coffre, ville, tr_id) VALUES(:genre, :matricule, :volume_coffre, :ville, :tr_id)');

        //Bind values
        $this->db->bind(':genre', $data['genre']);
        $this->db->bind(':matricule', $data['matricule']);
        $this->db->bind(':volume_coffre', $data['volume_coffre']);
        $this->db->bind(':ville', $data['ville']);
        $this->db->bind(':tr_id', $data['tr_id']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($data)
    {
        $this->db->query('DELETE FROM transport WHERE id=:id');

        $this->db->bind(':id', $data['id']);

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function getTransport($id)
    {
        $this->db->query('SELECT * FROM transport WHERE tr_id = :id order by id DESC');

        $this->db->bind(':id', $id);

        $this->db->execute();
        return $this->db->resultSet();
    }


    public function getAllTransport()
    {
        $this->db->query('SELECT * FROM transport order by id DESC');
        $this->db->execute();
        return $this->db->resultSet();
    }
}