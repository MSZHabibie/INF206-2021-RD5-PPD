<?php

class Community extends Controller
{
    public function index()
    {
        $this->hasSession();
        $this->isAdmin(get_class($this));

        $data['judul'] = 'Daftar Komunitas';
        $data['com'] = $this->model('Komunitas_model')->getAllCommunity();
        $this->view('templates/header', $data);
        $this->view('community/index', $data);
        $this->view('templates/footer');
    }
}
