<?php

class Notify_model
{
    private $table = 'notifikasi';
    private $table2 = 'notify_warga';

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllNotifyById($id_warga)
    {
        $this->db->query("SELECT * FROM $this->table LEFT JOIN $this->table2 ON id = id_notify WHERE id_warga != :id_warga OR id_warga IS NULL");
        $this->db->bind('id_warga', $id_warga);
        $this->db->execute();

        return $this->db->resultSet();
    }
    
    public function tekanNotify($id_warga, $id_notify)
    {
        $this->db->query("INSERT INTO $this->table2 VALUES (:id_warga, :id_notify, NOW())");
        $this->db->bind('id_warga', $id_warga);
        $this->db->bind('id_notify', $id_notify);
        $this->db->execute();
    
        return $this->db->rowCount();
    }
}