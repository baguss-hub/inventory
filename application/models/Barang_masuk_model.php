<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_masuk_model extends CI_Model { 

    private $_table = "barang_masuk";

    // Ambil semua data barang masuk dengan join barang & user
    public function get_all()
    {
        $this->db->select('barang_masuk.id_masuk, barang.nama_barang, barang_masuk.jumlah_masuk, barang_masuk.tanggal_masuk, user.username');
        $this->db->from('barang_masuk');
        $this->db->join('barang', 'barang.id_barang = barang_masuk.barang_id');
        $this->db->join('user', 'user.id_user = barang_masuk.user_id');
        $this->db->order_by('barang_masuk.tanggal_masuk', 'DESC');
        return $this->db->get()->result_array();
    }

    // Ambil data barang masuk berdasarkan bulan & tahun
    public function get_by_bulan($bulan, $tahun)
    {
        $this->db->select('barang_masuk.id_masuk, barang.nama_barang, barang_masuk.jumlah_masuk, barang_masuk.tanggal_masuk, user.username');
        $this->db->from('barang_masuk');
        $this->db->join('barang', 'barang.id_barang = barang_masuk.barang_id');
        $this->db->join('user', 'user.id_user = barang_masuk.user_id');
        $this->db->where('MONTH(barang_masuk.tanggal_masuk)', $bulan);
        $this->db->where('YEAR(barang_masuk.tanggal_masuk)', $tahun);
        $this->db->order_by('barang_masuk.tanggal_masuk', 'DESC');
        return $this->db->get()->result_array();
    }

    // Tambah data barang masuk
    public function tambah($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    // Hapus data barang masuk
    public function hapus($id)
    {
        $this->db->where('id_masuk', $id);
        return $this->db->delete($this->_table);
    }

    // Ambil data barang masuk berdasarkan id
    public function get_by_id($id)
    {
        $this->db->select('barang_masuk.id_masuk, barang.nama_barang, barang_masuk.jumlah_masuk, barang_masuk.tanggal_masuk, user.username, barang_masuk.barang_id');
        $this->db->from('barang_masuk');
        $this->db->join('barang', 'barang.id_barang = barang_masuk.barang_id');
        $this->db->join('user', 'user.id_user = barang_masuk.user_id');
        $this->db->where('barang_masuk.id_masuk', $id);
        return $this->db->get()->row_array();
    }

    // Update barang masuk
    public function update($id, $data)
    {
        $this->db->where('id_masuk', $id);
        return $this->db->update($this->_table, $data);
    }
}
