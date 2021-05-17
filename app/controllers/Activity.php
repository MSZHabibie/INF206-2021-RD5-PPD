<?php
session_start();

class Activity extends Controller
{
    public function index()
    {
        $this->hasSession();
        $this->isAdmin(get_class($this));

        $data['judul'] = 'Activity';
        $data['aktivitas'] = $this->model('Activity_model')->getAllActivity();
        $data['warga'] = $_SESSION['warga'];
        //$this->view('templates/header', $data);
        $this->view('activity/index', $data);
        //$this->view('templates/footer');
    }

    public function admin()
    {
        $this->hasSession();
        $this->isNotAdmin(get_class($this));

        $data['judul'] = 'Activity Admin';
        $data['aktivitas'] = $this->model('Activity_model')->getAllActivity();
        $data['admin'] = $_SESSION['admin'];
        //$this->view('templates/header', $data);
        $this->view('activity/admin', $data);
        $this->view('templates/modal-aktivitas');
        //$this->view('templates/footer');
    }

    public function detail($id)
    {
        $this->hasSession();
        $this->isAdmin($this);

        $data['judul'] = 'Activity Detail';
        $data['aktivitas'] = $this->model('Activity_model')->getActivityById($id);
        $data['warga'] = $_SESSION['warga'];
        $data['aktivitas_warga'] = $this->model('Activity_model')->cekActivityWarga($data['warga']['id'], $data['aktivitas']['id']);

        $this->view('templates/header', $data);
        $this->view('activity/detail', $data);
        $this->view('templates/footer');
    }

    public function daftar($id_warga, $id_aktivitas)
    {
        $this->hasSession();

        if ($this->model('Activity_model')->daftar($_POST, $id_warga, $id_aktivitas) > 0) {
            $this->model('Activity_model')->updatePeserta($id_aktivitas, true);
        } elseif ($this->model('Activity_model')->batal_daftar($_POST, $id_warga, $id_aktivitas) > 0) {
            $this->model('Activity_model')->updatePeserta($id_aktivitas, false);
        }
        header('Location: ' . BASEURL . '/activity');
        exit;
    }

    public function detailAdmin($id)
    {
        $this->hasSession();
        $this->isNotAdmin($this);

        $data['judul'] = 'Activity Detail';
        $data['aktivitas'] = $this->model('Activity_model')->getActivityById($id);

        $this->view('templates/header', $data);
        $this->view('activity/detailAdmin', $data);
        $this->view('templates/modal-aktivitas');
        $this->view('templates/footer');
    }

    public function tambah()
    {
        $this->hasSession();
        $this->isNotAdmin($this);

        if ($this->model('Activity_model')->addActivity($_POST) > 0) {
            header('Location: ' . BASEURL . '/activity/admin');
            exit;
        }
    }

    public function hapus($id)
    {
        $this->hasSession();
        $this->isNotAdmin($this);

        if ($this->model('Activity_model')->deleteActivity($id) > 0) {
            header('Location: ' . BASEURL . '/activity/admin');
            exit;
        }
    }

    public function getDataEdit()
    {
        echo json_encode($this->model('Activity_model')->getActivityById($_POST['id']));
    }

    public function edit()
    {
        $this->hasSession();
        $this->isNotAdmin($this);

        if ($this->model('Activity_model')->updateActivity($_POST) > 0) {
            header('Location: ' . BASEURL . '/activity/admin');
            exit;
        }
    }
}
