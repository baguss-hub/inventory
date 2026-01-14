<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->library('session'); // pastikan session di-load
        $this->load->helper('url');      // helper URL untuk redirect
    }

    // Halaman login
    public function index()
    {
        // Kalau sudah login, langsung ke dashboard
        if ($this->session->userdata('logged_in')) {
            redirect('dashboard');
        }

        $this->load->view('login');
    }

    // Proses login
    public function proses()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->Login_model->cek_login($username, $password);

        if ($user) {
            // Menyimpan data user ke session
            $this->session->set_userdata([
                'id_user'   => $user->id_user,   // penting untuk FK
                'username'  => $user->username,
                'role'      => $user->role,
                'logged_in' => TRUE
            ]);

            redirect('dashboard');
        } else {
            // Kalau login gagal
            $this->session->set_flashdata('error', 'Username atau Password salah!');
            redirect('login');
        }
    }

    // Logout
    public function logout()
    {
        $this->session->sess_destroy(); // hapus semua session
        redirect('login');
    }
}
