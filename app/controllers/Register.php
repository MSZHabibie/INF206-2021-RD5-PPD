<?php 
session_start();

class Register extends Controller
{
    public function index()
    {
        $this->hasNoSession();

        $this->view('register/index');
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
        if ( $this->model('Warga_model')->createAccount($_POST) > 0) {
            header('Location: ' . BASEURL . '/login');
            exit;
        }
        $this->index();
    }
}