<?php
session_start();

class Profile extends Controller
{
    public function index()
    {
        $this->hasSession();
        $this->isAdmin(get_class($this));

        $data['class'] = get_class($this);
        $data['judul'] = 'Profile';
        $data['warga'] = $_SESSION['warga'];
        $data['user'] = $_SESSION['warga'];
        $data['aktivitas_warga'] = $this->model('Activity_model')->getActivityWarga($data['warga']['id']);
        $data['komunitas_warga'] = $this->model('Community_model')->getKomunitasWarga($data['warga']['id']);

        $this->view('templates/appheader', $data);
        $this->view('profile/index', $data);
        $this->view('templates/appfooter');
    }

    public function admin()
    {
        $this->hasSession();
        $this->isNotAdmin(get_class($this));

        $data['class'] = get_class($this);
        $data['judul'] = 'Profile';
        $data['admin'] = $_SESSION['admin'];
        $data['user'] = $_SESSION['admin'];
        
        $this->view('templates/appheader', $data);
        $this->view('profile/admin', $data);
        $this->view('templates/appfooter');
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

    public function ubahPassword($data = null)
    {
        $this->hasSession();

        $data['user'] = isset($_SESSION['admin']) ? $_SESSION['admin'] : $_SESSION['warga'];
        // $this->view('templates/loginheader');
        $this->view('profile/ubahPassword', $data);
        // $this->view('templates/loginfooter');
    }

    public function updatePassword()
    {
        $this->hasSession();

        $result = null;

        if (isset($_SESSION['warga'])) {
            $result = $this->model('Warga_model')->updatePassword($_POST);
            if ($result > 0) {
                // update password warga di $_SESSION
                $_SESSION['warga'] = $this->model('Warga_model')->getUserById($_SESSION['warga']['id']);

                header('Location: ' . BASEURL . '/dashboard');
                exit;
            }
        } else {
            $result = $this->model('Admin_model')->updatePassword($_POST);
            if ($result > 0) {
                // update password admin di $_SESSION
                $_SESSION['admin'] = $this->model('Admin_model')->getUserById($_SESSION['admin']['id']);

                header('Location: ' . BASEURL . '/dashboard');
                exit;
            }
        }

        if ($result == -1) {
            $data['gagalubahpassword'] = "Password yang Anda masukkan salah!";
        } elseif ($result == -2) {
            $data['gagalubahpassword'] = "Konfirmasi password yang Anda masukkan salah!";
        } elseif ($result == -3) {
            $data['gagalubahpassword'] = "Ganti dengan password yang berbeda!";
        } else {
            $data['gagalubahpassword'] = "Gagal mengubah password!";
        }

        $this->ubahPassword($data);
    }
}
