<?php
session_start();

class Profile extends Controller
{
    public function index()
    {
        $this->hasSession();
        $this->isAdmin(get_class($this));

        $data['judul'] = 'Profile';
        $data['warga'] = $_SESSION['warga'];
        $this->view('templates/header', $data);
        $this->view('profile/index', $data);
        $this->view('templates/footer');
    }

    public function admin()
    {
        $this->hasSession();
        $this->isNotAdmin(get_class($this));

        $data['judul'] = 'Profile Admin';
        $this->view('templates/header', $data);
        $this->view('profile/admin', $data);
        $this->view('templates/footer');
    }

    public function edit()
    {
        $this->hasSession();

        $data['user'] = isset($_SESSION['admin']) ? $_SESSION['admin'] : $_SESSION['warga'];
        $this->view('profile/edit', $data);
    }
}
