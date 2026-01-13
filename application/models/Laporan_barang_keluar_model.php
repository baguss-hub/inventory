<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_barang_keluar_model extends CI_Model {

    private $_table = "barang_keluar";

    // Ambil laporan bulanan barang keluar
    public function get_laporan_bulanan($bulan, $tahun)
    {
        $this->db->select('barang_keluar.id_keluar, barang.nama_barang, barang_keluar.jumlah_keluar, barang_keluar.tanggal_keluar, user.username');
        $this->db->from($this->_table);
        $this->db->join('barang', 'barang.id_barang = barang_keluar.barang_id');
        $this->db->join('user', 'user.id_user = barang_keluar.user_id');
        $this->db->where('MONTH(barang_keluar.tanggal_keluar)', $bulan);
        $this->db->where('YEAR(barang_keluar.tanggal_keluar)', $tahun);
        $this->db->order_by('barang_keluar.tanggal_keluar', 'ASC');
        return $this->db->get()->result_array();
    }
}
