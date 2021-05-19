<?php

class Poin_model
{
    private $table = 'warga';
    private $table2 = 'voucher';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllPoin()
    {
        $this->db->query("SELECT * FROM $this->table");
        $this->db->execute();

        return $this->db->resultSet();
    }

    public function getPoinById($id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE id=:id");
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->single();
    }
    public function getAllVoucher()
    {
        $this->db->query("SELECT * FROM $this->table2");
        $this->db->execute();

        return $this->db->resultSet();
    }

    public function getVoucherById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table2 . " WHERE id =:id");
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->single();
    }

    public function addVoucher($data)
    {
        $this->db->query("INSERT INTO $this->table2 VALUES ('', :nama, :deskripsi, :poin, :gambar)");
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->bind('poin', $data['poin']);
        $this->db->bind('deskripsi', $data['deskripsi']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteVoucher($id)
    {
        $this->db->query("DELETE FROM $this->table2 WHERE id=:id");
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateVoucher($data)
    {
        $query = "UPDATE aktivitas SET 
                    nama = :nama, 
                    deskripsi = :deskripsi, 
                    poin = :poin, 
                    gambar = :gambar
                WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('poin', $data['poin']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
