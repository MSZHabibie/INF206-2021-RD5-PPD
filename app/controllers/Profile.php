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

    public function update()
    {
        $this->hasSession();

        if ($this->model('Warga_model')->updateProfile($_POST) > 0) {
            // update data warga di $_SESSION
            $_SESSION['warga'] = $this->model('Warga_model')->getUserById($_SESSION['warga']['id']);
            $data['user'] = $_SESSION['warga'];

            header('Location: ' . BASEURL . '/profile');
            exit;
        }
        header('Location: ' . BASEURL . '/profile');
        exit;
    }

    public function updateAdmin()
    {
        $this->hasSession();

        if ($this->model('Admin_model')->updateProfile($_POST) > 0) {
            // update data admin di $_SESSION
            $_SESSION['admin'] = $this->model('Admin_model')->getUserById($_SESSION['admin']['id']);
            $data['user'] = $_SESSION['admin'];

            header('Location: ' . BASEURL . '/profile');
            exit;
        }

        header('Location: ' . BASEURL . '/profile');
        exit;
    }
}
