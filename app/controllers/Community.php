<?php
session_start();

class Community extends Controller
{
  public function index()
  {

    $this->hasSession();
    $this->isAdmin(get_class($this));

    $data['class'] = get_class($this);
    $data['judul'] = 'Community';
    $data['warga'] = $_SESSION['warga'];
    $data['user'] = $_SESSION['warga'];
    $data['communities'] = $this->model('Community_model')->getAllCommunity();
    $data['allwarga'] = $this->model('Warga_model')->getAllUsers();
    $data['warga_aktif'] = array_column($this->model('Community_model')->getWargaAktif(), 'id_warga');
    $data['warga_komunitas'] = $this->model('Community_model')->getWargaKomunitas();

    $this->view('templates/appheader', $data);
    $this->view('community/index', $data);
    $this->view('templates/appfooter');
  }

  public function join()
  {
    $this->hasSession();

    if ($this->model('Community_model')->join($_POST) > 0 ) {
      header('Location: ' . BASEURL . '/community');
      exit;
    }

    header('Location: ' . BASEURL . '/community');
    exit;
  }
}
