<?php 
session_start();

class Profile extends Controller
{
    public function index()
    {
        $this->hasSession();

        $data['judul'] = 'Profile';
        $this->view('templates/header', $data);
        $this->view('profile/index');
        $this->view('templates/footer');
    }

    public function admin()
    {
        $this->hasSession();

        $data['judul'] = 'Profile Admin';
        $this->view('templates/header', $data);
        $this->view('profile/admin', $data);
        $this->view('templates/footer');
    }
}