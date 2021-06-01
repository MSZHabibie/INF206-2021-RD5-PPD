<?php
session_start();

class Login extends Controller
{
    public function index($data = null)
    {
        $this->hasNoSession();

        $data['judul'] = 'Login';
        $this->view('templates/loginheader', $data);
        $this->view('login/index', $data);
        $this->view('templates/loginfooter');
    }

    public function index2()
    {
        $this->hasNoSession();

        $data['judul'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('login/index2');
        $this->view('templates/footer');
    }

    public function signin()
    {
        $data = null;

        $resultwarga = $this->model('Warga_model')->signIn($_POST);
        if ($resultwarga === true) {
            // set session
            $_SESSION['login'] = true;
            $_SESSION['warga'] = $this->model('Warga_model')->getUserByUsername($_POST['username']);

            header('Location: ' . BASEURL . '/dashboard');
            exit;
        }

        $resultadmin = $this->model('Admin_model')->signIn($_POST);
        if ($resultadmin === true) {
            // set session
            $_SESSION['login'] = true;
            $_SESSION['admin'] = $this->model('Admin_model')->getUserByUsername($_POST['username']);

            header('Location: ' . BASEURL . '/dashboard/admin');
            exit;
        }

        if ($resultwarga == -1 && $resultadmin == -1) {
            $data['gagallogin'] = "Username yang Anda masukkan belum terdaftar!";
        } elseif ($resultwarga == -2 || $resultadmin == -2) {
            $data['gagallogin'] = "Password yang Anda masukkan salah!";
        }

        $this->index($data);
    }
}
