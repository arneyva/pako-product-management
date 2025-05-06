<?php
defined('BASEPATH') or exit('No direct script access allowed');
/**
 * @property CI_Form_validation $form_validation
 * @property CI_Input $input
 * @property CI_Session $session
 * @property CI_DB_mysqli_driver $db
 * @property Akses_model $Akses_model
 */
class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Akses_model');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Technical Test Pako Group';
            $this->load->view('auth/header', $data);
            $this->load->view('auth/login');
            $this->load->view('auth/footer');
        } else {
            $this->_login();
        }
    }
    public function _login()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password',true);
        $user = $this->Akses_model->getUserByUsername($username);
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $this->session->set_userdata([
                    'id'        => $user['id'],
                    'username'  => $user['username'],
                    'useraccess' => $user['useraccess']
                ]);
                if ($user['useraccess'] === 'admin') {
                    $this->session->set_flashdata('success', 'Berhasil login');
                    redirect('transaksi');
                } else {
                    $this->session->set_flashdata('error', 'User tidak diperbolehkan mengakses halaman ini');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('error', 'Password salah');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('error', 'User tidak ditemukan');
            redirect('auth');
        }
    }

    public function register()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim|min_length[6]|is_unique[user.username]', [
            'min_length' => 'username minimal 6 karakter!'
        ]);
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim|is_unique[user.email]');
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', [
            'matches' => 'Password tidak sesuai!',
            'min_length' => 'Password terlalu pendek!'
        ]);
        $this->form_validation->set_rules('password2', 'Repeat Password', 'required|trim|min_length[6]|matches[password1]');
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Technical Test Pako Group';
            $this->load->view('auth/header');
            $this->load->view('auth/register', $data);
            $this->load->view('auth/footer');
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'useraccess' => 'admin',
                'email' => $this->input->post('email', true),
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
            ];
            if ($this->Akses_model->insertUser($data)) {
                $this->session->set_flashdata('success', 'Akun berhasil dibuat. Silakan login.');
            } else {
                $this->session->set_flashdata('error', 'Gagal membuat akun. Silakan coba lagi.');
            }
            redirect('auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('useraccess');
        $this->session->set_flashdata('success', 'Berhasil logout.');
        redirect('auth');
    }
}
