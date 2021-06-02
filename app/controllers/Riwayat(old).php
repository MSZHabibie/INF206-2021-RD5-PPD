<?php
session_start();

class Riwayat extends Controller
{

   public function index()
   {
      $this->hasSession();
      $this->isAdmin(get_class($this));

      $data['judul'] = 'Riwayat';
      $data['warga'] = $_SESSION['warga'];
      $data['riwayat'] = $this->model('Riwayat_model')->getRiwayatActivityById($data['warga']['id']);
      $data['riwayat2'] = $this->model('Riwayat_model')->getRiwayatVoucherById($data['warga']['id']);
      $this->view('templates/header', $data);
      $this->view('riwayat/index', $data);
      $this->view('templates/footer');
   }
   public function admin()
   {
      $this->hasSession();
      $this->isNotAdmin(get_class($this));

      $data['judul'] = 'Poin Admin';
      $data['riwayat'] = $this->model('Riwayat_model')->getAllRiwayatActivity();
      $data['riwayat2'] = $this->model('Riwayat_model')->getAllRiwayatVoucher();
      $data['admin'] = $_SESSION['admin'];
      $this->view('templates/header', $data);
      $this->view('riwayat/admin', $data);
      $this->view('templates/footer');
   }
}
