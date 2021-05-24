<?php
session_start();

class Community extends Controller
{
  public function index()
  {
    $this->hasSession();
    $this->isAdmin(get_class($this));

    $data['judul'] = 'Community';
    $data['komunitas'] = $this->model('Community_model')->getAllCommunity();
    $data['warga'] = $_SESSION['warga'];
    $this->view('templates/header', $data);
    $this->view('community/index', $data);
    $this->view('templates/footer');
  }

  public function admin()
  {
    $this->hasSession();
    $this->isNotAdmin(get_class($this));

    $data['judul'] = 'Community Admin';
    $data['komunitas'] = $this->model('Community_model')->getAllCommunity();
    $data['admin'] = $_SESSION['admin'];
    $this->view('templates/header', $data);
    $this->view('community/admin', $data);
    $this->view('templates/footer');
  }
  
  public function tambah()
  {
    $this->hasSession();
    $this->isNotAdmin($this);

    if ($this->model('Community_model')->addCommunity($_POST) > 0) {
      header('Location: ' . BASEURL . '/komunitas/admin');
      exit;
    }
  }

  public function hapus($id)
  {
    $this->hasSession();
    $this->isNotAdmin($this);

    if ($this->model('Community_model')->deleteCommunity($id) > 0) {
      header('Location: ' . BASEURL . '/komunitas/admin');
      exit;
    }
  }
  public function edit()
  {
    $this->hasSession();
    $this->isNotAdmin($this);

    if ($this->model('Community_model')->updateCommunity($_POST) > 0) {
      header('Location: ' . BASEURL . '/komunitas/admin');
      exit;
    }
  }
}


