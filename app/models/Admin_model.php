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
        if ( !isset($data['submit']) ) {
            return false;
        }

        $username = $data['username'];
        $password = $data['password'];
        $result = $this->cekUsername($username);

        // cek username ada atau tidak
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