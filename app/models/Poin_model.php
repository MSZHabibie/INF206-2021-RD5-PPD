<?php

class Poin_model
{
    private $table = 'warga';
    private $table2 = 'voucher';
    private $table3 = 'voucher_warga';
    private $table4 = 'notifikasi';

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
        $this->db->query("INSERT INTO $this->table2 VALUES ('', :nama, :deskripsi, :poin, :gambar, :jumlah)");
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->bind('poin', $data['poin']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('jumlah', $data['jumlah']);

        $this->db->execute();
        
        $this->db->query("INSERT INTO $this->table4 VALUES ('', :jenis, :nama, :gambar, :crud, NOW())");
        $this->db->bind('jenis', 'poin');
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->bind('crud', 'Di Tambahkan');

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteVoucher($id)
    {
        $this->db->query("INSERT INTO $this->table4 VALUES ('', :jenis, :nama, :gambar, :crud, NOW())");
        $this->db->bind('jenis', 'poin');
        $this->db->bind('nama', $id['nama']);
        $this->db->bind('gambar', $id['gambar']);
        $this->db->bind('crud', 'Di Hapus');

        $this->db->execute();

        $this->db->query("DELETE FROM $this->table2 WHERE id=:id");
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updateVoucher($data)
    {
        $query = "UPDATE voucher SET 
                    nama = :nama, 
                    deskripsi = :deskripsi, 
                    poin = :poin, 
                    gambar = :gambar,
                    jumlah = :jumlah
                WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('deskripsi', $data['deskripsi']);
        $this->db->bind('poin', $data['poin']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->bind('jumlah', $data['jumlah']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        $this->db->query("INSERT INTO $this->table4 VALUES ('', :jenis, :nama, :gambar, :crud, NOW())");
        $this->db->bind('jenis', 'poin');
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('gambar', $data['gambar']);
        $this->db->bind('crud', 'Di Update');

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function beliVoucher($id_warga, $id_voucher)
    {
        $warga = $this->getPoinById($id_warga);
        $voucher = $this->getVoucherById($id_voucher);

        // Voucher tidak tersedia
        if ($voucher['jumlah'] <= 0) {
            return false;
        }

        if (($warga['poin'] - $voucher['poin']) < 0) {
            return false;
        }

        // Mengurangi jumlah poin dan voucher di database
        $warga['poin'] = $warga['poin'] - $voucher['poin'];
        $voucher['jumlah'] -= 1;

        // Menghapus Voucher ketika jumlah = 0
        // if ($voucher['jumlah'] <= 0) {
        //     $this->deleteVoucher($id_voucher);
        // }

        // mengupdate jumlah poin di table warga
        $this->db->query("UPDATE $this->table SET poin = :poin WHERE id = :id");
        $this->db->bind('poin', $warga['poin']);
        $this->db->bind('id', $warga['id']);
        $this->db->execute();

        // mengupdate jumlah voucher di table voucher
        $this->db->query("UPDATE $this->table2 SET jumlah = :jumlah WHERE id = :id");
        $this->db->bind('jumlah', $voucher['jumlah']);
        $this->db->bind('id', $voucher['id']);
        $this->db->execute();

        // Menambah data pembelian di table voucher_warga
        $this->db->query("INSERT INTO $this->table3 VALUES (:id_warga, :id_voucher, NOW())");
        $this->db->bind('id_warga', $id_warga);
        $this->db->bind('id_voucher', $id_voucher);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
