<?php
session_start();

class Poin extends Controller
{
  public function index()
  {
    $this->hasSession();
    $this->isAdmin(get_class($this));

    $data['judul'] = 'Poin';
    $data['voucher'] = $this->model('Poin_model')->getAllVoucher();
    $data['warga'] = $_SESSION['warga'];
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
  public function tambah()
  {
    $this->hasSession();
    $this->isNotAdmin($this);

    if ($this->model('Poin_model')->addVoucher($_POST) > 0) {
      header('Location: ' . BASEURL . '/poin/admin');
      exit;
    }
  }

  public function hapus($id)
  {
    $this->hasSession();
    $this->isNotAdmin($this);

    if ($this->model('Poin_model')->deleteVoucher($id) > 0) {
      header('Location: ' . BASEURL . '/poin/admin');
      exit;
    }
  }

  public function getDataEdit()
  {
    echo json_encode($this->model('Poin_model')->getVoucherById($_POST['id']));
  }

  public function edit()
  {
    $this->hasSession();
    $this->isNotAdmin($this);

    if ($this->model('Poin')->updateVoucher($_POST) > 0) {
      header('Location: ' . BASEURL . '/poin/admin');
      exit;
    }
  }
}
