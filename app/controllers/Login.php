<?php 
session_start();

class Login extends Controller
{
    public function index()
    {
        $this->hasNoSession();

        // $data['judul'] = 'Login';
        // $this->view('templates/header', $data);
        $this->view('login/index');
        // $this->view('templates/footer');
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
        if ( $this->model('Warga_model')->signIn($_POST) === true) {

            // set session
            $_SESSION['login'] = true;
            $_SESSION['warga'] = $this->model('Warga_model')->getUserByUsername($_POST['username']);

            header('Location: ' . BASEURL . '/dashboard');
            exit;
        }
        $this->index();
    }
}