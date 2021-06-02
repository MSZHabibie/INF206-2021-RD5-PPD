<?php
session_start();

class Dashboard extends Controller
{
    public function index()
    {
        $this->hasSession();
        $this->isAdmin(get_class($this));

        $data['class'] = get_class($this);
        $data['judul'] = 'Dashboard';
        $data['warga'] = $_SESSION['warga'];
        $data['user'] = $_SESSION['warga'];

        $data['jumlah_warga'] = count($this->model('Warga_model')->getAllUsers());
        $data['jumlah_admin'] = count($this->model('Admin_model')->getAllUsers());

        $data['judul'] = 'Dashboard';
        $this->view('templates/appheader', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/appfooter');
    }

    public function admin()
    {
        $this->hasSession();
        $this->isNotAdmin(get_class($this));

        $data['judul'] = 'Dashboard Admin';
        $this->view('templates/header', $data);
        $this->view('dashboard/admin');
        $this->view('templates/footer');
    }
}
