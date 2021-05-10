<?php

class Poin_model
{
    private $table = 'poin';
    private $table2 = 'voucher';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllVoucher()
    {
        $this->db->query("SELECT * FROM $this->table2");
        $this->db->execute();

        return $this->db->resultSet();
    }

    public function getAllPoin()
    {
        $this->db->query("SELECT * FROM $this->table2");
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
}
