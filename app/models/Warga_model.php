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
        if ( !isset($data['submit']) ) {
            return false;
        }

        $email = $data['email'];
        $username = $data['username'];
        $password = $data['password'];
        $password2 = $data['password2'];

        // cek email
        if( $this->cekEmail($email) > 0) {
            return false;
        }

        // cek username
        if( $this->cekUsername($username) > 0) {
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

        return $this->db->rowCount();
    }

    public function signIn($data)
    {
        if ( !isset($data['submit']) ) {
            return false;
        }

        $email = $data['email'];
        $password = $data['password'];
        $result = $this->cekEmail($email);
        
        // cek email ada atau tidak
        if( $result === false) {
            return false;
        }

        // cek password benar atau salah
        if( !password_verify($password, $result['password']) ) {
            return false;
        }
        
        return true;
    }
}