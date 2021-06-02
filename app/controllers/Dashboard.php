<?php
session_start();

class Dashboard extends Controller
{
    public function index()
    {
        $this->hasSession();
        $this->isAdmin(get_class($this));

        $data['class'] = get_class($this);
        $data['judul'] = 'Dashboard';
        $data['warga'] = $_SESSION['warga'];
        $data['user'] = $_SESSION['warga'];
        $data['data_statistic'] = $this->model('Warga_model')->getStatisticdata();
        
        $data['riwayat'] = $this->model('Riwayat_model')->getRiwayatActivityById($data['warga']['id']);
        $data['riwayat2'] = $this->model('Riwayat_model')->getRiwayatVoucherById($data['warga']['id']);
        $data['jumlah_warga'] = count($this->model('Warga_model')->getAllUsers());
        $data['jumlah_admin'] = count($this->model('Admin_model')->getAllUsers());
        $data['notifikasi'] = $this->model('Notify_model')->getAllNotifyById($data['warga']['id']);
        
        $data['judul'] = 'Dashboard';

        // var_dump($data['riwayat']);
        // die;
        $this->view('templates/appheader', $data);
        $this->view('dashboard/index', $data);
        $this->view('templates/appfooter');
    }

    public function admin()
    {
        $this->hasSession();
        $this->isNotAdmin(get_class($this));

        $data['class'] = get_class($this);
        $data['judul'] = 'Dashboard';
        $data['riwayat'] = $this->model('Riwayat_model')->getAllRiwayatActivity();
        $data['riwayat2'] = $this->model('Riwayat_model')->getAllRiwayatVoucher();
        $data['admin'] = $_SESSION['admin'];
        $data['user'] = $_SESSION['admin'];
        $data['data_statistic'] = $this->model('Warga_model')->getStatisticdata();
        
        $data['jumlah_warga'] = count($this->model('Warga_model')->getAllUsers());
        $data['jumlah_admin'] = count($this->model('Admin_model')->getAllUsers());
        $data['notifikasi'] = $this->model('Notify_model')->getAllNotifyById($data['admin']['id']);

        $this->view('templates/appheader', $data);
        $this->view('dashboard/admin', $data);
        $this->view('templates/appfooter');
    }
}
