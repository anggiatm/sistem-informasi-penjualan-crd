<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim', [
            'required' => '<p class="font-italic text-danger text-sm-center mt-0">Masukan Username !</p>'
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|trim', [
            'required' => '<p class="font-italic text-danger text-sm-center">Masukan Password !</p>'
        ]);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login';
            $this->load->view('auth/login', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username', true);
        $password = $this->input->post('password', true);

        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                    'role' => $user['role']
                ];
                $this->session->set_userdata($data);
               //  redirect('admin');
                if ($user['role'] == 1) {
                    redirect('admin');
                } elseif ($user['role'] == 2) {
                    redirect('kontruksi');
                } elseif ($user['role'] == 3) {
                    redirect('driver');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau Password Salah !</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau Password Salah !</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username atau Password Salah !</div>');
            redirect('auth');
        }
    }

    public function registrasi()
    {
        $data = [
            'title' => 'Registrasi'
        ];
        $this->form_validation->set_rules('username', 'Username', 'required|trim|is_unique[user.username]', [
            'required' => 'Masukan Username !',
            'is_unique' => 'Username Sudah Terdaftar !'
        ]);

        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[password1]', [
            'matches' => 'Password Tidak Sama !',
            'min_length' => 'Password Terlalu Pendek !'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|matches[password]');

        if ($this->form_validation->run() == false) {
            $this->load->view('admin/registrasi', $data);
        } else {
            $data = [
                'username' => htmlspecialchars($this->input->post('username', true)),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role' => $this->input->post('role', true)
            ];

            $this->db->insert('user', $data);
            redirect('admin/registrasi');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role');
        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil Logout</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>'
        );
        redirect('auth');
    }

    public function blocked()
    {
        echo $_SESSION['username'];
        echo $_SESSION['role'];
    }
}
