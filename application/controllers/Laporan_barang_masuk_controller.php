<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_barang_masuk_controller extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Laporan_barang_masuk_model');
        $this->load->library('session');

        if (! $this->session->userdata('logged_in')) {
            redirect('login');
        }
    }

    public function index()
    {
        // default
        $data['laporan'] = [];
        $data['bulan']   = '';

        // ambil bulan dari input type="month"
        $bulanTahun = $this->input->get('bulan');

        if ($bulanTahun) {
            $data['bulan'] = $bulanTahun;

            $bulan = date('m', strtotime($bulanTahun));
            $tahun = date('Y', strtotime($bulanTahun));

            $data['laporan'] =
                $this->Laporan_barang_masuk_model
                     ->get_laporan_bulanan($bulan, $tahun);
        }

        $this->load->view('template/header');
        $this->load->view('template/sidebar');
        $this->load->view('laporan_barang_masuk/index', $data);
        $this->load->view('template/footer');
    }

    public function cetak()
    {
        $bulanTahun = $this->input->get('bulan');

        if (! $bulanTahun) {
            redirect('laporan_barang_masuk_controller');
        }

        $bulan = date('m', strtotime($bulanTahun));
        $tahun = date('Y', strtotime($bulanTahun));

        $data['laporan'] =
            $this->Laporan_barang_masuk_model
                 ->get_laporan_bulanan($bulan, $tahun);

        $data['bulan'] = $bulanTahun;

        $this->load->view('laporan_barang_masuk/cetak_laporan_barang_masuk', $data);
    }
}
