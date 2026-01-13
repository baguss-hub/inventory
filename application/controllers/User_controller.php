<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation'); // tambahan
    }

    // Menampilkan data user di web
    public function index()
    {
        $data['list_user'] = $this->User_model->get_all();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('user/index', $data);
        $this->load->view('template/footer');
    }

    // Tambah data User
    public function tambah_user()
    {
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() !== FALSE) {
            $this->__simpan_user();
        } else {
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('user/tambah_user');
            $this->load->view('template/footer');
        }
    }

    // Simpan data User
    private function __simpan_user()
    {
        $password = $this->input->post('password');
        $role = $this->input->post('role'); // ambil role dari form


        $data = [
            'username' => $this->input->post('username'),
            'password' => md5($password), // enkripsi md5
            'password_view' => $password, // lihat password asli
            'role'          => $this->input->post('role'), // role user
            'create_at' => date('Y-m-d H:i:s'),
        ];

        $simpan = $this->User_model->tambah($data);
        if ($simpan) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil ditambahkan.
            </div>');
        } else {
           $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data Gagal ditambahkan.
            </div>');
        }
        redirect('user');
    }

    // Hapus User
    public function hapus_user($id)
    {
        $user = $this->User_model->get_by_id($id);
        if ($user) {
            $hapus = $this->User_model->hapus($id);
            if ($hapus) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Data Berhasil dihapus.
                </div>');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Data Gagal dihapus.
                </div>');
            }
            redirect('user');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data Tidak ditemukan.
            </div>');
            redirect('user');
        }
    }

    //Ubah data User / edit data
    public function ubah_user($id)
    {
        // cek dulu apakah id dengan user ada
        $user = $this->User_model->get_by_id($id);

        if ($user){
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run() !== FALSE) {
                $this->__ubah_user($id);
            } else {
                $data['title'] = "Ubah Data User";
                $data['user'] = $user;
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar');
                $this->load->view('user/ubah_user', $data);
                $this->load->view('template/footer');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data User Tidak ditemukan.
            </div>');

            redirect('user');
        }
    }

    private function __ubah_user($id)
    {
        $password = $this->input->post('password');
        $role = $this->input->post('role'); // ambil role dari form


        $data = [
            'username' => $this->input->post('username'),
            'password' => md5($password),
            'password_view' => $password,
            'role'          => $this->input->post('role'),
            'create_at' => date('Y-m-d H:i:s'),
        ];

        $ubah = $this->User_model->ubah($id, $data);

        if ($ubah) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil diubah.
            </div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data Gagal diubah.
            </div>');
        }
        redirect('user');
    }

}   