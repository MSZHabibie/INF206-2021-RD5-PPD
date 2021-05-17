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

}

