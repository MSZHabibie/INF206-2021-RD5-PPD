<?php 
session_start();

class Dashboard extends Controller
{
    public function index()
    {
        $this->hasSession();

        $data['judul'] = 'Dashboard';
        $this->view('templates/header', $data);
        $this->view('dashboard/index');
        $this->view('templates/footer');
    }
}