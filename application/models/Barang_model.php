<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

    private $_table = "barang";

    public function get_all()
    {
        $this->db->select('barang.*, kategori.nama_kategori');
        $this->db->from('barang');
        $this->db->join('kategori', 'kategori.id_kategori = barang.kategori_id');
        return $this->db->get()->result_array();
    }

    public function tambah($data)
    {
        return $this->db->insert($this->_table, $data);
    }

    public function hapus($id)
    {
        $this->db->where('id_barang', $id);
        return $this->db->delete($this->_table);
    }

    public function get_by_id($id)
    {
        $this->db->select('
            barang.*,
            kategori.nama_kategori
        ');
        $this->db->from('barang');
        $this->db->join('kategori', 'kategori.id_kategori = barang.kategori_id');
        $this->db->where('barang.id_barang', $id);

        return $this->db->get()->row_array();
    }


    public function update($id, $data)
    {
        $this->db->where('id_barang', $id);
        return $this->db->update($this->_table, $data);
    }
}