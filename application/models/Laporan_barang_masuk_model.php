<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_barang_masuk_model extends CI_Model {

    public function get_laporan_bulanan($bulan, $tahun)
    {
        $this->db->select('
            barang.nama_barang,
            barang_masuk.jumlah_masuk,
            barang_masuk.tanggal_masuk,
            user.username
        ');
        $this->db->from('barang_masuk');
        $this->db->join('barang', 'barang.id_barang = barang_masuk.barang_id');
        $this->db->join('user', 'user.id_user = barang_masuk.user_id');
        $this->db->where('MONTH(barang_masuk.tanggal_masuk)', $bulan);
        $this->db->where('YEAR(barang_masuk.tanggal_masuk)', $tahun);
        $this->db->order_by('barang_masuk.tanggal_masuk', 'ASC');

        return $this->db->get()->result_array();
    }
}
