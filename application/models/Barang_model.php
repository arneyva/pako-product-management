<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang_model extends CI_Model
{
    public function getAllBarang()
    {
        return $this->db->get('barang')->result_array();
    }

    public function insertBarang($data)
    {
        return $this->db->insert('barang', $data);
    }

    public function getBarangById($id)
    {
        return $this->db->get_where('barang', ['id' => $id])->row_array();
    }

    public function updateBarang($id, $data)
    {
        return $this->db->update('barang', $data, ['id' => $id]);
    }
    public function checkBarangInTransaksi($id)
    {
        $this->db->select('transaksi.id');
        $this->db->from('transaksi');
        $this->db->join('barang', 'barang.id = transaksi.barang_id');
        $this->db->where('barang.id', $id);
        $query = $this->db->get();

        return $query->num_rows() > 0;
    }
    public function deleteBarang($id)
    {
        return $this->db->delete('barang', ['id' => $id]);
    }
}
