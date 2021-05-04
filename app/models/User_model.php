<?php 

class User_model
{
    private $nama = 'Admin Pegawai';

    public function getUser()
    {
        return $this->nama;
    }
}