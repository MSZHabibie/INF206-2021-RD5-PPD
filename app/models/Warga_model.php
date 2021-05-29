<?php

class Warga_model
{
    private $table = 'warga';
    private $db;

    public function __construct()
    {
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

    public function createAccount($data)
    {
        if (!isset($data['submit'])) {
            return false;
        }

        $email = $data['email'];
        $username = $data['username'];
        $password = $data['password'];
        $password2 = $data['password2'];

        // cek email
        if ($this->cekEmail($email) > 0) {
            return false;
        }

        // cek username
        if ($this->cekUsername($username) > 0) {
            return false;
        }

        // cek password dan konfirmasinya
        if ($password !== $password2) {
            return false;
        }

        // hash password
        $password = password_hash($password, PASSWORD_DEFAULT);

        $this->db->query("INSERT INTO $this->table (email, username, password) VALUES (:email, :username, :password)");
        $this->db->bind('email', $email);
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cekEmail($email)
    {
        $this->db->query("SELECT * FROM $this->table WHERE email=:email");
        $this->db->bind('email', $email);
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
            return false;
        }

        // cek password benar atau salah
        if (!password_verify($password, $result['password'])) {
            return false;
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
}
