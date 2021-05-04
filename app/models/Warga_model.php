<?php 

class Warga_model
{
    private $table = 'warga';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getUser()
    {
        return $this->nama;
    }

    public function createAccount($data)
    {
        $email = $data['email'];
        $username = $data['username'];
        $password = $data['password'];
        $password2 = $data['password2'];

        // cek email dan username
        if( $this->cekEmailDanUsername($email, $username) > 0) {
            return false;
        }

        // cek password dan konfirmasinya
        if( $password !== $password2 ) {
            return false;
        }

        // hash password
        $password = password_hash($password, PASSWORD_DEFAULT);

        $this->db->query("INSERT INTO $this->table VALUES ('', :email, :username, :password)");
        $this->db->bind('email', $email);
        $this->db->bind('username', $username);
        $this->db->bind('password', $password);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function cekEmailDanUsername($email, $username)
    {
        $this->db->query("SELECT * FROM $this->table WHERE email=:email OR username=:username");
        $this->db->bind('email', $email);
        $this->db->bind('username', $username);
        $this->db->execute();

        return $this->db->rowCount();
    }
}