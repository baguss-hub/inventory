<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function cek_login($username, $password)
    {
        $this->db->where('username', $username);
        $this->db->where('password', md5($password)); // password di hash dulu
        return $this->db->get('user')->row(); // pakai row() biar bisa akses role, email, dll
    }
}
