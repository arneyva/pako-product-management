<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akses_model extends CI_Model
{
    public function getAllUser()
    {
        return $this->db->get('user')->result_array();
    }

    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }
    public function getUserByUsername($username)
    {
        return $this->db->get_where('user', ['username' => $username])->row_array();
    }

    public function insertUser($data)
    {
        return $this->db->insert('user', $data);
    }

    public function updateUser($id, $data)
    {
        return $this->db->update('User', $data, ['id' => $id]);
    }
}
