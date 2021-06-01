<?php

class Community_model
{
    private $table = 'komunitas';
    private $table2 = 'join_komunitas';
    private $table3 = 'warga';
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

    public function getWargaKomunitas()
    {
        $query = "SELECT id_komunitas, profile, username, link_join FROM $this->table3 AS w
                    JOIN $this->table2 ON w.id=id_warga 
                    JOIN $this->table AS k ON k.id=id_komunitas";
        $this->db->query($query);
        $this->db->execute();

        return $this->db->resultSet();
    }

    public function join($data)
    {
        $id_warga = $data['id_warga'];
        $id_komunitas = $data['id_komunitas'];

        $this->db->query("INSERT INTO $this->table2 (id_warga, id_komunitas) VALUES (:id_warga, :id_komunitas)");
        $this->db->bind('id_warga', $id_warga);
        $this->db->bind('id_komunitas', $id_komunitas);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function addCommunity($data)
    {
        $query = "INSERT INTO $this->table 
                    (nama, kegiatan)
                VALUES (
                    :nama, 
                    :kegiatan
                )";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kegiatan', $data['kegiatan']);
        
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteCommunity($id)
    {
        $this->db->query("DELETE FROM $this->table WHERE id=:id");
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

}

