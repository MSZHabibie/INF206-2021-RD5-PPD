<?php
session_start();

class Poin extends Controller
{

  public function index()
  {
    $this->hasSession();
    $this->isAdmin(get_class($this));

    $data['class'] = get_class($this);
    $data['judul'] = 'Poin';
    $data['voucher'] = $this->model('Poin_model')->getAllVoucher();
    $data['warga'] = $_SESSION['warga'];
    $data['user'] = $_SESSION['warga'];
    $data['notifikasi'] = $this->model('Notify_model')->getAllNotifyById($data['warga']['id']);
    $data['warga'] = $this->model('Poin_model')->getPoinById($data['warga']['id']);
    $this->view('templates/appheader', $data);
    $this->view('Poin/index', $data);
    $this->view('templates/appfooter');
  }
  public function admin()
  {
    $this->hasSession();
    $this->isNotAdmin(get_class($this));

    $data['class'] = get_class($this);
    $data['judul'] = 'Poin Admin';
    $data['poin'] = $this->model('Poin_model')->getAllPoin();
    $data['voucher'] = $this->model('Poin_model')->getAllVoucher();
    $data['admin'] = $_SESSION['admin'];
    $data['user'] = $_SESSION['admin'];
    $data['notifikasi'] = $this->model('Notify_model')->getAllNotifyById($data['admin']['id']);
    $this->view('templates/appheader', $data);
    $this->view('poin/admin', $data);
    $this->view('templates/appfooter');
  }
  public function tambah()
  {
    $this->hasSession();
    $this->isNotAdmin($this);

    if ($this->model('Poin_model')->addVoucher($_POST) > 0) {
      Flasher::setFlash('berhasil', 'ditambahkan', 'success');
      header('Location: ' . BASEURL . '/poin/admin');
      exit;
    } else {
      Flasher::setFlash('gagal', 'ditambahkan', 'danger');
      header('Location: ' . BASEURL . '/poin/admin');
      exit;
    }
  }

  public function hapus($id)
  {
    $this->hasSession();
    $this->isNotAdmin($this);

    if ($this->model('Poin_model')->deleteVoucher($id) > 0) {
      Flasher::setFlash('berhasil', 'dihapus', 'success');
      header('Location: ' . BASEURL . '/poin/admin');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dihapus', 'danger');
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

    if ($this->model('Poin_model')->updateVoucher($_POST) > 0) {
      Flasher::setFlash('berhasil', 'diedit', 'success');
      header('Location: ' . BASEURL . '/poin/admin');
      exit;
    } else {
      Flasher::setFlash('gagal', 'diedit', 'danger');
      header('Location: ' . BASEURL . '/poin/admin');
      exit;
    }
  }

  public function pembelian($id_warga, $id_voucher)
  {
    $this->hasSession();
    $this->isAdmin($this);

    if ($this->model('Poin_model')->beliVoucher($id_warga, $id_voucher) > 0) {
      Flasher::setFlash('berhasil', 'dibeli', 'success');
      header('Location: ' . BASEURL . '/poin');
      exit;
    } else {
      Flasher::setFlash('gagal', 'dibeli', 'danger');
      header('Location: ' . BASEURL . '/poin');
      exit;
    }
  }
  public function notify($id_warga, $id_notify)
  {
    $this->hasSession();
    $this->isAdmin($this);

    $this->model('Notify_model')->tekanNotify($id_warga, $id_notify);
    header('Location: ' . BASEURL . '/poin');
  }
}
