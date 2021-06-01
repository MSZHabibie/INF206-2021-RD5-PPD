<?php

class Admin_model
{
    private $table = 'admin';
    private $db;

    public function __construct()
    {
        //parent::__construct();
        $this->db = new Database;
    }

    public function getUserById($id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE id=:id");
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->single();
    }

    public function getUserByUsername($username)
    {
        $this->db->query("SELECT * FROM $this->table WHERE username=:username");
        $this->db->bind('username', $username);
        $this->db->execute();

        return $this->db->single();
    }

    public function cekUsername($username)
    {
        $this->db->query("SELECT * FROM $this->table WHERE username=:username");
        $this->db->bind('username', $username);
        $this->db->execute();

        return $this->db->single();
    }

    public function signIn($data)
    {
        if (!isset($data['submit'])) {
            return false;
        }

        $username = $data['username'];
        $password = $data['password'];
        $result = $this->cekUsername($username);

        // cek username ada atau tidak
        if ($result === false) {
            return -1;
        }

        // cek password benar atau salah
        if (!password_verify($password, $result['password'])) {
            return -2;
        }

        return true;
    }

    public function updateProfile($data)
    {
        $query = "UPDATE $this->table SET 
                    nama = :nama, 
                    umur = :umur, 
                    tempat_lahir = :tempat_lahir, 
                    tanggal_lahir = :tanggal_lahir, 
                    no_hp = :no_hp, 
                    bio = :bio, 
                    alamat = :alamat
                WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('umur', $data['umur']);
        $this->db->bind('tempat_lahir', $data['tempat_lahir']);
        $this->db->bind('tanggal_lahir', $data['tanggal_lahir']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('bio', $data['bio']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function updatePassword($data)
    {

        $passwordLama = $data['passwordLama'];
        $password = $data['passwordBaru'];
        $password2 = $data['confirmPasswordBaru'];

        // cek password benar atau salah
        if (!password_verify($passwordLama, $_SESSION['admin']['password'])) {
            return -1;
        }

        // cek password baru dan konfirmasinya
        if ($password !== $password2) {
            return -2;
        }

        // cek password lama dan baru sama atau berbeda
        if ($password == $passwordLama) {
            return -3;
        }

        // hash password
        $password = password_hash($password, PASSWORD_DEFAULT);

        $this->db->query("UPDATE $this->table SET password=:password WHERE id=:id");
        $this->db->bind('password', $password);
        $this->db->bind('id', $_SESSION['admin']['id']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
