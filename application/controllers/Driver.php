<?php

use function PHPSTORM_META\type;

defined('BASEPATH') or exit('No direct script access allowed');

class Driver extends CI_Controller
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
            'title' => 'Dashboard Driver'
        ];
        $this->load->view('driver/dashboard', $data);
    }

    public function listpengiriman()
    {
        $data = [
            'title' => 'List Pengiriman'
        ];
        $this->load->view('driver/listpengiriman', $data);
    }
}
