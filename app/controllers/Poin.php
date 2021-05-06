<?php

class Poin extends Controller
{
  public function index()
  {
    $data['judul'] = 'Poin';
    $this->view('templates/header', $data);
    $this->view('Poin/index');
    $this->view('templates/footer');
  }
}
