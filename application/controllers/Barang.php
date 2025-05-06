<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Session $session
 * @property CI_DB_mysqli_driver $db
 * @property Barang_model $Barang_model
 */
class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login();
        $this->load->model('Barang_model');
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
        $barang = $this->load->model('Barang_model');
        $data['barang'] = $this->Barang_model->getAllBarang();
        $this->load->view('dashboard/header');
        $this->load->view('dashboard/barang', $data);
        $this->load->view('dashboard/footer');
    }
    public function tambahBarang()
    {
        $this->form_validation->set_rules('nama', 'Nama Barang', 'required');
        $this->form_validation->set_rules('kode', 'Kode Barang', 'required|is_unique[barang.kode]');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Data gagal ditambahkan!');
        } else {
            $data = [
                'nama' => $this->input->post('nama', true),
                'kode' => $this->input->post('kode', true),
                'harga' => $this->input->post('harga', true),
            ];
            if ($this->Barang_model->insertBarang($data)) {
                $this->session->set_flashdata('success', 'Barang berhasil ditambahkan!');
            } else {
                $this->session->set_flashdata('error', 'Gagal menambah barang. Silakan coba lagi.');
            }
        }
        redirect('barang');
    }
    public function updateBarang($id)
    {
        $this->form_validation->set_rules('nama', 'Nama Barang', 'required');
        $this->form_validation->set_rules('kode', 'Kode Barang', 'required|callback_kode_unik[' . $id . ']');
        $this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Update gagal!');
        } else {
            $data = [
                'nama' => $this->input->post('nama', true),
                'kode' => $this->input->post('kode', true),
                'harga' => $this->input->post('harga', true),
            ];
            $this->Barang_model->updateBarang($id, $data);
            $this->session->set_flashdata('success', 'Barang berhasil diupdate!');
        }
        redirect('barang');
    }
    public function kode_unik($kode, $id)
    {
        $this->db->where('kode', $kode);
        $this->db->where('id !=', $id);
        $query = $this->db->get('barang');

        if ($query->num_rows() > 0) {
            $this->form_validation->set_message('kode_unik', 'Kode Barang sudah digunakan.');
            return FALSE;
        } else {
            return TRUE;
        }
    }
    public function hapusBarang($id)
    {
        if ($this->Barang_model->checkBarangInTransaksi($id)) {
            $this->session->set_flashdata('error', 'Barang tidak dapat dihapus karena sudah digunakan dalam transaksi.');
        } else {
            if ($this->Barang_model->deleteBarang($id)) {
                $this->session->set_flashdata('success', 'Barang berhasil dihapus!');
            } else {
                $this->session->set_flashdata('error', 'Gagal menghapus barang.');
            }
        }
        redirect('barang');
    }
}
