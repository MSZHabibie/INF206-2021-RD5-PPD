<?php
session_start();

class Dashboard extends Controller
{
    public function index()
    {
        $this->hasSession();
        $this->isAdmin(get_class($this));

        $data['judul'] = 'Dashboard';
        // $this->view('templates/header', $data);
        $this->view('dashboard/index');
        // $this->view('templates/footer');
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
