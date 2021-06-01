<?php

class Community_model
{
    private $table = 'komunitas';
    private $table2 = 'join_komunitas';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllCommunity()
    {
        $this->db->query("SELECT * FROM $this->table");
        $this->db->execute();

        return $this->db->resultSet();
    }

    public function getWargaAktif()
    {
        $query = "SELECT id_warga FROM $this->table2 GROUP BY(id_warga) HAVING COUNT(id_warga) >= 2";

        $this->db->query($query);
        $this->db->execute();

        return $this->db->resultSet();
    }

}

