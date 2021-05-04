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
        $data['nama'] = $this->model('User_model')->getUser();
        $this->view('templates/header', $data);
        $this->view('profile/admin', $data);
        $this->view('templates/footer');
    }
}