<?php

class Community extends Controller
{
  public function index()
  { 
    $data['judul'] = 'Community';
    $data['komunitas'] = $this->model('Community_model')->getAllCommunity();
    $this->view('templates/header', $data);
    $this->view('community/index', $data);
    $this->view('templates/footer');
  }

}


