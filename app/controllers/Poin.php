<?php

class Poin extends Controller
{
  public function index($id)
  {
    $this->hasSession();
    $this->isAdmin(get_class($this));

    $data['judul'] = 'Poin';
    $data['poin'] = $this->model('Poin_model')->getPoinId($id);
    $data['voucher'] = $this->model('Poin_model')->getAllVoucher();
    $this->view('templates/header', $data);
    $this->view('Poin/index', $data);
    $this->view('templates/footer');
  }
  public function admin()
  {
    $this->hasSession();
    $this->isNotAdmin(get_class($this));

    $data['judul'] = 'Poin Admin';
    $data['poin'] = $this->model('Poin_model')->getAllPoin();
    $data['voucher'] = $this->model('Poin_model')->getAllVoucher();
    $data['admin'] = $_SESSION['admin'];
    $this->view('templates/header', $data);
    $this->view('poin/admin', $data);
    $this->view('templates/footer');
  }
}
