<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model 
{
    private $_table = "user";

    public function get_all()
    {
        $query = $this->db->get($this->_table);
        return $query->result_array();
    }

    public function tambah($data)
    {
        $this->db->insert($this->_table, $data);
        return ($this->db->affected_rows() != 0) ? true : false;
    }

    public function get_by_id($id)
    {
        $this->db->where('id_user', $id);
        return $this->db->get($this->_table)->row_array();
    }

    public function hapus($id)
    {
        $this->db->delete($this->_table, array('id_user' => $id));
        return ($this->db->affected_rows() != 0) ? true : false;
    }

    public function ubah($id, $data)
    {
        $this->db->where('id_user', $id);
        $this->db->update($this->_table, $data);
        return ($this->db->affected_rows() != 0) ? true : false;
    }
}