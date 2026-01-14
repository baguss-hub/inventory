<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_keluar_model extends CI_Model { 

    private $_table = "barang_keluar";

    // Ambil semua data barang keluar dengan join barang & user
    public function get_all()
    {
        $this->db->select('barang_keluar.id_keluar, barang.nama_barang, barang_keluar.jumlah_keluar, barang_keluar.tanggal_keluar, user.username');
        $this->db->from('barang_keluar');
        $this->db->join('barang', 'barang.id_barang = barang_keluar.barang_id');
        $this->db->join('user', 'user.id_user = barang_keluar.user_id');
        $this->db->order_by('barang_keluar.tanggal_keluar', 'DESC');
        return $this->db->get()->result_array();
    }

    // Ambil data barang keluar berdasarkan bulan & tahun
    public function get_by_bulan($bulan, $tahun)
    {
        $this->db->select('barang_keluar.id_keluar, barang.nama_barang, barang_keluar.jumlah_keluar, barang_keluar.tanggal_keluar, user.username');
        $this->db->from('barang_keluar');
        $this->db->join('barang', 'barang.id_barang = barang_keluar.barang_id');
        $this->db->join('user', 'user.id_user = barang_keluar.user_id');
        $this->db->where('MONTH(barang_keluar.tanggal_keluar)', $bulan);
        $this->db->where('YEAR(barang_keluar.tanggal_keluar)', $tahun);
        $this->db->order_by('barang_keluar.tanggal_keluar', 'DESC');
        return $this->db->get()->result_array();
    }

    // Tambah data barang keluar
    public function tambah($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    // Hapus data barang keluar
    public function hapus($id)
    {
        $this->db->where('id_masuk', $id);
        return $this->db->delete($this->_table);
    }

    // Ambil data barang keluar berdasarkan id
    public function get_by_id($id)
    {
        $this->db->select('barang_keluar.id_keluar, barang.nama_barang, barang_keluar.jumlah_keluar, barang_keluar.tanggal_keluar, user.username, barang_keluar.barang_id');
        $this->db->from('barang_keluar');
        $this->db->join('barang', 'barang.id_barang = barang_keluar.barang_id');
        $this->db->join('user', 'user.id_user = barang_keluar.user_id');
        $this->db->where('barang_keluar.id_keluar', $id);
        return $this->db->get()->row_array();
    }

    // Update barang keluar
    public function update($id, $data)
    {
        $this->db->where('id_keluar', $id);
        return $this->db->update($this->_table, $data);
    }
}
