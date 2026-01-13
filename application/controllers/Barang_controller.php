<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->model('Kategori_model');
        $this->load->library(['session', 'form_validation']);

        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
    }

    public function index()
    {
        $data['list_barang'] = $this->Barang_model->get_all();
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('barang/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah_barang()
    {
        $this->form_validation->set_rules('kategori_id', 'Kategori', 'required');
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');
        $this->form_validation->set_rules('satuan', 'Satuan', 'required');


        if ($this->form_validation->run() === FALSE) {
            $data['kategori'] = $this->Kategori_model->get_all();
            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('barang/tambah_barang', $data);
            $this->load->view('template/footer');
        } else {
            $this->__simpan_barang();
        }
    }

    private function __simpan_barang()
    {   
        $data = [
            'kategori_id' => $this->input->post('kategori_id'),
            'nama_barang' => $this->input->post('nama_barang'),
            'stok' => $this->input->post('stok'),
            'satuan' => $this->input->post('satuan'),
            'create_at' => date('Y-m-d H:i:s')
        ];

        $simpan = $this->Barang_model->tambah($data);
        if ($simpan) {
            $this->session->set_flashdata('message',
                '<div class="alert alert-success">Data barang berhasil ditambahkan</div>'
            );
        } else {
            $this->session->set_flashdata('message',
                '<div class="alert alert-danger">Data barang gagal ditambahkan</div>'
            );
        }

        redirect('barang');
    }

    public function hapus_barang($id)
    {
        $barang = $this->Barang_model->get_by_id($id);
        if (!$barang) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger">Data barang tidak ditemukan</div>');
            redirect('barang');
        }

        $hapus = $this->Barang_model->hapus($id);
        $this->session->set_flashdata('message',
            $hapus ? '<div class="alert alert-success">Data barang berhasil dihapus</div>'
                   : '<div class="alert alert-danger">Data barang gagal dihapus</div>'
        );
        redirect('barang');
    }

    public function ubah_barang($id)
    {
        // cek dulu apakah data barang ada
        $barang = $this->Barang_model->get_by_id($id);

        if ($barang) {

            $this->form_validation->set_rules('kategori_id', 'Kategori', 'required');
            $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
            $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');
            $this->form_validation->set_rules('satuan', 'Satuan', 'required');

            if ($this->form_validation->run() !== FALSE) {
                // jalankan private method untuk update
                $this->__ubah_barang($id);
            } else {
                // tampilkan form edit dengan data lama
                $data['title'] = "Ubah Data Barang";
                $data['barang'] = $barang;
                $data['kategori'] = $this->Kategori_model->get_all();

                $this->load->view('template/header', $data);
                $this->load->view('template/sidebar');
                $this->load->view('barang/edit', $data);
                $this->load->view('template/footer');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data Barang Tidak ditemukan.
            </div>');

            redirect('barang');
        }
    }


    private function __ubah_barang($id)
    {
        $data = [
            'kategori_id' => $this->input->post('kategori_id'),
            'nama_barang' => $this->input->post('nama_barang'),
            'stok' => $this->input->post('stok'),
            'satuan' => $this->input->post('satuan'),
            'create_at' => date('Y-m-d H:i:s')
        ];

        $ubah = $this->Barang_model->update($id, $data);

        if ($ubah) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                Data Berhasil diubah.
            </div>');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Data Gagal diubah.
            </div>');
        }

        redirect('barang');
    }

}