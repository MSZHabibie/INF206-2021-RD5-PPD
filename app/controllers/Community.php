<?php 

class Community extends Controller
{
    public function index()
    {
        $data['judul'] = 'Daftar Komunitas';
        $data['com'] = $this->model('Komunitas_model')->getAllCommunity();
        $this->view('templates/header', $data);
        $this->view('community/index', $data);
        $this->view('templates/footer');
    }
}