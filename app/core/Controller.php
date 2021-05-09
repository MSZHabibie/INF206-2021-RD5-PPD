<?php 

class Controller {

    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }

    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model;
    }

    public function hasSession()
    {
        if( !isset($_SESSION['login']) ) {
            header('Location: ' . BASEURL . '/login');
            exit;
        }
    }

    public function hasNoSession()
    {
        if( isset($_SESSION['login']) ) {
            header('Location: ' . BASEURL . '/dashboard');
            exit;
        }
    }

    public function isAdmin($controller)
    {
        if( isset($_SESSION['admin']) ) {
            header('Location: ' . BASEURL . '/' . $controller . '/admin');
            exit;
        }
    }

    public function isNotAdmin($controller)
    {
        if( !isset($_SESSION['admin']) ) {
            header('Location: ' . BASEURL . '/' . $controller);
            exit;
        }
    }
}