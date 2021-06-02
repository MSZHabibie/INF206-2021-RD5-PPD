<?php

class Activity_model
{
    private $table = 'aktivitas';
    private $table2 = 'aktivitas_warga';
    private $table3 = 'warga';
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

    public function getActivityWarga($id_warga)
    {
        $this->db->query("SELECT id, nama FROM $this->table JOIN $this->table2 ON id=id_aktivitas WHERE id_warga=:id_warga");
        $this->db->bind('id_warga', $id_warga);
        $this->db->execute();

        return $this->db->resultSet();
    }

    public function cekActivityWarga($id_warga, $id_aktivitas)
    {
        $this->db->query("SELECT * FROM $this->table2 WHERE id_warga=:id_warga AND id_aktivitas=:id_aktivitas");
        $this->db->bind('id_warga', $id_warga);
        $this->db->bind('id_aktivitas', $id_aktivitas);
        $this->db->execute();

        return $this->db->rowCount() > 0 ? true : false;
    }

    public function daftar($data, $id_warga, $id_aktivitas)
    {
        if (!isset($data['daftar'])) {
            return false;
        }

        $aktivitas = $this->getActivityById($id_aktivitas);

        if ($aktivitas['peserta'] >= $aktivitas['maks_peserta']) {
            return false;
        }

        $this->db->query("INSERT INTO $this->table2 (id_warga, id_aktivitas, waktu) VALUES (:id_warga, :id_aktivitas, NOW())");
        $this->db->bind('id_warga', $id_warga);
        $this->db->bind('id_aktivitas', $id_aktivitas);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function batal_daftar($data, $id_warga, $id_aktivitas)
    {
        if (!isset($data['batal_daftar'])) {
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

    public function addActivity($data)
    {
        $query = "INSERT INTO $this->table 
                    (nama, deskripsi, syarat, maks_peserta, tanggal, jam, tempat, poin, gambar)
                VALUES (
                    :nama, 
                    :deskripsi, 
                    :syarat, 
                    :maks_peserta, 
                    :tanggal, 
                    :jam, 
                    :tempat, 
                    :poin, 
                    :gambar
                )";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('syarat', $data['syarat']);
        $this->db->bind('maks_peserta', $data['maks_peserta']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('jam', $data['jam']);
        $this->db->bind('tempat', $data['tempat']);
        $this->db->bind('poin', $data['poin']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteActivity($id)
    {
        $this->db->query("DELETE FROM $this->table WHERE id=:id");
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateActivity($data)
    {
        $query = "UPDATE $this->table SET 
                    nama = :nama, 
                    deskripsi = :deskripsi, 
                    syarat = :syarat, 
                    maks_peserta = :maks_peserta, 
                    tanggal = :tanggal, 
                    jam = :jam, 
                    tempat = :tempat, 
                    poin = :poin, 
                    gambar = :gambar
                WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('syarat', $data['syarat']);
        $this->db->bind('maks_peserta', $data['maks_peserta']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('jam', $data['jam']);
        $this->db->bind('tempat', $data['tempat']);
        $this->db->bind('poin', $data['poin']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getPeserta($id_aktivitas)
    {
        $query = "SELECT id, nama, username, email, no_hp, confirmed FROM $this->table3 
                    JOIN $this->table2 ON id_warga=id AND id_aktivitas=:id_aktivitas
                    WHERE id IN
                (SELECT id_warga FROM $this->table2 WHERE id_aktivitas = :id_aktivitas )";

        $this->db->query($query);
        $this->db->bind('id_aktivitas', $id_aktivitas);
        $this->db->execute();

        return $this->db->resultSet();
    }

    public function updatePoinWarga($id_warga, $poin)
    {
        $query = "UPDATE $this->table3 SET poin=:poin WHERE id=:id_warga";

        $this->db->query($query);
        $this->db->bind('poin', $poin);
        $this->db->bind('id_warga', $id_warga);
        $this->db->execute();
    }

    public function getPoinAktivitas($id_aktivitas)
    {
        $query = "SELECT poin FROM $this->table WHERE id=:id_aktivitas";
    
        $this->db->query($query);
        $this->db->bind('id_aktivitas', $id_aktivitas);
        $this->db->execute();
        
        return $this->db->single();
    }

    public function updateConfirmedWargaAktivitas($id_warga, $id_aktivitas)
    {
        $confirmed = 1;
        $query = "UPDATE $this->table2 SET confirmed=:confirmed WHERE id_warga=:id_warga AND id_aktivitas=:id_aktivitas";

        $this->db->query($query);
        $this->db->bind('confirmed', $confirmed);
        $this->db->bind('id_warga', $id_warga);
        $this->db->bind('id_aktivitas', $id_aktivitas);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
