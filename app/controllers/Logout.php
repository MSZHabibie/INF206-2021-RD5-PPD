<?php 
session_start();

class Logout extends Controller
{
    public function index()
    {
        $this->hasSession();
        $_SESSION = [];
        session_unset();
        session_destroy();
        
        header('Location: ' . BASEURL);
        exit;
    }
}