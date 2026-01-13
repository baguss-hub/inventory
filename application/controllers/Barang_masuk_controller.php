<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_masuk_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_masuk_model');
        $this->load->model('Barang_model');
        $this->load->model('User_model'); // untuk nama user
        $this->load->library(['session', 'form_validation']);

        // Cek login
        if (!$this->session->userdata('logged_in')) {
            redirect('login');
        }
    }

    // Menampilkan daftar barang masuk
    public function index()
    {
        // Ambil filter bulan & tahun dari GET
        $bulan = $this->input->get('bulan');
        $tahun = $this->input->get('tahun');

        if ($bulan && $tahun) {
            // Jika ada filter, ambil data per bulan
            $data['list_barang_masuk'] = $this->Barang_masuk_model->get_by_bulan($bulan, $tahun);
        } else {
            // Jika tidak ada filter, tampilkan semua
            $data['list_barang_masuk'] = $this->Barang_masuk_model->get_all();
        }

        // Load view
        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('barang_masuk/index', $data);
        $this->load->view('template/footer');
    }

    // Tambah barang masuk
    public function tambah_barang_masuk()
    {
        // Validasi form
        $this->form_validation->set_rules('barang_id', 'Barang', 'required');
        $this->form_validation->set_rules('stok', 'Jumlah masuk', 'required|numeric');

        if ($this->form_validation->run() === FALSE) {
            // Jika validasi gagal, tampilkan form tambah
            $data['barang'] = $this->Barang_model->get_all();
            $data['user'] = $this->User_model->get_all();

            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('barang_masuk/tambah_barang_masuk', $data);
            $this->load->view('template/footer');
        } else {
            // Jika validasi berhasil, simpan data
            $this->__simpan_barang_masuk();
        }
    }

    // Fungsi private untuk menyimpan barang masuk
    private function __simpan_barang_masuk()
    {
        $data = [
            'barang_id' => $this->input->post('barang_id'),
            'stok' => $this->input->post('stok'),
            'tanggal_masuk' => $this->input->post('tanggal_masuk'), // Hanya tanggal, sesuai DB DATE
            'user_id' => $this->session->userdata('id_user') // user yang login
        ];

        $simpan = $this->Barang_masuk_model->tambah($data);

        if ($simpan) {
            $this->session->set_flashdata('message',
                '<div class="alert alert-success">Data barang masuk berhasil ditambahkan</div>'
            );
        } else {
            $this->session->set_flashdata('message',
                '<div class="alert alert-danger">Data barang masuk gagal ditambahkan</div>'
            );
        }

        redirect('barang_masuk');
    }

    // Hapus barang masuk
    public function hapus($id)
    {
        $hapus = $this->Barang_masuk_model->hapus($id);
        if ($hapus) {
            $this->session->set_flashdata('message',
                '<div class="alert alert-success">Data berhasil dihapus</div>'
            );
        } else {
            $this->session->set_flashdata('message',
                '<div class="alert alert-danger">Data gagal dihapus</div>'
            );
        }
        redirect('barang_masuk');
    }

    // Edit barang masuk
    public function ubah($id)
    {
        // Validasi form
        $this->form_validation->set_rules('stok', 'Stok', 'required|numeric');

        if ($this->form_validation->run() === FALSE) {
            // Ambil data barang masuk berdasarkan ID
            $data['barang_masuk'] = $this->Barang_masuk_model->get_by_id($id);
            $data['barang'] = $this->Barang_model->get_all();
            $data['user'] = $this->User_model->get_all();

            $this->load->view('template/header');
            $this->load->view('template/sidebar');
            $this->load->view('barang_masuk/ubah', $data);
            $this->load->view('template/footer');
        } else {
            // Update data barang masuk
            $update_data = [
                'barang_id' => $this->input->post('barang_id'),
                'jumlah' => $this->input->post('jumlah')
            ];
            $this->Barang_masuk_model->update($id, $update_data);
            $this->session->set_flashdata('message',
                '<div class="alert alert-success">Data berhasil diubah</div>'
            );
            redirect('barang_masuk');
        }
    }
}
