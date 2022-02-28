<?php

use function PHPSTORM_META\type;

defined('BASEPATH') or exit('No direct script access allowed');

class Kontruksi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        if (is_logged_in()) {
            redirect('auth');
        } else {
            $this->load->model('AdminModel');
            $this->load->helper(array('url', 'download'));
            date_default_timezone_set('Asia/Jakarta');
        }
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard Kontruksi'
        ];
        $this->load->view('kontruksi/dashboard', $data);
    }

    public function listpekerjaan()
    {
        $data = [
            'title' => 'List Pekerjaan'
        ];
        $this->load->view('kontruksi/listpekerjaan', $data);
    }
}
