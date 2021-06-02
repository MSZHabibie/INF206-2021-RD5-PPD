<?php
session_start();

class Register extends Controller
{
    public function index($data = null)
    {
        $this->hasNoSession();

        $data['judul'] = 'Register';
        $this->view('templates/loginheader', $data);
        $this->view('register/index', $data);
        $this->view('templates/loginfooter');
    }

    public function index2()
    {
        $this->hasNoSession();

        $data['judul'] = 'Register';
        $this->view('templates/header', $data);
        $this->view('register/index2');
        $this->view('templates/footer');
    }

    public function create()
    {
        $result = $this->model('Warga_model')->createAccount($_POST);
        $data = null;
        if ($result > 0) {
            header('Location: ' . BASEURL . '/login');
            exit;
        } elseif ($result == -1) {
            $data['gagalregister'] = "Email yang Anda masukkan sudah terdaftar!";
        } elseif ($result == -2) {
            $data['gagalregister'] = "Username yang Anda masukkan sudah digunakan!";
        } elseif ($result == -3) {
            $data['gagalregister'] = "Konfirmasi password yang Anda masukkan salah!";
        }
        $this->index($data);
    }
}
