<?php

class Riwayat_model
{
   private $table1 = 'aktivitas_warga';
   private $table2 = 'voucher_warga';
   private $table3 = 'aktivitas';
   private $table4 = 'voucher';
   private $table5 = 'warga';

   private $db;

   public function __construct()
   {
      $this->db = new Database;
   }


   public function getRiwayatActivityById($id)
   {
      $this->db->query("SELECT * FROM $this->table1, $this->table3 WHERE $this->table1.id_aktivitas=$this->table3.id AND id_warga=:id");
      $this->db->bind('id', $id);
      $this->db->execute();

      return $this->db->resultSet();
   }
   public function getRiwayatVoucherById($id)
   {
      $this->db->query("SELECT * FROM $this->table2, $this->table4 WHERE $this->table2.id_voucher=$this->table4.id AND id_warga=:id");
      $this->db->bind('id', $id);
      $this->db->execute();

      return $this->db->resultSet();
   }
   public function getAllRiwayatActivity()
   {
      $this->db->query("SELECT * FROM $this->table1, $this->table3, $this->table5 WHERE $this->table1.id_aktivitas=$this->table3.id AND $this->table1.id_warga=$this->table5.id");
      $this->db->execute();

      return $this->db->resultSet();
   }
   public function getAllRiwayatVoucher()
   {
      $this->db->query("SELECT * FROM $this->table2, $this->table4, $this->table5 WHERE $this->table2.id_voucher=$this->table4.id AND $this->table2.id_warga=$this->table5.id");
      $this->db->execute();

      return $this->db->resultSet();
   }
}
