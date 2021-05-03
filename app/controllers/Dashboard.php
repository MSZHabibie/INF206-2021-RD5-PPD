<?php 

class Dashboard extends Controller
{
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $this->view('templates/header', $data);
        $this->view('dashboard/index');
        $this->view('templates/footer');
    }
}