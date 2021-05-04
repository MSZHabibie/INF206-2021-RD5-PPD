<?php 

class Login extends Controller
{
    public function index()
    {
        $data['judul'] = 'Login';
        $this->view('templates/header', $data);
        $this->view('login/index');
        $this->view('templates/footer');
    }

    public function signin()
    {
        if ( $this->model('Warga_model')->signIn($_POST) > 0) {
            header('Location: ' . BASEURL . '/dashboard');
            exit;
        }
        $this->index();
    }
}