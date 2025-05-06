<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi_model extends CI_Model
{
    public function getAllTransaksi()
    {
        $this->db->select('transaksi.*, barang.nama AS nama_barang, barang.kode AS kode_barang,barang.harga AS harga_barang, user.username');
        $this->db->from('transaksi');
        $this->db->join('barang', 'barang.id = transaksi.barang_id');
        $this->db->join('user', 'user.id = transaksi.user_id');
        $this->db->order_by('transaksi.id', 'DESC');
        return $this->db->get()->result_array();
    }
    public function getTransaksiById($id)
    {
        return $this->db->get_where('transaksi', ['id' => $id])->row_array();
    }
}
