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

    public function cekActivityWarga($id_warga, $id_aktivitas)
    {
        $this->db->query("SELECT * FROM $this->table2 WHERE id_warga=:id_warga AND id_aktivitas=:id_aktivitas");
        $this->db->bind('id_warga', $id_warga);
        $this->db->bind('id_aktivitas', $id_aktivitas);
        $this->db->execute();

        return $this->db->rowCount()>0? true:false;
    }

    public function daftar($data, $id_warga, $id_aktivitas)
    {
        if( !isset($data['daftar']) ) {
            return false;
        }

        $aktivitas = $this->getActivityById($id_aktivitas);

        if( $aktivitas['peserta'] >= $aktivitas['maks_peserta']) {
            return false;
        }

        $this->db->query("INSERT INTO $this->table2 VALUES (:id_warga, :id_aktivitas)");
        $this->db->bind('id_warga', $id_warga);
        $this->db->bind('id_aktivitas', $id_aktivitas);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function batal_daftar($data, $id_warga, $id_aktivitas)
    {
        if( !isset($data['batal_daftar']) ) {
            return false;
        }

        $this->db->query("DELETE FROM $this->table2 WHERE id_warga=:id_warga AND id_aktivitas=:id_aktivitas");
        $this->db->bind('id_warga', $id_warga);
        $this->db->bind('id_aktivitas', $id_aktivitas);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updatePeserta($id_aktivitas, $tambah)
    {
        $peserta = $this->getActivityById($id_aktivitas)['peserta'];

        $tambah ? $peserta++ : $peserta--;

        $this->db->query("UPDATE $this->table SET peserta = :peserta WHERE id = :id_aktivitas");
        $this->db->bind('peserta', $peserta);
        $this->db->bind('id_aktivitas', $id_aktivitas);
        $this->db->execute();
    }
}