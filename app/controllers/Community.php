<?php

class Community extends Controller
{
  public function index()
  { 
    $this->hasSession();
    $this->isAdmin(get_class($this));
  
    $data['judul'] = 'Community';
    $data['komunitas'] = $this->model('Community_model')->getAllCommunity();
    $this->view('templates/header', $data);
    $this->view('community/index', $data);
    $this->view('templates/footer');
  }

}

