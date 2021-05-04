<?php 

class Register extends Controller
{
    public function index()
    {
        $data['judul'] = 'Register';
        $this->view('templates/header', $data);
        $this->view('register/index');
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