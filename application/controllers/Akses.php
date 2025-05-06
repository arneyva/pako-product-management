<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Session $session
 * @property CI_DB_mysqli_driver $db
 * @property Akses_model $Akses_model
 */
class Akses extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        $this->load->model('Akses_model');
        $this->load->library('form_validation');
    }
    private function check_login()
    {
        if (!$this->session->userdata('username') || $this->session->userdata('useraccess') !== 'admin') {
            redirect('auth');
        }
    }
    public function index()
    {
        $akses = $this->load->model('Akses_model');
        $data['akses'] = $this->Akses_model->getAllUser();
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/akses', $data);
        $this->load->view('dashboard/footer');
    }
    public function updateAkses($id)
    {
        $username = $this->input->post('nama', true);
        $email = $this->input->post('email', true);
        $useraccess = $this->input->post('useraccess', true);

        $currentUser = $this->db->get_where('user', ['id' => $id])->row_array();
        if ($this->db->where('username', $username)->where('id !=', $id)->get('user')->num_rows() > 0) {
            $this->session->set_flashdata('error', 'Username sudah digunakan!');
            redirect('akses');
            return;
        }

        if ($this->db->where('email', $email)->where('id !=', $id)->get('user')->num_rows() > 0) {
            $this->session->set_flashdata('error', 'Email sudah digunakan!');
            redirect('akses');
            return;
        }
        $data = [
            'username' => $username,
            'email' => $email,
            'useraccess' => $useraccess
        ];

        if ($this->db->update('user', $data, ['id' => $id])) {
            $this->session->set_flashdata('success', 'Data user berhasil diupdate!');
        } else {
            $this->session->set_flashdata('error', 'Gagal mengupdate data user.');
        }
        redirect('akses');
    }
}
