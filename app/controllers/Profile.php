<?php 

class Profile extends Controller
{
    public function index()
    {
        $data['judul'] = 'Profile';
        $this->view('templates/header', $data);
        $this->view('profile/index');
        $this->view('templates/footer');
    }

    public function admin()
    {
        $data['judul'] = 'Profile Admin';
        $this->view('templates/header', $data);
        $this->view('profile/admin');
        $this->view('templates/footer');
    }
}