<?php
session_start();

class Community extends Controller
{
  public function index( $halamanAktif = 1 )
  {  
    $this->hasSession();
    $this->isAdmin(get_class($this));
    
    $data['class'] = get_class($this);
    $data['judul'] = 'Community';
    $data['warga'] = $_SESSION['warga'];
    $data['user'] = $_SESSION['warga'];
    $data['communities'] = $this->model('Community_model')->getAllCommunity();
    
    $jumlahWarga = count($this->model('Warga_model')->getAllUsers());
    $limit = 5;
    $start = ($limit * $halamanAktif) - $limit;
    
    $data['jumlahPagination'] = ceil($jumlahWarga/$limit);
    $data['allwargalimit'] = $this->model('Warga_model')->getAllUsersLimit($start, $limit);

    $data['halaman_aktif'] = $halamanAktif;
    
    $data['warga_aktif'] = array_column($this->model('Community_model')->getWargaAktif(), 'id_warga');
    $data['warga_komunitas'] = $this->model('Community_model')->getWargaKomunitas();
    $data['komunitas_warga'] = array_column($this->model('Community_model')->getKomunitasWarga($data['warga']['id']), 'id_komunitas');

    if ( !$data['komunitas_warga'] ) {
      $data['komunitas_warga'] = [];
    }

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

  public function batalJoin($id_warga, $id_komunitas)
  {
    $this->hasSession();

    if ($this->model('Community_model')->batalJoin($id_warga, $id_komunitas) > 0 ) {
      header('Location: ' . BASEURL . '/community');
      exit;
    }

    header('Location: ' . BASEURL . '/community');
    exit;
  }

  public function admin($halamanAktif = 1)
  {
    $this->hasSession();
    $this->isNotAdmin(get_class($this));

    $data['class'] = get_class($this);
    $data['judul'] = 'Community';
    $data['admin'] = $_SESSION['admin'];
    $data['user'] = $_SESSION['admin'];
    $data['communities'] = $this->model('Community_model')->getAllCommunity();

    $jumlahWarga = count($this->model('Warga_model')->getAllUsers());
    $limit = 5;
    $start = ($limit * $halamanAktif) - $limit;

    $data['jumlahPagination'] = ceil($jumlahWarga/$limit);
    $data['allwargalimit'] = $this->model('Warga_model')->getAllUsersLimit($start, $limit);

    $data['halaman_aktif'] = $halamanAktif;

    $data['warga_aktif'] = array_column($this->model('Community_model')->getWargaAktif(), 'id_warga');
    $data['warga_komunitas'] = $this->model('Community_model')->getWargaKomunitas();

    $this->view('templates/appheader', $data);
    $this->view('community/admin', $data);
    $this->view('templates/appfooter');
  }

  public function tambah()
  {
      $this->hasSession();
      $this->isNotAdmin($this);

      if ($this->model('Community_model')->addCommunity($_POST) > 0) {
          header('Location: ' . BASEURL . '/community/admin');
          exit;
      }
  }

  public function hapus($id)
  {
    $this->hasSession();
    $this->isNotAdmin($this);

    if ($this->model('Community_model')->deleteCommunity($id) > 0) {
      header('Location: ' . BASEURL . '/community/admin');
      exit;
    }
  }

  public function getDataEdit()
  {
      echo json_encode($this->model('Community_model')->getCommunityById($_POST['id']));
  }

  public function edit()
  {
    $this->hasSession();
    $this->isNotAdmin($this);

    if ($this->model('Community_model')->updateCommunity($_POST) > 0) {
      header('Location: ' . BASEURL . '/community/admin');
      exit;
    }

    header('Location: ' . BASEURL . '/community/admin');
    exit;
  }
}