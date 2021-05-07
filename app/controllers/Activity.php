<?php
session_start();

class Activity extends Controller
{
    public function index()
    {
        $this->hasSession();

        $data['judul'] = 'Activity';
        $data['aktivitas'] = $this->model('Activity_model')->getAllActivity();
        $data['warga'] = $_SESSION['warga'];
        $this->view('templates/header', $data);
        $this->view('activity/index', $data);
        $this->view('templates/footer');
    }

    public function admin()
    {
        $this->hasSession();

        $data['judul'] = 'Activity Admin';
        $this->view('templates/header', $data);
        $this->view('activity/admin', $data);
        $this->view('templates/footer');
    }

    public function detail($id)
    {
        $this->hasSession();

        $data['judul'] = 'Activity Detail';
        $data['aktivitas'] = $this->model('Activity_model')->getActivityById($id);
        $data['warga'] = $_SESSION['warga'];
        $this->view('templates/header', $data);
        $this->view('activity/detail', $data);
        $this->view('templates/footer');

    }

    public function daftar($id_warga, $id_aktivitas)
    {
        if ( $this->model('Activity_model')->daftar($id_warga, $id_aktivitas) > 0) {
            header('Location: ' . BASEURL . '/activity');
            exit;
        }
    }
}
