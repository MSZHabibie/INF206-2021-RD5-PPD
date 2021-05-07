<?php 

class Activity_model
{
    private $table = 'aktivitas';
    private $table2 = 'aktivitas_warga';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllActivity()
    {
        $this->db->query("SELECT * FROM $this->table");
        $this->db->execute();

        return $this->db->resultSet();
    }

    public function getActivityById($id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE id=:id");
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->single();
    }

    public function daftar($id_warga, $id_aktivitas)
    {
        $this->db->query("INSERT INTO $this->table2 VALUES (:id_warga, :id_aktivitas)");
        $this->db->bind('id_warga', $id_warga);
        $this->db->bind('id_aktivitas', $id_aktivitas);
        $this->db->execute();

        return $this->db->rowCount();
    }
}