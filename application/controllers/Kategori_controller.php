<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kategori_model');
        $this->load->library('form_validation'); // tambahan
    }

    // Menampilkan data kategori di web
    public function index()
    {
        $data['list_kategori'] = $this->Kategori_model->get_all();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('kategori/index', $data);
        $this->load->view('template/footer');
    }

    // Tambah data Kategori
    public function tambah_kategori()
    {
        $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');
        if ($this->form_validation->run() !== FALSE) {
            $this->__simpan_kategori();
        } else {
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('kategori/tambah_kategori');
            $this->load->view('template/footer');
        }
    }

    // Simpan data Kategori
    private function __simpan_kategori()
    {
        $data = [
            'nama_kategori' => $this->input->post('nama_kategori'),
        ];

        $simpan = $this->Kategori_model->tambah($data);
        if ($simpan) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil ditambahkan.
            </div>');
        } else {
           $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data Gagal ditambahkan.
            </div>');
        }
        redirect('kategori');
    }

    // Hapus Kategori
    public function hapus_kategori($id)
    {
        $kategori = $this->Kategori_model->get_by_id($id);
        if ($kategori) {
            $hapus = $this->Kategori_model->hapus($id);
            if ($hapus) {
                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    Data Berhasil dihapus.
                </div>');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Data Gagal dihapus.
                </div>');
            }
            redirect('kategori');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data Tidak ditemukan.
            </div>');
            redirect('kategori');
        }
    }

    //Ubah data Kategori / edit data
    public function ubah_kategori($id)
    {
        // cek dulu apakah id dengan kategori ada
        $kategori = $this->Kategori_model->get_by_id($id);
        if ($kategori){
            $this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'required');
            if ($this->form_validation->run() !== FALSE) {
                $this->__ubah_kategori($id);
            } else {
                $data['title'] = "Ubah Data Kategori";
                $data['kategori'] = $kategori;
                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar');
                $this->load->view('kategori/ubah_kategori', $data);
                $this->load->view('template/footer');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data Kategori Tidak ditemukan.
            </div>');

            redirect('kategori');
        }
    }

    private function __ubah_kategori($id)
    {
        $data = [
            'nama_kategori' => $this->input->post('nama_kategori'),
        ];

        $ubah = $this->Kategori_model->ubah($id, $data);

        if ($ubah) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil diubah.
            </div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data Gagal diubah.
            </div>');
        }
        redirect('kategori');
    }

}   