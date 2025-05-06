<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Session $session
 * @property CI_DB_mysqli_driver $db
 * @property Barang_model $Barang_model
 * @property Transaksi_model $Transaksi_model
 */
class Transaksi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->check_login();
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
        $this->load->model('Barang_model');
        $data['barang'] = $this->Barang_model->getAllBarang();
        $this->load->model('Transaksi_model');
        $data['transaksi'] = $this->Transaksi_model->getAllTransaksi();
        $this->db->select("DATE(tanggal) as date, SUM(quantity * harga) as total_transaksi");
        $this->db->from('transaksi');
        $this->db->join('barang', 'transaksi.barang_id = barang.id');
        $this->db->group_by('DATE(tanggal)');
        $this->db->order_by('DATE(tanggal)', 'ASC');
        $query = $this->db->get();

        $dataTransaksi = $query->result_array();

        $labels = [];
        $totalTransaksi = [];
        foreach ($dataTransaksi as $row) {
            $labels[] = $row['date'];
            $totalTransaksi[] = (int) $row['total_transaksi'];
        }
        $target = 500000;

        $data['labels'] = json_encode($labels);
        $data['total_transaksi'] = json_encode($totalTransaksi);
        $data['target'] = $target;
        $this->load->view('dashboard/transaksi', $data);
    }
    public function getharga($id)
    {
        $barang = $this->db->get_where('barang', ['id' => $id])->row_array();

        if ($barang) {
            echo json_encode(['harga' => $barang['harga']]);
        } else {
            echo json_encode(['harga' => null]);
        }
    }
    public function tambahTransaksi()
    {

        $this->form_validation->set_rules('barang_id', 'Barang', 'required');
        $this->form_validation->set_rules('quantity', 'Quantity', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Data transaksi gagal disimpan!');
        } else {
            $barang_id = $this->input->post('barang_id', true);
            $quantity = $this->input->post('quantity', true);
            $this->load->model('Barang_model');
            $barang = $this->Barang_model->getBarangById($barang_id);

            if (!$barang) {
                $this->session->set_flashdata('error', 'Barang tidak ditemukan!');
                redirect('transaksi');
                return;
            }

            $total = $barang['harga'] * $quantity;

            $data = [
                'barang_id' => $barang_id,
                'user_id'   => $this->session->userdata('id'),
                'tanggal'   => date('Y-m-d'),
                'harga_transaksi' => $barang['harga'],
                'quantity'  => $quantity,
                'total'     => $total
            ];

            $this->db->insert('transaksi', $data);
            $this->session->set_flashdata('success', 'Transaksi berhasil disimpan!');
        }

        redirect('transaksi');
    }
    public function hapusTransaksi($id)
    {
        $this->db->delete('transaksi', ['id' => $id]);
        $this->session->set_flashdata('success', 'Transaksi berhasil dihapus!');
        redirect('transaksi');
    }
    public function updateTransaksi($id)
    {
        $this->form_validation->set_rules('quantity', 'Quantity', 'required|numeric');

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('error', 'Data transaksi gagal diperbarui!');
            redirect('transaksi');
            return;
        } else {
            $quantity = $this->input->post('quantity', true);
            $this->load->model('Transaksi_model');
            $transaksi = $this->Transaksi_model->getTransaksiById($id);
            if (!$transaksi) {
                $this->session->set_flashdata('error', 'Transaksi tidak ditemukan!');
                redirect('transaksi');
                return;
            }
            $this->load->model('Barang_model');
            $barang = $this->Barang_model->getBarangById($transaksi['barang_id']);
            if (!$barang) {
                $this->session->set_flashdata('error', 'Barang tidak ditemukan!');
                redirect('transaksi');
                return;
            }
            $total = $barang['harga'] * $quantity;
            $data = [
                'quantity'  => $quantity,
                'total'     => $total
            ];
            $this->db->update('transaksi', $data, ['id' => $id]);
            $this->session->set_flashdata('success', 'Transaksi berhasil diperbarui!');
        }
        redirect('transaksi');
    }
}
